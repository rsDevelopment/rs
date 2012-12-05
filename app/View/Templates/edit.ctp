<div class="users form">
<?php echo $this->Form->create('Template'); ?>
    <fieldset>
        <legend><?php echo ('Edit Template'); ?></legend>
    <?php
        echo $this->Form->input('label');
        echo $this->Form->input('description');
        echo $this->Form->input('category', array(
            'options' => array('living room' => 'Living Room', 'bathroom' => 'Bathroom')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(('Submit')); ?>
</div>

