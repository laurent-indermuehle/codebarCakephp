<div class="articleDamages view">
<h2><?php  echo __('Article Damage');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articleDamage['ArticleDamage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articleDamage['Article']['id'], array('controller' => 'articles', 'action' => 'view', $articleDamage['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($articleDamage['ArticleDamage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($articleDamage['ArticleDamage']['location']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article Damage'), array('action' => 'edit', $articleDamage['ArticleDamage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article Damage'), array('action' => 'delete', $articleDamage['ArticleDamage']['id']), null, __('Are you sure you want to delete # %s?', $articleDamage['ArticleDamage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Article Damages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article Damage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
