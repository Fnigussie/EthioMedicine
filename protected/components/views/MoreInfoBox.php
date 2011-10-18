<?php $this->beginWidget('zii.widgets.jui.CJuiDialog', array(
	'id'=>'moreinfobox_dialog',
	'options'=>array(
		'title'=>'More information about this topic',
		'autoOpen'=>false,
		'modal'=>false,
		'width'=>500,
		'maxHeight'=>500,
		'position'=>array('right', 'top'),
		'buttons'=>array('Close'=>'js:function() { $(this).dialog("close"); }'),
	),
	'cssFile'=>false,
));
?>

<?php if (!empty($references) && is_array($references)): ?>
<div class="small_title">References</div>
<ul class="link_list">
<?php foreach($references as $url=>$label): ?>
	<li><a href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>


<?php if (!empty($see_also) && is_array($see_also)): ?>
<div class="small_title">See also</div>
<ul class="link_list">
<?php foreach($see_also as $url=>$label): ?>
	<li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>


<?php if (!empty($external_links) && is_array($external_links)): ?>
<div class="small_title">External links</div>
<ul class="link_list">
<?php foreach($external_links as $url=>$label): ?>
	<li><a href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a></li>
<?php endforeach; ?>
</ul>
<?php endif; ?>

<?php $this->endWidget('zii.widgets.jui.CJuiDialog'); ?>