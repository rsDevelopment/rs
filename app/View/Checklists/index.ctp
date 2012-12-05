<div class="checklists index">
	<h2><?php echo __('Checklists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('templateid'); ?></th>
			<th><?php echo $this->Paginator->sort('homeid'); ?></th>
			<th><?php echo $this->Paginator->sort('required'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($checklists as $checklist): ?>
	<tr>
		<td><?php echo h($checklist['Checklist']['id']); ?>&nbsp;</td>
		<td><?php echo h($checklist['Checklist']['templateid']); ?>&nbsp;</td>
		<td><?php echo h($checklist['Checklist']['homeid']); ?>&nbsp;</td>
		<td><?php echo h($checklist['Checklist']['required']); ?>&nbsp;</td>
		<td><?php echo h($checklist['Checklist']['created']); ?>&nbsp;</td>
		<td><?php echo h($checklist['Checklist']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $checklist['Checklist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $checklist['Checklist']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $checklist['Checklist']['id']), null, __('Are you sure you want to delete # %s?', $checklist['Checklist']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Checklist'), array('action' => 'add')); ?></li>
	</ul>
</div>
