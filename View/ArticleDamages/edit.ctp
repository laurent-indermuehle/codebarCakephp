<div class="articleDamages form">
<?php echo $this->Form->create('ArticleDamage');?>
	<fieldset>
		<legend><?php echo __('Edit Article Damage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('article_id');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArticleDamage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ArticleDamage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Article Damages'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
