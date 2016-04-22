<?php
/**
 * @package     webberry
 * @subpackage  mod_flickrberry
 * @author - Axel Ropte
 * @copyright - Copyright (C) 2014 Webberry Webdesign, All rights reserved.
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * Websites: www.webberry-webdesign.de
 */
// no direct access
defined( '_JEXEC' ) or die('Restricted Access');

$mod_id = $module->id;
$fl_script = $params->get('fl_script');
$fl_style = $params->get('fl_style');
$fl_size = $params->get('fl_size');
$fl_limit = trim($params->get('fl_limit'));
$fl_id = trim($params->get('fl_id'));
$fl_jquery = $params->get('fl_jquery');
$fl_width = trim($params->get('fl_width'));
if ($fl_width > "100") { $fl_width = "100"; };
$fl_width_px = trim($params->get('fl_width_px'));
$fl_width_pc = trim($params->get('fl_width_pc'));
if ($fl_width_pc != "") { $fl_max_width = ($fl_width_pc."%"); };
if ($fl_width_pc == "") { $fl_max_width = ($fl_width_px."px"); };
$fl_margin = trim($params->get('fl_margin'));
$fl_padding = trim($params->get('fl_padding'));
$fl_border = $params->get('fl_border');
$fl_border_color = $params->get('fl_border_color');
$fl_border_color = substr( $fl_border_color, 1);
$fl_border_radius = trim($params->get('fl_border_radius'));
$fl_desc = trim($params->get('fl_desc'));
$fl_desc_style = $params->get('fl_desc_style');
$fl_time = trim($params->get('fl_time'));
$fl_nav = $params->get('fl_nav');
$fl_bullets = $params->get('fl_bullets');
$fl_auto = $params->get('fl_auto');
$fl_playstop = $params->get('fl_playstop');
$fl_modal = $params->get('fl_modal');
$fl_link = image_b;
if ($fl_modal == "0") { $fl_link = "link"; };
$fl_title = $params->get('fl_title');


$document =& JFactory::getDocument();
if ($fl_jquery == "1") { $document->addScript("http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"); }
if ($fl_modal == "1") { $document->addScript(JURI::base() . 'modules/mod_flickrberry/assets/js/jquery.fancybox.pack.js');
						$document->addStyleSheet(JURI::base() . 'modules/mod_flickrberry/assets/css/jquery.fancybox.css');
					  }
$document->addStyleSheet(JURI::base() . 'modules/mod_flickrberry/assets/css/dynamic_css.php?fl_margin='.$fl_margin.'&amp;fl_padding='.$fl_padding.'&amp;fl_border='.$fl_border.'&amp;fl_border_color='.$fl_border_color.'&amp;fl_border_radius='.$fl_border_radius.'&amp;fl_max_width='.$fl_max_width.'&amp;mod_id='.$mod_id.'"  media="screen');
?>

<?php if ($fl_style == "gal") : ?>
<div id="flickr_badge_wrapper">
<?php if ($fl_desc != "") : ?>
<?php echo "<".$fl_desc_style.">".$fl_desc."</".$fl_desc_style.">"; ?>
<?php endif; ?>
<ul class="gallery" id="gallery_<?php echo $mod_id; ?>">
</ul>

<?php if ($fl_script == "1") : ?><script src="modules/mod_flickrberry/assets/js/jflickrfeed.min.js" type="text/javascript"></script><?php endif; ?>
<?php if ($fl_script == "2") : ?><script src="modules/mod_flickrberry/assets/js/jflickrfeed.group.min.js" type="text/javascript"></script><?php endif; ?>
<script>
jQuery(document).ready(function($){
	$('#gallery_<?php echo $mod_id; ?>').jflickrfeed({
		limit: <?php echo $fl_limit; ?>,
		qstrings: {
			id: '<?php echo $fl_id; ?>'
		},
		useTemplate : false,
		itemCallback: function(item){
			$(this).append('<a <?php if ($fl_modal == "1") : ?>class="fancy" rel="set<?php echo $mod_id; ?>"<?php endif; ?><?php if ($fl_modal == "2") : ?>data-lightbox="group:<?php echo $mod_id; ?>"<?php endif; ?> href='+item.<?php echo $fl_link; ?>+' <?php if ($fl_title == "1") : ?>title="'+item.title+'"<?php endif; ?> <?php if ($fl_modal == "0") : ?>target="_blank"<?php endif; ?>><img alt="'+item.title+'" width="<?php echo $fl_width; ?>px" height="<?php echo $fl_width; ?>px" title="'+item.title+'" src="'+item.image_s+'"></a>');
			<?php if ($fl_modal == "1") : ?>
			$('#gallery_<?php echo $mod_id; ?> a.fancy').fancybox({'titlePosition':'over'});
			<?php endif; ?>
			
		}
	});
});

</script>
</div>

<?php elseif ($fl_style == "cyc") : ?>
<div id="flickr_badge_wrapper">
<?php if ($fl_desc != "") : ?>
<?php echo "<".$fl_desc_style.">".$fl_desc."</".$fl_desc_style.">"; ?>
<?php endif; ?>
<ul class="cycle" id="cycle_<?php echo $mod_id; ?>">
</ul>
<script src="modules/mod_flickrberry/assets/js/jquery.bxslider.min.js" type="text/javascript"></script>
<?php if ($fl_script == "1") : ?><script src="modules/mod_flickrberry/assets/js/jflickrfeed.min.js" type="text/javascript"></script><?php endif; ?>
<?php if ($fl_script == "2") : ?><script src="modules/mod_flickrberry/assets/js/jflickrfeed.group.min.js" type="text/javascript"></script><?php endif; ?>
<script>
jQuery(document).ready(function($){
	$('#cycle_<?php echo $mod_id; ?>').jflickrfeed({
		limit: <?php echo $fl_limit; ?>,
		qstrings: {	id: '<?php echo $fl_id; ?>'	},
		itemTemplate: '<img src="{{<?php echo $fl_size; ?>}}" title="{{title}}" />' 
		}, function(data) {
			$('#cycle_<?php echo $mod_id; ?> img').each(function() {
				$link = $(this).attr('src');
				$newlink = $link.substr(1);
				$(this).attr('src',$newlink)
			});
			$('#cycle_<?php echo $mod_id; ?>').bxSlider({
				mode: 'fade',
				pause: <?php echo $fl_time; ?>,
				adaptiveHeight: true,
				auto: <?php if ($fl_auto == '0') : ?>false<?php else : ?>true<?php endif; ?>,
				controls: <?php if ($fl_nav == '0') : ?>false<?php else : ?>true<?php endif; ?>,
				autoControls: <?php if ($fl_playstop == '0') : ?>false<?php else : ?>true<?php endif; ?>,
				pager: <?php if ($fl_bullets == '0') : ?>false<?php else : ?>true<?php endif; ?>,
				captions: <?php if ($fl_title == '0') : ?>false<?php else : ?>true<?php endif; ?>,
				id: <?php echo $mod_id; ?>
			});	
					
	});
	
	
});

</script>
</div>

<?php endif; ?>