<div class="page-heade" style="padding: 0 !important;align-content: center">
   <style>
       .nav-stacked > li {
            float: left !important;
       }
       .panel-heading {
           padding: 0 !important;
       }
   </style>
     <table style="width: 75%;margin: 0 auto">
          <tr>
               <td></td>
               <td style="vertical-align: text-top;text-align: center">
                   <table width="100%">
                       <tr>
                           <td><img alt="matjhabeng local municipality" src="/app/webroot/img/matjhabeng2.png" border="0"></td>
                           <?php if(!AuthComponent::user()):?>
                               <style>
                                       h1 {
                                           font-size: 27px !important;
                                       }
                               </style>
                           <?php endif;?>
                       </tr>
                       <tr>
                           <td style="text-align: center;padding: 0">
                               <h3>Matjhabeng Local Municipality <br />Document Management System </h3>

                           </td>
                       </tr>
                   </table>
               </td>
          <td></td>
          </tr>
     <?php if(AuthComponent::user()):?>
        <tr>
            <td colspan="3" style="text-align: center;vertical-align: text-top">
                <?php
                          $logged_user = AuthComponent::user();
                          $who = "";
                          if ($logged_user['user_type_id'] != 9) {
                              if ($logged_user['user_type_id'] == 1) {
                                $who = "Compiler";
                              }
                              if ($logged_user['user_type_id'] == 2) {
                                $who = "CFO";
                              }
                              if ($logged_user['user_type_id'] == 3) {
                                $who = "CEO/Municipal manager";
                              }
                              if ($logged_user['user_type_id'] == 7) {
                                $who = "CFO Office";
                              }
                              if ($logged_user['user_type_id'] == 8) {
                                $who = "CEO/Municipal Office";
                              }
                              if ($logged_user['user_type_id'] == 11) {
                                $who = "CFO";
                              }
                              if ($logged_user['user_type_id'] == 10) {
                                $who = "CEO/Municipal manager";
                              }
                              if ($logged_user['user_type_id'] == 13) {
                                $who = "CFO Office";
                              }
                              if ($logged_user['user_type_id'] == 12) {
                                $who = "CEO/Municipal Office";
                              }
                        ?>
                You are logged in as <b><?php echo $who." | ".$logged_user['fname'].' '.$logged_user['sname']?> </b>
                <?php

                            } else {
                        //print_r($logged_user);
                          $user_id = $logged_user['id'];

                              $greeting = '<b>';
                $displayed = 0;

                if($user_id == 31)
                {
                    $greeting .= "Mr. Tsoaeli, the acting Municipal Manager, Welcome ";
                    $displayed = 1;
                }

                if($user_id == 37)
                {
                    $greeting .= "Mr. Makofane, the Executive Director SSS, Welcome  ";
                $displayed = 1;
                }

                if($user_id == 32)
                {
                    $greeting .= "Mr. Wetes, the Executive Director CSS, Welcome ";
                $displayed = 1;
                }

                if($user_id == 34)
                {
                    $greeting .= "Mr. Atolo, the aCting Executive Director Community Services, Welcome  ";
                $displayed = 1;
                }

                if($user_id == 38)
                {
                $greeting .= "Mrs. Mothekhe, the acting Executive Director LED & Planning, Welcome ";
                $displayed = 1;
                }

                if($user_id == 26)
                {
                $greeting .= "Ms. Williams, the acting CFO, Welcome ";
                $displayed = 1;
                }

                if($user_id == 40)
                {
                $greeting .= "Mr. Mohale, the Snr. Manager: Office of the Speaker, Welcome  ";
                $displayed = 1;
                }

                if($user_id == 28)
                {
                $greeting .= "Cllr. Stofile, the Honourable Speaker, Welcome  ";
                $displayed = 1;
                }

                if($user_id == 27)
                {
                $greeting .= "Cllr. Speelman, the Honourable Executive Mayor, Welcome  ";
                $displayed = 1;
                }

                if($user_id == 29)
                {
                $greeting .= "Cllr. Sephiri, the Honourable Chief Whip, Welcome ";
                $displayed = 1;
                }

                if($user_id == 33)
                {
                $greeting .= "Ms. Ramakhale, the acting Snr. Manager Council Admin, Welcome ";
                $displayed = 1;
                }

                if($user_id == 39)
                {
                $greeting .= "Mrs. Maswanganyi, the Executive Director Infrastructure, Welcome ";
                $displayed = 1;
                }

                if($user_id == 30)
                {
                    $greeting .= "Mrs. Seleka, Welcome ";
                    $displayed = 1;
                }

                if($user_id == 36)
                {
                    $greeting .= "Cllr. Morris, the Honourable MMC, Welcome ";
                    $displayed = 1;
                }

                if($user_id == 116)
                {
                    $greeting .= "Poncho Kodisang manager ICT, Welcome ";
                    $displayed = 1;
                }

                if($displayed == 0)
                {
                    $greeting .= "Welcome ".$logged_user['fname']." ".$logged_user['sname'];
                }

                echo $greeting." to Matjhabeng Local Municipality Electronic Council Documents</b>";

                }
                ?>
                </p>
                <div class="actions">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <ul class="nav nav-pills nav-stacked">
                                <li style="display: none"><a href="/users/logout">Click here to Logout</a></li>
                                <?php if(AuthComponent::user()['user_type_id'] != 15 && AuthComponent::user()):?>
                                <!-- Sidebar -->  <?php  if (AuthComponent::user()['user_type_id'] != 9) : ?>
                                <?php if (AuthComponent::user()['user_type_id'] == 2 || AuthComponent::user()['user_type_id'] == 3 || AuthComponent::user()['user_type_id'] == 11 || AuthComponent::user()['user_type_id'] == 10 ):?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('Urgent Documents'), array('controller' => 'documents', 'action' => 'urguent'), array('escape' => false)); ?> </li>
                                <?php endif?>
                                <?php if (AuthComponent::user()['user_type_id'] == 6 ):?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Reports'), array('controller' => 'pages', 'action' => 'report'), array('escape' => false)); ?> </li>
                                <?php endif?>
                                <?php if (AuthComponent::user()['user_type_id'] == 6 ):?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Settings'), array('controller' => 'pages', 'action' => 'settings'), array('escape' => false)); ?> </li>
                                <?php endif?>
                                <?php if (AuthComponent::user()['user_type_id'] != 6 && AuthComponent::user()['user_type_id'] != 15):?>
                                <li ><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('Documents list'), array('controller' => 'documents', 'action' => 'index'), array('escape' => false)); ?></li>

                                <?php endif?>
                                <?php if (AuthComponent::user()['user_type_id'] == 1 || AuthComponent::user()['user_type_id'] == 8 || AuthComponent::user()['user_type_id'] == 7 || AuthComponent::user()['user_type_id'] == 12 || AuthComponent::user()['user_type_id'] == 13 ):?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Capture Document'), array('controller' => 'documents', 'action' => 'add'), array('escape' => false)); ?> </li>
                                <?php endif?>
                                <li style="display:none "><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Users'), array('controller' => 'users', 'action' => 'index'), array('escape' => false)); ?></li>
                                <?php
                     $userSession = AuthComponent::user();
                      if ($userSession['user_type_id'] == 3 || $userSession['user_type_id'] == 2 || $userSession['user_type_id'] == 11 || $userSession['user_type_id'] == 10):
                ?>

                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('View Documents by directorates'), array('controller' => 'departments', 'action' => 'index'), array('escape' => false)); ?> </li>
                                <?php if (AuthComponent::user()['user_type_id'] == 6 ):?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Reports'), array('controller' => 'pages', 'action' => 'report'), array('escape' => false)); ?> </li>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Settings'), array('controller' => 'pages', 'action' => 'settings'), array('escape' => false)); ?> </li>
                                <?php endif?>
                                <?php
                 endif;

                     if ($userSession['user_type_id'] == 3 || $userSession['user_type_id'] == 2 ):
                ?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Council Documents'), array('controller' => 'CounsilorDocuments', 'action' => 'index'), array('escape' => false)); ?> </li>
                               <?php endif ; ?>
                              <?php endif ; ?> <!-- /#sidebar-wrapper -->
                           <?php endif; ?>
                                <?php if (AuthComponent::user()['user_type_id'] == 15):?>
                                <li ><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('Council Documents'), array('controller' => 'CounsilorDocuments', 'action' => 'index'), array('escape' => false)); ?></li>

                                <li ><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Capture Documents'), array('controller' => 'CounsilorDocuments', 'action' => 'add'), array('escape' => false)); ?></li>

                                <?php endif?>

                                <?php if (AuthComponent::user()['user_type_id'] == 9):?>
                                <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Council Documents'), array('controller' => 'CounsilorDocuments', 'action' => 'index'), array('escape' => false)); ?> </li>
                                <?php endif?>
                                <li><a href="/users/logout"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                            </ul>
                        </div><!-- end panel -->
                    </div><!-- end actions -->
            </td>
        </tr>
      <?php endif;?>
     </table>

 </div>