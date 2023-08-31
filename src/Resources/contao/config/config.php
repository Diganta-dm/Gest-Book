<?php 

/* 
 * @package   Gest Book Bundle
 * @author    Diganta Mondal
 * @license   GNU/LGPL
 */

// BE MODULES

$GLOBALS['BE_MOD']['gestbook_bundle'] = array(
	'Gestbook_comment' => array(
		'tables' => array('tl_gestbook'),
	),	
);



/**
 * CONTENT ELEMENTS
 */


$GLOBALS['TL_CTE']['gestbook_bundle'] = array(
	'gest-book' 	=> 'Diganta\GestbookBundle\FeCte\GestBook',
	
);

?>