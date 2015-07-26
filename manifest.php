<?php
$manifest = array(
	'name' => 'Portugues (BR) - Language Pack',
    'description' => 'Language Pack Portugues Brasil - <a href="http://www.lampadaglobal.com/index.php/pt/sugarcrm" target="_blank">LAMPADA GLOBAL SERVICES</a>',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '6.2.0',
	'acceptable_sugar_flavors' => array ( 0 => "CE"),
	'author' => 'LAMPADA GLOBAL SERVICES',
	'acceptable_sugar_versions' => array ( "exact_matches" => array (), "regex_matches" => array (	0 => "6.5.[0-9][a-z]?" ), ),
	'published_date' => '08-04-2011',
);

$installdefs = array(
	'id'=> 'pt_BR',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
	array('from'=> '<basepath>/include','to'=> 'include',),
	array('from'=> '<basepath>/modules','to'=> 'modules'),
	array('from'=> '<basepath>/jscalendar','to'=> 'jscalendar'))
);
?>
