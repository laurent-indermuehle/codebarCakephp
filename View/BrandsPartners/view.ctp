<div class="brandsPartners view">
<h2><?php  echo __('Brands Partner');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($brandsPartner['BrandsPartner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($brandsPartner['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $brandsPartner['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($brandsPartner['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $brandsPartner['Partner']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brands Partner'), array('action' => 'edit', $brandsPartner['BrandsPartner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Brands Partner'), array('action' => 'delete', $brandsPartner['BrandsPartner']['id']), null, __('Are you sure you want to delete # %s?', $brandsPartner['BrandsPartner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands Partners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brands Partner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
	</ul>
</div>
