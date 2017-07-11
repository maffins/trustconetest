<div class="statuses form">
<?php echo $this->Form->create('Status'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Status'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Statuses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Documents Trackers'), array('controller' => 'documents_trackers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documents Tracker'), array('controller' => 'documents_trackers', 'action' => 'add')); ?> </li>
	</ul>
</div>
