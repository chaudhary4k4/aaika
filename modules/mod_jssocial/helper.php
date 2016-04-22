<?php
class modSocialHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getSocial( $params )
    {
       $app = JFactory::getApplication();
	   $template   = $app->getTemplate(true);
	   $params     = $template->params;
	
	  	 
	 // Social icons
	 
	 $social = $params->get('social');
	 
	// fetach the detil of radio button

$facebook=$params->get('facebook');
$twitter=$params->get('twitter');
$googleplus=$params->get('googleplus');
$linkedin=$params->get('linkedin');
$flicker=$params->get('flicker');
$youtube=$params->get('youtube');
$dribbble=$params->get('dribbble');
$behance=$params->get('behance');
	 
	
$facebooklink=$params->get('facebooklink');
$twitterlink=$params->get('twitterlink');
$googlepluslink=$params->get('googlepluslink');
$linkedinlink=$params->get('linkedinlink');
$flickerlink=$params->get('flickerlink');
$youtubelink=$params->get('youtubelink');
$dribbblelink=$params->get('dribbblelink');
$behancelink=$params->get('behancelink');
	 
		 
	 ?>
<?php 


			if($social=='1')
			{ ?>
<!-- social-icons -->

<?php if($facebook=='1'){?>

<li><a target="_blank" href="<?php echo $facebooklink; ?>"><i class="fa fa-facebook"></i></a></li>
<?php } if($twitter=='1'){?>
<li><a target="_blank" href="<?php echo $twitterlink; ?>"><i class="fa fa-twitter"></i></a></li>
<?php } if($youtube=='1'){ ?>
<li><a target="_blank" href="<?php echo $youtubelink; ?>"><i class="fa fa-youtube"></i></a></li>
<?php } if($googleplus=='1'){?>
<li><a target="_blank" href="<?php echo $googlepluslink; ?>"><i class="fa fa-google-plus"></i></a></li>
<?php }  if($linkedin=='1'){?>
<li><a target="_blank" href="<?php echo $linkedinlink; ?>"><i class="fa fa-linkedin"></i></a></li>
<?php }  if($behance=='1'){?>
<li><a target="_blank" class="behance" href="<?php echo $behancelink; ?>"><i class="fa fa-behance"></i></a></li>
<?php } if($flicker=='1'){?>
<li><a target="_blank" href="<?php echo $flickerlink; ?>"><i class="fa fa-flickr"></i></a></li>
<?php } if($dribbble=='1'){?>
<li><a target="_blank" href="<?php echo $dribbblelink; ?>"><i class="fa fa-dribbble"></i></a></li>
<?php } ?>

<!-- /social-icons -->
<?php } ?>
<?php
	  
    }
}
?>
