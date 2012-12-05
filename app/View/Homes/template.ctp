<h1>Home Checklist</h1>
<?php echo $this->Form->create( 'Checklist', array ( 'action' => 'template' ) ) ; ?>
<?php echo $this->Form->hidden('home_id', array( 'value' => $home_id ) ); ?>
<table class='table table-striped table-hover' >
	<thead>
		<tr>
			<th>Id</th>
			<th>Home Checklist Id</th>
			<th>Label</th>
			<th>Description</th>
			<th>Assigned</th>
		</tr>
	</thead>
<?php foreach ($templates as $template): ?>
	<tr>
		<?php $templateid = $template['templates' ]['template_id']; ?>
		<?php 
			$checkBoxArray = array( 'value' => $templateid );


			$required = $template['checklists' ]['required']; 
			if( intval( $required ) > 0 ){
				$checkBoxArray[ 'checked' ] = 'checked'; 
			}
		?>
		<?php $homechecklistid = $template['checklists' ]['homechecklistid']; ?>
		<td><?php echo $templateid; ?> </td>
		<td><?php echo $homechecklistid; ?></td>
		<td><?php echo $template[ 'templates' ]['label']; ?></td>
		<td><?php echo $template[ 'templates' ]['description']; ?></td>
        	<td><?php echo $this->Form->checkbox('required.' . $templateid , $checkBoxArray); ?></td>
	</tr>
<?php endforeach; ?>
<?php unset($template); ?> 

</table>
<?php echo $this->Form->end('Update Checklist'); ?>
