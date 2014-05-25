<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style','bootstrap.min'/*,'bootstrap-theme.min'*/));
		echo $this->Html->script(array('jquery','bootstrap.min'));	
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Financeiro</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          	<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li class="dropdown-header"><h4>Entradas</h4></li>
              	<li><?php echo $this->Html->link(__('Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?></li>
              	<li><?php echo $this->Html->link(__('Franquias'), array('controller' => 'franquias', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Contas'), array('controller' => 'contas', 'action' => 'index')); ?></li>
                <li class="divider"></li>
                <li class="dropdown-header"><h4>Saidas</h4></li>
                <li><?php echo $this->Html->link(__('Cedentes'), array('controller' => 'cedentes', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Despesas'), array('controller' => 'despesas', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('Formas de Pagamentos'), array('controller' => 'formaPagamentos', 'action' => 'index')); ?></li>
              </ul>
            </li>
            <li><?php echo $this->Html->link(__('Contas a Pagar'), array('controller' => 'pagamentos', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Contas a Receber'), array('controller' => 'saidas', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Fluxo de Caixa'), array('controller' => 'relatorios', 'action' => 'index')); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container" style="margin-top:70px">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
    </div><!-- /.container -->
</body>
</html>
