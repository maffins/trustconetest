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
                           <td><img alt="matjhabeng local municipality" src="/documentstracker.co.za/img/matjhabeng2.png" border="0"></td>
                           <?php if(!AuthComponent::user()):?>
                               <style>
                                       h1 {
                                           font-size: 27px !important;
                                       }
                               </style>
                           <?php endif;?>
                           <td style="text-align: center;padding: 0">
                               <h1>Matjhabeng Local Municipality <br />Document Management System </h1>

                           </td>
                           <td><img alt="matjhabeng local municipality" src="/documentstracker.co.za/img/matjhabeng2.png" border="0"></td>
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
                              if ($logged_user['user_type_id'] == 25) {
                                $who = "Council Support Officer ";
                              }

                          if($who == '')
                          {
                            $who = $logged_user['UserType']['name'];
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
                    $greeting .= "Mr. Atolo, Senior Manager Council Admin, Welcome  ";
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

                if($user_id == 118)
                {
                $greeting .= "Mr. L. Rubulana, the Snr. Manager: Office of the Speaker, Welcome  ";
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
                $greeting .= "Ms. Ramakhale, the acting Manager Council Admin, Welcome ";
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

                if($user_id == 119)
                {
                $greeting .= "Joseph Molawa Acting Executive Director, Welcome ";
                $displayed = 1;
                }

                if($user_id == 120)
                {
                $greeting .= "Manager in Municipal Manager's office, Welcome ";
                $displayed = 1;
                }

                if($user_id == 121)
                {
                $greeting .= "Mr Martins Chief of staff, Welcome ";
                $displayed = 1;
                }

                if($user_id == 122)
                {
                $greeting .= "Personal assistant to executive mayor, Welcome ";
                $displayed = 1;
                }

                if($user_id == 123)
                {
                $greeting .= "Personal assistant to the speaker, Welcome ";
                $displayed = 1;
                }

                if($user_id == 124)
                {
                $greeting .= "Personal assistant to the chief whip, Welcome ";
                $displayed = 1;
                }

                if($displayed == 0)
                {
                    $greeting .= $logged_user['UserType']['name']. " ".$logged_user['fname']." ".$logged_user['sname']." Welcome ";
                }

                if ($logged_user['user_type_id'] == 21) {
                $greeting = "MMC Support Officer, Welcome ";
                }

                if ($logged_user['user_type_id'] == 22) {
                $greeting = "Secretary of Strategic Support Services, Welcome ";
                }

                if ($logged_user['user_type_id'] == 23) {
                $greeting = "Secretary of Strategic Support Services, Welcome ";
                }

                if ($logged_user['user_type_id'] == 24) {
                $greeting = "Secretary of Corporate Support Services, Welcome ";
                }

                if ($logged_user['user_type_id'] == 25) {
                $greeting = "Council Support Officer, Welcome ";
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
                                <li ><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('Fault list'), array('controller' => 'Faults', 'action' => 'index'), array('escape' => false)); ?></li>
                                <li style="display: none"><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('Capture Fault'), array('controller' => 'Faults', 'action' => 'add'), array('escape' => false)); ?> </li>
                           <li><a href="/users/logout"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                            </ul>
                        </div><!-- end panel -->
                    </div><!-- end actions -->
            </td>
        </tr>
      <?php endif;?>
     </table>

 </div>