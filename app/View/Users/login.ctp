<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User', array(
            'class' => 'form-horizontal',
            'role' => 'form',
            'inputdefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'div' => array('class' => 'form-group'),
                'class' => array('form-control'),
                'label' => array('class' => 'col-lg-2 control-label'),
                'between' => '<div class="col-lg-3">',
                'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline')),
            ))); ?>
    <table class="table">
      <tr>

      </tr>
      <tr>
       <td class="col-lg-2 control-label left boldlabel">Username</td>
       <td><?php echo $this->Form->input('username', array('label' => false)); ?></td>
      </tr>
      <tr>
       <td class="col-lg-2 control-label left boldlabel">Password</td>
       <td><?php echo $this->Form->input('password', array('label' => false));?></td>
      </tr>
      <tr>
       <td colspan="2">
         <?php
             $options = array(
                'label' => 'Login',
                'class' => 'btn-primary',
            );
          echo $this->Form->end($options);
       ?>
       </td>
      </tr>
    </table>

</div>