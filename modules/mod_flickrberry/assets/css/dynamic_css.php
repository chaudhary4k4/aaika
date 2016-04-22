<?php
header("Content-type: text/css");
if (isset($_GET['mod_id'])) 
 { $mod_id = $_GET['mod_id'];}
if (isset($_GET['fl_margin'])) 
 { $fl_margin = $_GET['fl_margin'];}
else { $fl_margin = '4'; }
if (isset($_GET['fl_padding'])) 
	{ $fl_padding = $_GET['fl_padding'];}
else { $fl_padding = '0'; }
if (isset($_GET['fl_border'])) 
	{ $fl_border = $_GET['fl_border'];}
else { $fl_border = '0'; }
if (isset($_GET['fl_border_color'])) 
	{ $fl_border_color = $_GET['fl_border_color'];}
else { $fl_border_color = '0'; }
if (isset($_GET['fl_border_radius'])) 
	{ $fl_border_radius = $_GET['fl_border_radius'];}
else { $fl_border_radius = ''; }
if (isset($_GET['fl_max_width'])) 
	{ $fl_max_width = $_GET['fl_max_width'];}
if ( $fl_max_width == "px" ) { $fl_max_width = "100%"; }

?>
#gallery_<?php echo $mod_id; ?> { margin: 0; padding: 0; overflow: hidden; }
#gallery_<?php echo $mod_id; ?> li { list-style: none; float: left; margin: <?php echo $fl_margin; ?>px; padding: 0; background: transparent; }
#gallery_<?php echo $mod_id; ?> li a { }
#gallery_<?php echo $mod_id; ?> li img { display: block;  <?php if ($fl_border_radius != '') : ?>border-radius:<?php echo $fl_border_radius; ?>px;<?php endif; ?> }
<?php if ($fl_border == "0") : ?> 
#gallery_<?php echo $mod_id; ?> li a img, .bx-wrapper_<?php echo $mod_id; ?> .bx-viewport { border: none;}
<?php elseif ($fl_border != "0") : ?>
#gallery_<?php echo $mod_id; ?> li a img, .bx-wrapper_<?php echo $mod_id; ?> .bx-viewport { border: <?php echo $fl_border; ?> solid #<?php echo $fl_border_color; ?>; padding: <?php echo $fl_padding; ?>px;}
<?php endif; ?>
#gallery_<?php echo $mod_id; ?> a[data-lightbox] { display: inline; }

/*! http://responsiveslides.com v1.54 by @viljamis */

#cycle_<?php echo $mod_id; ?> {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  height:100%;
  padding: 0;
  margin: 0;
  }

#cycle_<?php echo $mod_id; ?> li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

#cycle_<?php echo $mod_id; ?> li:first-child {
  position: relative;
  display: block;
  float: left;
  }

#cycle_<?php echo $mod_id; ?> img {
  display: block;
  height: auto;
  float: left;
  width: 100%;
  border: 0;
 }

/**
 * BxSlider v4.1.2 - Fully loaded, responsive content slider
 * http://bxslider.com
 *
 * Written by: Steven Wanderski, 2014
 * http://stevenwanderski.com
 * (while drinking Belgian ales and listening to jazz)
 *
 * CEO and founder of bxCreative, LTD
 * http://bxcreative.com
 */


/** RESET AND LAYOUT
===================================*/

.bx-wrapper_<?php echo $mod_id; ?> {
	position: relative;
	margin: 0 auto 60px;
	padding: 0;
	*zoom: 1;
    max-width: <?php echo $fl_max_width; ?> !important;
}

.bx-wrapper_<?php echo $mod_id; ?> img {
	max-width: 100%;
	display: block;
}

/** THEME
===================================*/

