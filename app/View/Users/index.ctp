<h1>Users</h1>
<?php echo $this->Html->link('Add User', array('controller' => 'users', 'action' => 'add') ); ?>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>Id</th>
			<th>User Id</th>
			<th>Name</th>
			<th>Role</th>
			<th>Actions</th>
			<th>Created</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user ): ?>
	<tr>
	<td><?php echo $user['User']['id']; ?></td>
	<td><?php echo $user['User']['username']; ?></td>
	<td> <?php echo $user['User']['firstname'] . ' ' .  $user['User']['middlename'] . ' ' .  $user['User']['lastname']; ?> </td> 
	<td> <?php echo $user['User']['role']; ?> </td>
	<td>
		<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $user['User']['id']),
			array('confirm' => 'Are you sure?'));
		?>
		<?php echo $this->Html->link('Edit', array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?> 
	</td>

	<td><?php echo $user['User']['created']; ?></td>
	</tr>
<?php endforeach; ?>
	</tbody>
<?php unset($user); ?> 
</table>

