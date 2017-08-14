<div class="counsilorDocuments form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Capture Council Meeting Documents'); ?></h1>
			</div>
		</div>
	</div>
		<div class="col-md-12">
			<?php echo $this->Form->create('CounsilorDocument', array('role' => 'form', 'enctype' => 'multipart/form-data')); ?>

			<div class="form-group" style="display: none;">
				<?php echo $this->Form->input('user_id', array('class' => 'form-control', 'placeholder' => 'User Id'));?>
			</div>

			<h3>Meeting name</h3>

			<div class="form-group">
				<?php echo $this->Form->input('meeting', array('class' => 'form-control', 'placeholder' => 'Meeting name'));?>
			</div>
			<br />

			<h3>Agenda</h3>
			<br />
			<div class="form-group">
				<?php echo $this->Form->input('agenda.', array('class' => 'form-control', 'label'=>'Agenda Documents', 'placeholder' => 'Documents to upload',  'type' => 'file', 'multiple' => 'multiple', 'required' => 'required'));?>
			</div>
			<br />

			<h3>Previous meeting minutes</h3>

			<div class="form-group">
				<?php echo $this->Form->input('minutes.', array('class' => 'form-control', 'label'=>'Previous minutes', 'placeholder' => 'Documents to upload',  'type' => 'file', 'multiple' => 'multiple', 'required' => 'required'));?>
			</div>
			<br />

			<h3>Items</h3>

			<div class="form-group">
				<?php echo $this->Form->input('items.', array('class' => 'form-control', 'label'=>'Items', 'placeholder' => 'Items',  'type' => 'file', 'multiple' => 'multiple', 'required' => 'required'));?>
			</div><br />

			<h3>Attachments</h3>

			<div class="form-group">
				<?php echo $this->Form->input('attachments.', array('class' => 'form-control', 'label'=>'Attachments', 'placeholder' => 'Attachments',  'type' => 'file', 'multiple' => 'multiple', 'required' => 'required'));?>
			</div>

			<br /><br />
			<div class="form-group">
				<?php echo $this->Form->submit(__('Upload All Documents'), array('class' => 'btn btn-default')); ?>
			</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
