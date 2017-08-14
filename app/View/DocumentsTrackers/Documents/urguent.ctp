<style>
    th {
        color: black !important;
        vertical-align: text-top !important;
        border: 1px solid #fff862 !important;
        background-color: #156F30 !important;
    }
</style>
<div class="documents index">
    <div class="row">

        <div class="col-md-12">

    <p class='btn btn-info'>Urgent Documents</b><p/>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="fidu-tables1" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
        <thead>
        <tr>
            <th><?php echo $this->Paginator->sort('Document No'); ?></th>
            <th><?php echo $this->Paginator->sort('Document Type'); ?></th>
            <th><?php echo $this->Paginator->sort('Document priority'); ?></th>
            <th><?php echo $this->Paginator->sort('Document Directorate/dept'); ?></th>
            <th><?php echo $this->Paginator->sort('Date Compiled'); ?></th>
            <th><?php echo $this->Paginator->sort('Comment'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($documents as $document): ?>
        <tr>
            <td><?php echo h($document['Document']['id']); ?>&nbsp;</td>
            <td><?php echo h($document['Document']['name']); ?>&nbsp;</td>
            <td>
                <?php
                   if ($document['Document']['priority'] == 'high')
                   {
                        echo "<b style='color:red'>High</b>";
                    }
                    else if ($document['Document']['priority'] == 'normal')
                    {
                    echo "<b style='color:red'>Normal</b>";
                    }
                    else if ($document['Document']['priority'] == 'low')
                    {
                    echo "<b style='color:orange'>Low</b>";
                    }
                    else
                    {
                    echo "<b style=''>Normal</b>";
                    }
                ?>
            </td>
            <td><?php echo h($document['Department']['name']); ?>&nbsp;</td>
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
    	   }
    	   $id = $document['Document']['id'];
    	   ?>&nbsp;</td>
            <td>
               <table>
                   <tr>
                       <td>Approve</td>
                       <td><input type="checkbox" name="approved" onclick='openComment(1, "<?php echo $id ?>")'></td>
                   </tr>
                   <tr>
                       <td>Decline</td>
                       <td><input type="checkbox" name="approved" onclick='openComment(2, "<?php echo $id ?>")'></td>
                   </tr>
                   <tr id="comment<?php echo $id ?>" style="display: none">
                       <td>Comment</td>
                       <td><textarea></textarea> <input type="button" value="Sumit" ></td>
                   </tr>
               </table>

            </td>

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


        function openComment(what, id) {
            if (what == 2) {
                id = "comment"+id;

                document.getElementById(id).style.display = 'block';
            }
        }
    </script>
        </div>
</div>

