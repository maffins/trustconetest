<div class="counsilorDocuments view">

    <div class="row">

        <div class="col-md-12">
            <table cellpadding="0" cellspacing="0" class="table table-striped" style="background-color: #; width: 1000px; margin: 0 auto">
                <thead>
                <tr style="background-color: #156F30">
                    <td colspan="5" style="text-align: center; font-size: 20px"><b>COUNCIL MEETING: <?php echo $Meeting['Meeting']['name']; ?></b>&nbsp;</td>
                </tr>
                <tr style="color: black;background-color: #">
                    <td colspan="5" style="text-align: center; font-size: 20px"><b>AGENDA</b>&nbsp;</td>
                </tr>
                <?php $counter++; ?>
                <tr>
                    <th><?php echo $this->Paginator->sort('Uploaded by'); ?></th>
                    <th colspan="2"><?php echo $this->Paginator->sort('document name'); ?></th>
                    <th><?php echo $this->Paginator->sort('created on'); ?></th>
                    <th class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> ></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($Meeting['MeetingAgenda'] as $agenda):?>

                <tr style="border: 1px solid #">
                    <td>
                        <?php echo $Meeting['User']['fname']." ".$Meeting['User']['sname'] ?>
                    </td>
                    <td><?php
                                    echo $this->Html->link($agenda['document_name'], array( 'action' => 'sendFile', $agenda['id'],1), array('target' => '_blank'));
                        ?>&nbsp;
                    </td>
                    <td><b><i><?php
                                    echo $this->Html->link('I\'m unable to access/download a file?', array( 'action' => 'cantdownload', $agenda['id'],1));
                        ?>&nbsp;</b></i>
                    </td>
                    <td><?php echo substr($agenda['created'], 0, 10); ?>&nbsp;</td>
                    <td class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> >
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $agenda['id']), array('escape' => false)); ?>
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $agenda['id']), array('escape' => false)); ?>
                    <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $agenda['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agenda['id'])); ?>
                    </td>
                </tr>

                <?php endforeach; ?>

                <tr style="color: black;background-color: #"">
                <td colspan="5" style="text-align: center; font-size: 20px; background-color: #156F30"><b>PREVIOUS MEETING MINUTES</b>&nbsp;</td>
                </tr>
                <?php $counter++; ?>
                <tr>
                    <th><?php echo $this->Paginator->sort('Uploaded by'); ?></th>
                    <th colspan="2"><?php echo $this->Paginator->sort('document name'); ?></th>
                    <th><?php echo $this->Paginator->sort('created on'); ?></th>
                    <th class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> ></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($Meeting['MeetingMinute'] as $minutes):?>

                <tr style="border: 1px solid #">
                    <td>
                        <?php echo $Meeting['User']['fname']." ".$Meeting['User']['sname'] ?>
                    </td>
                    <td><?php
                                    echo $this->Html->link($minutes['document_name'], array( 'action' => 'sendFile', $minutes['id'], 2), array('target' => '_blank'));
                        ?>&nbsp;</td>
                    <td><b><i><?php
                                    echo $this->Html->link('I\'m unable to access/download a file?', array( 'action' => 'cantdownload', $minutes['id'],2));
                        ?>&nbsp;</b></i>
                    </td>
                    <td><?php echo substr($agenda['created'], 0, 10); ?>&nbsp;</td>
                    <td class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> >
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $minutes['id']), array('escape' => false)); ?>
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $minutes['id']), array('escape' => false)); ?>
                    <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $minutes['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agenda['id'])); ?>
                    </td>
                </tr>

                <?php endforeach; ?>

                <tr style="color: black;background-color: #"">
                <td colspan="6" style="text-align: center; font-size: 20px; background-color: #156F30"><b>ITEMS</b>&nbsp;</td>
                </tr>
                <?php $counter++; ?>
                <tr>
                    <th><?php echo $this->Paginator->sort('Uploaded by'); ?></th>
                    <th colspan="2"><?php echo $this->Paginator->sort('document name'); ?></th>
                    <th><?php echo $this->Paginator->sort('created on'); ?></th>
                    <th class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> ></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($Meeting['MeetingItem'] as $item):?>

                <tr style="border: 1px solid #">
                    <td>
                        <?php echo $Meeting['User']['fname']." ".$Meeting['User']['sname'] ?>
                    </td>
                    <td><?php
                                    echo $this->Html->link($item['document_name'], array( 'action' => 'sendFile', $item['id'], 3), array('target' => '_blank'));
                        ?>&nbsp;</td>
                    <td><b><i><?php
                                    echo $this->Html->link('I\'m unable to access/download a file?', array( 'action' => 'cantdownload', $item['id'],3));
                        ?>&nbsp;</b></i>
                    </td>
                    <td><?php echo substr($agenda['created'], 0, 10); ?>&nbsp;</td>
                    <td class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> >
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $item['id']), array('escape' => false)); ?>
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $item['id']), array('escape' => false)); ?>
                    <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $item['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agenda['id'])); ?>
                    </td>
                </tr>

                <?php endforeach; ?>
                <tr style="color: black;background-color: #"">
                <td colspan="6" style="text-align: center; font-size: 20px; background-color: #156F30"><b>ATTACHMENTS</b>&nbsp;</td>
                </tr>
                <?php $counter++; ?>
                <tr>
                    <th><?php echo $this->Paginator->sort('Uploaded by'); ?></th>
                    <th colspan="2"><?php echo $this->Paginator->sort('document name'); ?></th>
                    <th><?php echo $this->Paginator->sort('created on'); ?></th>
                    <th class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> ></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($Meeting['MeetingAttachment'] as $attachment):?>

                <tr style="border: 1px solid #fff862">
                    <td>
                        <?php echo $Meeting['User']['fname']." ".$Meeting['User']['sname'] ?>
                    </td>
                    <td><?php
                                    echo $this->Html->link($attachment['document_name'], array( 'action' => 'sendFile', $attachment['id'], 4), array('target' => '_blank'));
                        ?>&nbsp;</td>
                    <td>
                        <b><i>
                        <?php
                                    echo $this->Html->link('I\'m unable to access/download a file?', array( 'action' => 'cantdownload', $attachment['id'],4));
                        ?>&nbsp;</i></b>
                    </td>
                    <td><?php echo substr($agenda['created'], 0, 10); ?>&nbsp;</td>
                    <td class="actions" <?php if($usertype != 15) :?> style ="display:none" <?php endif;?> >
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $attachment['id']), array('escape' => false)); ?>
                    <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $attachment['id']), array('escape' => false)); ?>
                    <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $item['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agenda['id'])); ?>
                    </td>
                </tr>

                <?php endforeach; ?>

                <tr><td colspan="5" style="background-color: #DEE1DD;color: #DEE1DD;border: 0"></td></tr>
                <tr><td colspan="5" style="background-color: #DEE1DD;color: #DEE1DD;border: 0"></td></tr>
                <tr><td colspan="5" style="background-color: #DEE1DD;color: #DEE1DD;border: 0"></td></tr>

                </tbody>
            </table>


        </div><!-- end col md 9 -->

    </div>
</div>

