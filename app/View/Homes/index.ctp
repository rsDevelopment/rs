<?php echo $this->Html->link('Add Home', array('controller' => 'homes', 'action' => 'add') ); ?>
<h1>Homes</h1>

<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>Description</th>
			<th>Address</th>
			<th>Actions</th>
			<th>Created</th>
		</tr>
	</thead>
	</tbody>
<?php foreach ($homes as $item): ?>
	<tr>
	<td><?php echo $item['Home']['id']; ?></td>
	<td><?php echo $item['Home']['description']; ?></td>
	<td><?php echo $item['Home']['address']; ?></td>
	<td>
		<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $item['Home']['id']),
			array('confirm' => 'Are you sure?'));
		?>
		<?php $homeId =  $item['Home']['id']; ?>
		<?php echo $this->Html->link('Edit', array('controller' => 'homes', 'action' => 'edit', $homeId )); ?> 
		<?php echo $this->Html->link('Template', array('controller' => 'homes', 'action' => 'template', $homeId )); ?> 
		<?php echo $this->Html->link('Checklist', array('controller' => 'checklists', 'action' => 'index', $homeId )); ?> 
	</td>
	<td><?php echo $item['Home']['created']; ?></td>
	</tr>
<?php endforeach; ?>
<?php unset($item); ?> 
	</tbody>
</table>

