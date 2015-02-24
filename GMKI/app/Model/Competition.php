<?php
App::uses('AppModel', 'Model');
/**
 * Competition Model
 *
 */
class Competition extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'competition';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'datecompetition' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Le format de la date n\'est pas correct',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
