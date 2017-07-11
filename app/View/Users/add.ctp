<div class="users form  form-group">
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
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<p class='btn btn-info'>Add User<p/>
	<?php
		echo $this->Form->input('department_id');
		echo "<br style='clear:both' />";
		echo $this->Form->input('user_type_id');
		echo "<br style='clear:both' />";
		echo $this->Form->input('fname', array('label' => 'First Name'));
		echo "<br style='clear:both' />";
		echo $this->Form->input('sname', array('label' => 'Last Name'));
		echo "<br style='clear:both' />";
		echo $this->Form->input('approver', array('label' => 'Can approve', 'type' => 'select', 'options' => [ 1 => 'Yes', 2 => 'No']));
		echo "<br style='clear:both' />";
		echo $this->Form->input('username', array('label' => 'Username'));
		echo "<br style='clear:both' />";
		echo $this->Form->input('password', array('label' => 'Password', 'required' => 'required'));
		echo "<br style='clear:both' />";
		echo $this->Form->input('email', ['required' => 'required']);
        echo "<br style='clear:both' />";
		echo $this->Form->input('cellnumber', ['required' => 'required']);
        echo "<br style='clear:both' />";
		echo $this->Form->input('telephone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Create User')); ?>
</div>


