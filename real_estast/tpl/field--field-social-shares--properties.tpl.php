<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
    <?php endforeach; ?>
  </div>
</div>
<div class="social_sharing">
	<ul class="social-list">
		<li class="social-list__item"><a class="fa fa-facebook" href="https://www.facebook.com/sharer.php?u=
		<?php
		global $base_url;
		$node = $element['#object'];
		$node_path=drupal_get_path_alias('node/'.$node->nid);
		$my_title = $node->title; ?>
		<?php if ($my_title): ?>
		<?php $current_path = current_path(); print ($base_url.'/'.$current_path); ?>
		<?php endif; ?>
"></a></li>
		<li class="social-list__item"><a class="fa fa-twitter" href="https://www.twitter.com/share?u=
		<?php
		global $base_url;
		$node = $element['#object'];
		$node_path=drupal_get_path_alias('node/'.$node->nid);
		$my_title = $node->title; ?>
		<?php if ($my_title): ?>
		<?php $current_path = current_path(); 
			print ($base_url.'/'.$current_path.'&url='.$base_url.'/'.$current_path.'&hashtags=Djerba Immobilier,DjerbaImmo,Agence Immobilière Amine Tezdaine&text='.'Ref :'.$node->field_reference['und'][0]['value']." ".$my_title); 		
		?>
		<?php endif; ?>
"></a></li>
		<li class="social-list__item"><a href="https://api.whatsapp.com/send?text=
		<?php
		global $base_url; ?>
		<?php $current_path = current_path(); 
			print (urlencode($base_url.'/'.$current_path)); 		
		?>
"></a></li>
		<li class="social-list__item"><a class="fa fa-envelope" href="mailto:amine@djerbaimmo.tn?subject=<?php
		
		//$node->field_reference['und'][0]['value'];
		echo "Ref: ".$node->field_reference['und'][0]['value'].": ".$node->title;
		?>"></a></li>
		<li class="social-list__item"><a class="fa fa-print" href="/" onclick="window.print();"></a></li>
	</ul>
</div>