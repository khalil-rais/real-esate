<?php
/**
 * @file views-view-table.tpl.php
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $rows: An array of row items. Each row is an array of content
 *   keyed by field ID.
 * - $header: an array of headers(labels) for fields.
 * - $themed_rows: a array of rows with themed fields.
 * @ingroup views_templates
 */
?>
<?php
/*
ob_start();

	var_dump("real_estast_templating");
	var_dump($photos);
	
	$dumpy = ob_get_clean();
	watchdog('real_estast_templating', $dumpy);
*/
?>	

<?php foreach ($themed_rows as $count => $row): ?>
	<<?php print $item_node; ?>>
		<?php foreach ($row as $field => $content): ?>
			<?php if ($xml_tag[$field]=="COMMODITES"): ?>
				<?php foreach ($commodities[$count] as $com => $dities): ?>
					<<?php print $dities["parameter"]; ?>><?php print $dities["commoditiy"]; ?></<?php print $dities["parameter"]; ?>>
				<?php endforeach; ?>
			<?php elseif ($xml_tag[$field]=="PHOTO"): ?>
				<?php foreach ($photos[$count] as $pho => $tos): ?>
					<<?php print $xml_tag[$field]; ?>><?php print $tos; ?></<?php print $xml_tag[$field]; ?>>
				<?php endforeach; ?>
			<?php else: /* Use h1 when the content title is empty */ ?>
				<<?php print $xml_tag[$field]; ?>><?php print $content; ?></<?php print $xml_tag[$field]; ?>>
			<?php endif; ?>
		<?php endforeach; ?>
	</<?php print $item_node; ?>>
<?php endforeach; ?>
