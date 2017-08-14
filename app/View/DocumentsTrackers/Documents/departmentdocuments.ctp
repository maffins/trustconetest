<div class="documents index">


    <p class='btn btn-info'>Documents id directory <b><?php echo $department['Department']['name'] ?></b><p/>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="fidu-tables1" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('Document Type'); ?></th>
            <th><?php echo $this->Paginator->sort('Status'); ?></th>
            <th><?php echo $this->Paginator->sort('Date Compiled'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($documents as $document): ?>
        <tr>
            <td><?php echo h($document['Document']['name']); ?>&nbsp;</td>
            <td><?php
            if ($document['Document']['tracker'] == 2) {
    	    echo "With Manager";
    	   }
    	   if ($document['Document']['tracker'] == 3) {
    	    echo "With Budget";
    	   }
    	   if ($document['Document']['tracker'] == 4) {
    	    echo "With CFO";
    	   }
    	   if ($document['Document']['tracker'] == 5) {
    	    echo "With CEO";
    	   } ?>&nbsp;</td>
            <td><?php echo h($document['Document']['created']); ?>&nbsp;</td>

        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#fidu-tables').DataTable();
        } );
        $(document).ready(function() {
            $('#fidu-tables1').DataTable();
        } );
    </script>
</div>

