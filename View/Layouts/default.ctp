<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('codebar_dev', 'Codebar on CakePHP');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 

	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
		</title>
		<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		?>
		
		<!--========= STYLES =========-->
		<?php
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('screen');
		echo $this->Html->css('reset');
		echo $this->Html->css('grid');
		echo $this->Html->css('style');
		echo $this->Html->css('dataTable');
		?>
		<!--[if gte IE 8]><?php echo $this->Html->css('ie8'); ?><![endif]-->
		
		<!--============ JQUERY =============-->
		<?php
		echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		echo $this->Html->script('jquery.dataTables.min');
		?>
						
		<!--=== ENABLE HTML5 TAGS FOR IE ===-->
		<!--[if IE]><?php echo $this->Html->script('html5'); ?><![endif]-->
	</head>
	<body>
		<section class="sidebar">
			<?php echo $this->Html->link('', array('controller' => 'pages', 'action' => 'display', 'home'), array('class' => 'logo')); ?>
			<form method="get" id="searchform" action="#">
				<input placeholder="Search..." type="text" name="s" id="s" />
			</form>
			<?php if ($this->fetch('sidebar')): ?>
			<ul id="menu">
				<?php echo $this->fetch('sidebar'); ?>
			</ul><!--End of #menu-->
			<?php endif; ?>
		</section><!-- End of .sidebar -->
		
		<section class="container">
			<section class="container_12">
				<section id="page_content" class="page_content">

					<?php echo $this->element('top_panel'); ?>

					<?php echo $this->Session->flash(); ?>

					<?php echo $this->fetch('content'); ?>
		
				</section><!-- end of #page_content -->
			</section><!-- end of #container_12 -->
		</section><!-- end of #container -->
	
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Js->writeBuffer(); ?>
	</body>
</html>