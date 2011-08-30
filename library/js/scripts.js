/* imgsizer (flexible images for fluid sites) */
var imgSizer={Config:{imgCache:[],spacer:"/path/to/your/spacer.gif"},collate:function(aScope){var isOldIE=(document.all&&!window.opera&&!window.XDomainRequest)?1:0;if(isOldIE&&document.getElementsByTagName){var c=imgSizer;var imgCache=c.Config.imgCache;var images=(aScope&&aScope.length)?aScope:document.getElementsByTagName("img");for(var i=0;i<images.length;i++){images[i].origWidth=images[i].offsetWidth;images[i].origHeight=images[i].offsetHeight;imgCache.push(images[i]);c.ieAlpha(images[i]);images[i].style.width="100%";}
if(imgCache.length){c.resize(function(){for(var i=0;i<imgCache.length;i++){var ratio=(imgCache[i].offsetWidth/imgCache[i].origWidth);imgCache[i].style.height=(imgCache[i].origHeight*ratio)+"px";}});}}},ieAlpha:function(img){var c=imgSizer;if(img.oldSrc){img.src=img.oldSrc;}
var src=img.src;img.style.width=img.offsetWidth+"px";img.style.height=img.offsetHeight+"px";img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')"
img.oldSrc=src;img.src=c.Config.spacer;},resize:function(func){var oldonresize=window.onresize;if(typeof window.onresize!='function'){window.onresize=func;}else{window.onresize=function(){if(oldonresize){oldonresize();}
func();}}}}

// as the page loads, cal these scripts

var J = jQuery.noConflict();
 
J(document).ready(function() {

	// add icons
					 
	J("a[href$='.pdf']").addClass("pdf");
	J("a[href$='.doc']").addClass("doc");
	J("a[href$='.ppt']").addClass("ppt");

	// Superfish
 
        J('ul.sf-menu').superfish({ 
			hoverClass:    'sfHover',          				// the class applied to hovered list items 
			pathClass:     'overideThisToUse', 				// the class you have applied to list items that lead to the current page 
			pathLevels:    1,                  				// the number of levels of submenus that remain open or are restored using pathClass 
            delay:         1200,                           	// one second delay on mouseout 
            animation:     {opacity:'show',height:'show'}, 	// fade-in and slide-down animation 
            speed:         'fast',                         	// faster animation speed 
            autoArrows:    true,                            // disable generation of arrow mark-up 
            dropShadows:   true,                            // disable drop shadows
			disableHI:     false,							// set to true to disable hoverIntent detection 
			onInit:        function(){},       				// callback function fires once Superfish is initialised – 'this' is the containing ul 
			onBeforeShow:  function(){},       				// callback function fires just before reveal animation begins – 'this' is the ul about to open 
			onShow:        function(){},       				// callback function fires once reveal animation completed – 'this' is the opened ul 
			onHide:        function(){}        				// callback function fires after a sub-menu has closed – 'this' is the ul that just closed  
        }); // end superfish
        
        
		// FANCYBOX
		
		
			J.fn.getTitle = function() {
			var arr = J("a.fancybox");
			J.each(arr, function() {
				var title = J(this).children("img").attr("alt");
				if (title =="") {title = J(this).next().children("p").html()}; // create title from PWA + PHP captions
				if (title == "") {title = J(this).attr("title")}; // if nothing else, set title to that of the page
				J(this).attr('title',title);
			})
		}

		// Supported file extensions
		var thumbnails = 'a:has(img)[href$=".bmp"],a:has(img)[href$=".gif"],a:has(img)[href$=".jpg"],a:has(img)[href$=".jpeg"],a:has(img)[href$=".png"],a:has(img)[href$=".BMP"],a:has(img)[href$=".GIF"],a:has(img)[href$=".JPG"],a:has(img)[href$=".JPEG"],a:has(img)[href$=".PNG"]';

	
		J(thumbnails).addClass("fancybox").attr("rel","fancybox").getTitle();

		//J(thumbnails).addClass("fancybox").attr("rel","fancybox");

			J("a.fancybox").fancybox({
			'autoScale': false,
			'padding': 10,
			'zoomOpacity': true,
			'zoomSpeedIn': 500,
			'zoomSpeedOut': 500,
			'zoomSpeedChange': 300,
			'overlayShow': true,
			'overlayColor': "#666666",
			'overlayOpacity': 0.3,
			'enableEscapeButton': true,
			'showCloseButton': true,
			'hideOnOverlayClick': true,
			'hideOnContentClick': false,
			'frameWidth':  560,
			'frameHeight':  340,
			'callbackOnStart': null,
			'callbackOnShow': null,
			'callbackOnClose': null,
			'centerOnScroll': false,
			'title'			: this.title,
			'titlePosition'	:	'over'

		});
			
			J("a.more_info").fancybox({
			'autoScale': false,
			'padding': 15,
			'zoomOpacity': true,
			'zoomSpeedIn': 500,
			'zoomSpeedOut': 500,
			'zoomSpeedChange': 300,
			'overlayShow': true,
			'overlayColor': "#666666",
			'overlayOpacity': 0.3,
			'enableEscapeButton': true,
			'showCloseButton': true,
			'hideOnOverlayClick': true,
			'hideOnContentClick': false,
			'callbackOnStart': null,
			'callbackOnShow': null,
			'callbackOnClose': null,
			'centerOnScroll': false
		});		
		
		
		J("a.open-vid").fancybox({
		'hideOnContentClick': false,
		'width'				: 720,
		'height'			: 410,
        'autoScale'     	: false,
        'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'type'				: 'iframe',
		'titleShow'			: false,
		'padding'			: 0
		});		

 
}); /* end of as page load scripts */