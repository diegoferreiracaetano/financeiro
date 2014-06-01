<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $msgGravacaoSucesso = 'Registro salvo com sucesso!';
	public $msgGravacaoError = 'O registro n�o pode ser salvo, por favor tente novamente.';
	public $msgExclusaoSucesso = 'Registro foi deletado com sucesso!';
	public $msgExclusaoError = 'O registro n�o pode ser deletado, por favor tente novamente';

	var $components = array(
			'Session',
		    'FilterResults.Filter' => array(
		        'auto' => array(
		            'paginate' => false,
		            'explode'  => true,  // recommended
			),
		    'explode' => array(
		            'character'   => ' ',
		            'concatenate' => 'AND',
			)
		)
	);

	public $helpers = array(
		'PhpExcel.PhpExcel',
		'Session',
		'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
		'Form' => array('className' => 'BoostCake.BoostCakeForm'),
		'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
		'FilterResults.Search' => array(
	        'operators' => array(
	            'LIKE'       => 'containing',
	            'NOT LIKE'   => 'not containing',
	            'LIKE BEGIN' => 'starting with',
	            'LIKE END'   => 'ending with',
	            '='  => 'equal to',
	            '!=' => 'different',
	            '>'  => 'greater than',
	            '>=' => 'greater or equal to',
	            '<'  => 'less than',
	            '<=' => 'less or equal to'
	        )
    	)
	);

}
