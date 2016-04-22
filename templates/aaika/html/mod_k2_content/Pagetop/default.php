<?php
// no direct access
defined('_JEXEC') or die;
?>
<?php if(count($items)): ?>

<div id="grid-container2" class="cbp-l-grid-fullScreen two">
  <ul>
    <?php foreach ($items as $item): //echo'<pre>';var_dump($item);die;
        $extraFields = json_decode($item->extra_fields);
     ?>
    <li class="cbp-item">
      <?php if($extraFields[0]->value == '1'): ?>
      <a href="<?php echo JURI::root(true).$extraFields[1]->value;?>" class="cbp-caption cbp-lightbox" data-title="<?php echo K2HelperUtilities::cleanHtml($item->title); ?><br>by <?php echo $item->author;?>">
      <?php elseif($extraFields[0]->value == '2'|| $extraFields[0]->value == '3'): ?>
      <a href="<?php echo $extraFields[1]->value;?>" class="cbp-caption cbp-lightbox" data-title="<?php echo K2HelperUtilities::cleanHtml($item->title); ?><br>by <?php echo $item->author;?>">
      <?php endif;?>
      <div class="cbp-caption-defaultWrap"> <img src="<?php echo JURI::root(true).$extraFields[2]->value;?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" /> </div>
      </a> </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif;?>
