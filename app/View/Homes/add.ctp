<div class="users form">

<?php echo $this->Form->create('Home'); ?>
    <fieldset>
        <legend><?php echo __('Add Home'); ?></legend>
    <?php
        echo $this->Form->input('description');
        echo $this->Form->input('address');
        echo $this->Form->input('state', array(
            'options' => array('Arizona' => 'az', 'New Mexico' => 'nm')
        ));
        echo $this->Form->input('zipcode');
    ?>

    <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
    <input class="span2" size="16" type="text" value="12-02-2012">
    <span class="add-on"><i class="icon-th"></i></span>
    </div>

          <div class="well">
			  <div class="input-append date" id="dpYears" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
				<input class="span2" size="16" type="text" value="12-02-2012" readonly>
				<span class="add-on"><i class="icon-calendar"></i></span>
			  </div>
          </div>

    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

