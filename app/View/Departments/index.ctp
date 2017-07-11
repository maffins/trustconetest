<style>
	th {
	color: black !important;
	vertical-align: text-top !important;
	border: 1px solid #fff862 !important;
	background-color: #156F30 !important;
	}
</style>
<div class="departments index">
	<div class="row">


		<div class="col-md-12">
		<p class='btn btn-info'>Documents in directories<p/>
		<br />
		<h4>Click on directory name to view documents in it</h4>
		<br />
		<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="fidu-tables1" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($departments as $department): ?>
		<tr>
			<td><?php echo h($department['Department']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($department['Department']['name'], array('controller' => 'documents', 'action' => 'departmentdocuments', $department['Department']['id'])); ?>
			</td>
			<td><?php echo h($department['Department']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $department['Department']['id'])); ?> <span class="glyphicon glyphicon-folder-open"></span>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $department['Department']['id'])); ?> <span class="glyphicon glyphicon-edit"></span>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $department['Department']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $department['Department']['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>

	</div>
	</div>
	<script>
		$(document).ready(function() {
			$('#fidu-tables').DataTable();
		} );
		$(document).ready(function() {
			$('#fidu-tables1').DataTable();
		} );
</script>