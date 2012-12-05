<legend><?php echo __('Edit Home'); ?></legend>


<?php echo $this->Form->create('Home'); ?>
<fieldset>
<div class="row"><br>
	<div class="span6"><br>
<?php
        echo $this->Form->input('description');

	$this->Home->inspectorPulldownMenu( $inspectors );
?>
	</div><br>
	<div class="span6"><br>
<?php
        echo $this->Form->input('address');
        echo $this->Form->input('city');
        echo $this->Form->input('state', array(
            'options' => array('Arizona' => 'AZ', 'New Mexico' => 'NM')
        ));
	echo $this->Form->input('zipcode');
	echo $this->Form->end(('Submit')); 
?>

	</div>
</div>

</fieldset>

