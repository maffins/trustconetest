<div class="users ">
  <?php echo $this->Form->create('User', array('ation' => 'permision')); ?>
  <h4><?php echo __('Set Permision for '.$user['User']['fname'].' '.$user['User']['sname'].' ('.$user['Department']['name'].' )'); ?></h4>
  <table cellpadding="0" cellspacing="0" class="table-striped">
    <tr>
     <th>Permission name</th>
     <th>Status</th>
    </tr>
    <tr>
    <?php echo $this->Form->input('id', array('value' => $user['User']['id'], 'type' => 'hidden')) ?>
      <td>Add Users</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="1" id="UserPermissions"></td>
    </tr>
    <tr>
      <td>Edit Users</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="2" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Delete Users</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="3" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Manage user permissions</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="4" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Add Departments</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="5" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Edit Departments</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="6" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Delete Departments</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="7" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>View Reports</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="8" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>View Communication Logs</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="9" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>View Audit Trail</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="10" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Add Statuses</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="11" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Edit Statuses</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="12" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Delete Statuses</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="13" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>add Level</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="14" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Edit Level</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="15" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td>Delete Level</td> 
      <td><input type="checkbox" name="data[User][permissions][]" style="margin:0 !important" value="16" id="UserPermissions"> </td>
    </tr>
    <tr>
      <td colspan="2">
       <?php echo $this->Form->end(__('Set Permissions')); ?> 
      </td>
    </tr>
  </table>                                                                                                                                      
</div>
