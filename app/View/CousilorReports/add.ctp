<div class="cousilorReports form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Upload Your Report/s'); ?></h1>
			</div>
		</div>
	</div>
	<style>
		.btn-info {
			width: 60%;
			text-align: left;
		}
		.form-control {
			width: 40%;
		}
		label {
			width: 20%;
			float: left;
		}
		.input {
			margin: 3px 0 3px 0;
		}
	</style>
		<div class="col-md-9">
            <?php echo $this->Form->create('CousilorReport', ['enctype' => 'multipart/form-data']); ?>
				<div class="form-group">
					<?php echo $this->Form->input('report_name', array('class' => 'form-control', 'placeholder' => 'Report Name'));?>
				</div>
				<?php echo "<br style='clear:both' />";?>
				<div class="form-group">
					<?php echo $this->Form->input('original_name.', array('class' => 'form-control', 'label' => 'Upload report/s', 'type' => 'file', 'multiple' => 'multiple', 'placeholder' => 'Original Name'));?>
				</div>
            <?php echo "<br style='clear:both' />";?>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Upload and send reports'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
