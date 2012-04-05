<div class="emails view">
<h2><?php  echo __('Email');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($email['Email']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Header'); ?></dt>
		<dd>
			<?php echo h($email['Email']['header']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($email['Email']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($email['Email']['message']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $email['Loan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $email['Intervention']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Person Email'); ?></dt>
		<dd>
			<?php echo h($email['Email']['to_person_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['ToPerson']['id'], array('controller' => 'people', 'action' => 'view', $email['ToPerson']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($email['Email']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Person Email'); ?></dt>
		<dd>
			<?php echo h($email['Email']['from_person_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($email['FromPerson']['id'], array('controller' => 'people', 'action' => 'view', $email['FromPerson']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Email'), array('action' => 'edit', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Email'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New To Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
