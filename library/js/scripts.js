/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp-head()
this file will be called automatically in the footer so as not to 
slow the page load.

*/

/* imgsizer (flexible images for fluid sites) */
var imgSizer={Config:{imgCache:[],spacer:"/path/to/your/spacer.gif"},collate:function(aScope){var isOldIE=(document.all&&!window.opera&&!window.XDomainRequest)?1:0;if(isOldIE&&document.getElementsByTagName){var c=imgSizer;var imgCache=c.Config.imgCache;var images=(aScope&&aScope.length)?aScope:document.getElementsByTagName("img");for(var i=0;i<images.length;i++){images[i].origWidth=images[i].offsetWidth;images[i].origHeight=images[i].offsetHeight;imgCache.push(images[i]);c.ieAlpha(images[i]);images[i].style.width="100%";}
if(imgCache.length){c.resize(function(){for(var i=0;i<imgCache.length;i++){var ratio=(imgCache[i].offsetWidth/imgCache[i].origWidth);imgCache[i].style.height=(imgCache[i].origHeight*ratio)+"px";}});}}},ieAlpha:function(img){var c=imgSizer;if(img.oldSrc){img.src=img.oldSrc;}
var src=img.src;img.style.width=img.offsetWidth+"px";img.style.height=img.offsetHeight+"px";img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')"
img.oldSrc=src;img.src=c.Config.spacer;},resize:function(func){var oldonresize=window.onresize;if(typeof window.onresize!='function'){window.onresize=func;}else{window.onresize=function(){if(oldonresize){oldonresize();}
func();}}}}

// as the page loads, cal these scripts

var J = jQuery.noConflict();
 
J(document).ready(function() {

	// Superfish
    J(document).ready(function() { 
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
        }); 
    }); 
 
}); /* end of as page load scripts */