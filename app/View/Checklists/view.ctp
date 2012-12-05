<div class="checklists view">
<h2><?php  echo __('Checklist'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($checklist['Checklist']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Templateid'); ?></dt>
		<dd>
			<?php echo h($checklist['Checklist']['templateid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homeid'); ?></dt>
		<dd>
			<?php echo h($checklist['Checklist']['homeid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Required'); ?></dt>
		<dd>
			<?php echo h($checklist['Checklist']['required']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($checklist['Checklist']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($checklist['Checklist']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Checklist'), array('action' => 'edit', $checklist['Checklist']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Checklist'), array('action' => 'delete', $checklist['Checklist']['id']), null, __('Are you sure you want to delete # %s?', $checklist['Checklist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Checklists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Checklist'), array('action' => 'add')); ?> </li>
	</ul>
</div>
