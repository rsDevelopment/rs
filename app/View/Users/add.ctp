<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo ('Add User'); ?></legend>
    <?php
        echo $this->Form->input('username', array( 'label' => 'Username:') );
        echo $this->Form->input('password');
        echo $this->Form->input('firstname', array( 'label' => 'First Name:') );
        echo $this->Form->input('lastname', array( 'label' => 'Last name:') );
        echo $this->Form->input('role', array(
            'options' => array('' => 'Select','admin' => 'Admin', 'inspector' => 'Inspector', 'client' => 'Client' )
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(('Submit')); ?>
</div>

