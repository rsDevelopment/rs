<div class="checklists form">
<?php echo $this->Form->create('Checklist'); ?>
	<fieldset>
		<legend><?php echo __('Add Checklist'); ?></legend>
	<?php
		echo $this->Form->input('templateid');
		echo $this->Form->input('homeid');
		echo $this->Form->input('required');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Checklists'), array('action' => 'index')); ?></li>
	</ul>
</div>