.bx-wrapper_<?php echo $mod_id; ?> .bx-viewport {
	left: -<?php echo $fl_padding; ?>px;
    
		
	/*fix other elements on the page moving (on Chrome)*/
	-webkit-transform: translatez(0);
	-moz-transform: translatez(0);
    	-ms-transform: translatez(0);
    	-o-transform: translatez(0);
    	transform: translatez(0);
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-pager,
.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto {
	position: absolute;
	bottom: -30px;
	width: 100%;
}

/* LOADER */

.bx-wrapper_<?php echo $mod_id; ?> .bx-loading {
	min-height: 50px;
	background: url(../images/bx_loader.gif) center center no-repeat #fff;
	height: 100%;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 2000;
}

/* PAGER */

.bx-wrapper_<?php echo $mod_id; ?> .bx-pager {
	text-align: center;
	font-size: .85em;
	font-family: Arial;
	font-weight: bold;
	color: #666;
	padding-top: 20px;
   }

.bx-wrapper_<?php echo $mod_id; ?> .bx-pager .bx-pager-item,
.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-controls-auto-item {
	display: inline-block;
	*zoom: 1;
	*display: inline;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-pager.bx-default-pager a {
	background: #666;
	text-indent: -9999px;
	display: block;
	width: 10px;
	height: 10px;
	margin: 0 3px;
	outline: 0;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-pager.bx-default-pager a:hover,
.bx-wrapper_<?php echo $mod_id; ?> .bx-pager.bx-default-pager a.active {
	background: #000;
}

/* DIRECTION CONTROLS (NEXT / PREV) */


.bx-wrapper_<?php echo $mod_id; ?> .bx-prev {
	background-position: 43px 0;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-next {
	background-position: 43px 0;
}

.bx-wrapper_<?php echo $mod_id; ?>:hover .bx-prev {
	left: 10px;
	background: url(../images/controls.png) no-repeat 0 -32px;
}

.bx-wrapper_<?php echo $mod_id; ?>:hover .bx-next {
	right: 10px;
	background: url(../images/controls.png) no-repeat -43px -32px;
}
.bx-wrapper_<?php echo $mod_id; ?> .bx-prev:hover {
	left: 10px;
	background: url(../images/controls.png) no-repeat 0 0px;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-next:hover {
	right: 10px;
	background: url(../images/controls.png) no-repeat -43px 0px;
}



.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-direction a {
	position: absolute;
	top: 50%;
	margin-top: -16px;
	outline: 0;
	width: 32px;
	height: 32px;
	text-indent: -9999px;
	z-index: 9999;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-direction a.disabled {
	display: none;
}

/* AUTO CONTROLS (START / STOP) */

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto {
	text-align: center;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-start {
	display: block;
	text-indent: -9999px;
	width: 10px;
	height: 11px;
	outline: 0;
	background: url(../images/controls.png) -86px -11px no-repeat;
	margin: 0 3px;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-start:hover,
.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-start.active {
	background-position: -86px 0;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-stop {
	display: block;
	text-indent: -9999px;
	width: 9px;
	height: 11px;
	outline: 0;
	background: url(../images/controls.png) -86px -44px no-repeat;
	margin: 0 3px;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-stop:hover,
.bx-wrapper_<?php echo $mod_id; ?> .bx-controls-auto .bx-stop.active {
	background-position: -86px -33px;
}

/* PAGER WITH AUTO-CONTROLS HYBRID LAYOUT */

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls.bx-has-controls-auto.bx-has-pager .bx-pager {
	text-align: left;
	width: 80%;
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-controls.bx-has-controls-auto.bx-has-pager .bx-controls-auto {
	right: 0;
	width: 35px;
}

/* IMAGE CAPTIONS */

.bx-wrapper_<?php echo $mod_id; ?> .bx-caption {
	position: absolute;
	bottom: 0;
	left: 0;
	background: #666\9;
	background: rgba(80, 80, 80, 0.75);
	width: 100%;
    
}

.bx-wrapper_<?php echo $mod_id; ?> .bx-caption span {
	color: #fff;
	font-family: Arial;
	display: block;
	font-size: .85em;
	padding: 10px;
 }


