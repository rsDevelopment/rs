<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo ('Edit User Profile'); ?></legend>
    <?php
        echo $this->Form->input('firstname', array( 'label' => 'First Name:') );
        echo $this->Form->input('middlename', array( 'label' => 'Middle Name:' ) );
        echo $this->Form->input('lastname', array( 'label' => 'Last Name:') );
        echo $this->Form->input('phone1', array( 'label' => 'Mobile Phone') );
        echo $this->Form->input('phone2', array( 'label' => 'Home Phone') );
        echo $this->Form->input('role', array(
            'options' => array('' => 'Select','admin' => 'Admin', 'inspector' => 'Inspector', 'client' => 'Client' )
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(('Submit')); ?>
</div>

