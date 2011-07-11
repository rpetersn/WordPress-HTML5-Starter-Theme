<?php

// Associate Gravity Form with CPT

add_filter("gform_post_data", "update_post_type", 10, 2);

function update_post_type($post_data, $form){

    if($form["id"] == '1'){ //"Post A Job" Form
        $post_data["post_type"] = "job-posts";
    }
    return $post_data;
}


// This theme uses wp_nav_menu() in one location.

register_nav_menus( array(
		'global' => __( 'Global Navigation', 'Global Navigation' ),
	) );


// Sidebars & Widgetizes Areas
register_sidebar(array(
		'name'=>'Global',
       'before_widget' => '',
       'after_widget' => '',
       'before_title' => '<h2>',
       'after_title' => '</h2>',
   ));
   
   
// hide inline comments style
function twentyten_remove_recent_comments_style() {  
    global $wp_widget_factory;  
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
}  
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' ); 

/* Facebook Connect Image Fix */

// facebook share correct image fix (thanks to yoast)
function bones_facebook_connect() {
	if (is_singular()) {
	  global $post;
	  if ( current_theme_supports('post-thumbnails') 
	      && has_post_thumbnail( $post->ID ) ) {
	    $thumbnail = wp_get_attachment_image_src( 
	      get_post_thumbnail_id( $post->ID ), 'thumbnail', false);
	    echo '<meta property="og:image" 
	      content="'.$thumbnail[0].'" />';	
	  }
	  echo '<meta property="og:title" 
	    content="'.get_the_title().'" />';
	  if ( get_the_excerpt() != '' )
	    echo '<meta property="og:description" 
	      content="'.strip_tags( get_the_excerpt() ).'" />';
	}
}

// add this in the header 
add_action('wp_head', 'bones_facebook_connect');


// Display the Browser People Are Using
function bones_browser_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
		if($is_lynx) $classes[] = 'browser-lynx';
		elseif($is_gecko) $classes[] = 'browser-gecko';
		elseif($is_opera) $classes[] = 'browser-opera';
		elseif($is_NS4) $classes[] = 'browser-ns4';
		elseif($is_safari) $classes[] = 'browser-safari';
		elseif($is_chrome) $classes[] = 'browser-chrome';
		elseif($is_IE) $classes[] = 'browser-ie';
		else $classes[] = '';
		if($is_iphone) $classes[] = 'browser-iphone';
	return $classes;
}
	// Add the Browser Class to the Body Class
	add_filter('body_class','bones_browser_class');
	
	
// remove some WP defaults
function removeHeadLinks() {
	// remove simple discovery link
	remove_action('wp_head', 'rsd_link');
	// remove windows live writer link
	remove_action('wp_head', 'wlwmanifest_link');
	// remove the version number
	remove_action('wp_head', 'wp_generator');
	// remove header links
}
	add_action('init', 'removeHeadLinks');
	// Add RSS links to <head> section
	add_theme_support('automatic-feed-links');

//iframe shortcode (helps WP behave when switching between visual and code views

function fixIframe($atts) {
    extract(shortcode_atts(array(
	"url" => 'http://',
    "width" => '1',
	"height" => '1'
    ), $atts));

    return '<iframe width="'. $width .'" height="' . $height . '" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' . $url . '"></iframe>';
}

add_shortcode('fixiframe', 'fixIframe');

// multiple excerpt lengths
function wpe_excerptlength_featured($length) {
 return 75;
}
function wpe_excerptlength($length) {
 return 20;
}

function wpe_excerpt($length_callback='', $more_callback='') {
 global $post;
 if(function_exists($length_callback)){
 add_filter('excerpt_length', $length_callback);
 }
 if(function_exists($more_callback)){
 add_filter('excerpt_more', $more_callback);
 }
 $output = get_the_excerpt();
 $output = apply_filters('wptexturize', $output);
 $output = apply_filters('convert_chars', $output);

 echo $output;
}


// add more link to expert
function new_excerpt_more($more) {
       global $post;
 return '&hellip;<a href="'. get_permalink($post->ID) . '">Read More &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Get Custom Field Template Values
function getCustomField($theField) {
	global $post;
	$block = get_post_meta($post->ID, $theField);
	if($block){
		foreach(($block) as $blocks) {
			return $blocks;
		}
	}
}

// Check if page is a direct subpage

function is_subpage($the_id){
global $post;
if ($post->post_parent == $the_id) {
return true;
} else {
return false;
}
}

// Check if a page is in a family tree

function is_tree($pid) {
// $pid = The ID of the ancestor page
global $post; // load details about this page
$anc = get_post_ancestors( $post->ID );
foreach($anc as $ancestor) {
if(is_page() && $ancestor == $pid) {
return true;
}
}
if(is_page()&&(is_page($pid)))
return true; // we're at the page or at a sub page
else
return false; // we're elsewhere
};

// Check if a page is a descendant, but not the original page ID

function is_child($pid) {
// $pid = The ID of the ancestor page
global $post; // load details about this page
$anc = get_post_ancestors( $post->ID );
foreach($anc as $ancestor) {
if(is_page() && $ancestor == $pid) {
return true;
}
}
return false; // we're elsewhere
};
	
	
?>