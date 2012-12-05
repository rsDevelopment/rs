<?php echo $this->Html->link('Add Template', array('controller' => 'Templates', 'action' => 'add') ); ?>
<h1>Templates</h1>
<table class="table table-striped table-hover" >
	<thead>
		<tr>
			<th>Id</th>
			<th>Template</th>
			<th>Description</th>
			<th>Category</th>
			<th>Actions</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($templates as $template): ?>
	<tr>
	<td><?php echo $template['Template']['id']; ?></td>
	<td>
		<?php echo $template['Template']['label']; ?>
	</td>
	<td>
		<?php echo $template['Template']['description']; ?>
	</td>
	<td>
		<?php echo $template['Template']['category']; ?>
	</td>
	<td>
		<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $template['Template']['id']),
			array('confirm' => 'Are you sure?'));
		?>
		<?php echo $this->Html->link('Edit', array('controller' => 'templates', 'action' => 'edit', $template['Template']['id'])); ?> 
	</td>

	<td><?php echo $template['Template']['created']; ?></td>
	</tr>
<?php endforeach; ?>
	</tbody>
<?php unset($template); ?> 
</table>

