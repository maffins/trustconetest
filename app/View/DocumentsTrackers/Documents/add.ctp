<div class="row">
	<div class="col-md-12">

<div class="form-vertical" style="margin-top: -10px;">
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
    </style>
			<?php echo $this->Flash->render(); ?>

<?php echo $this->Form->create('Document', ['enctype' => 'multipart/form-data']); ?>
	<fieldset>
		<legend><?php echo __('Add Document for signing'); ?></legend>
	<?php
	    echo "<p class='btn btn-info'>Department<p/>";
		echo $this->Form->input('department_id', ['label' => 'Document from which Directories', 'class' => 'form-control']);
		echo "<br style='clear:both' />";
		echo "<br /><p class='btn btn-info'>Contact Details<p/>";
        echo "<br style='clear:both' />";
		echo $this->Form->input('fname', array('label' => 'First Name', 'class' => 'form-control'));
        echo "<br style='clear:both' />";
		echo $this->Form->input('sname', array('label' => 'Last Name', 'class' => 'form-control'));
        echo "<br style='clear:both' />";
		echo $this->Form->input('email', ['required' => 'required', 'class' => 'form-control']);
        echo "<br style='clear:both' />";
		echo $this->Form->input('cellnumber', ['required' => 'required', 'class' => 'form-control']);
        echo "<br style='clear:both' />";
		echo "<br /><p class='btn btn-info'>Document Details<p/>";
        echo "<br style='clear:both' />";
		echo $this->Form->input('name', array('label' => 'Document type', 'class' => 'form-control'));
        echo "<br style='clear:both' />";
        $options = ['' => '- Select -', 'high' => 'Urgent', 'normal' => 'Normal', 'low' => 'Low'];
		echo $this->Form->input('priority', array('label' => 'Document urgency', 'type' => 'select', 'options' => $options, 'class' => 'form-control'));
        echo "<br style='clear:both' />";
        echo "<br /><p class='btn btn-info'>Upload the document *</p>";
        echo "<br style='clear:both' />";echo "<br style='clear:both' />";
		echo $this->Form->input('compiled_document.', array('label' => 'Upload here', 'type' => 'file', 'multiple' => 'multiple', 'required' => 'required', 'class' => 'form-control'));
        echo "<br style='clear:both' />";
		echo $this->Form->input('document_date', array('label' => 'Document Date <br />(<small>YYYY-mm-dd</small>)', 'class' => 'form-control datepicker', 'type' => 'text'));

	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(__('Send Document'), ['class' => 'btn btn-default']); ?>
</div>

	</div>
<script>
    // When the document is ready
    $(document).ready(function () {
        $('#DocumentDocumentDate').datepicker({
            format: "yyyy-mm-dd"
        });

    });
</script>

