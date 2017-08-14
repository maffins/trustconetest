<div class="communicationLogs form">
<?php echo $this->Form->create('CommunicationLog'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Communication Log'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('email');
		echo $this->Form->input('date_sent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CommunicationLog.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('CommunicationLog.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Communication Logs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
