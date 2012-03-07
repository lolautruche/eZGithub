<?php

$FunctionList['list'] = 
	array(
	
		'name' => 'list',
		'call_method' =>
		array(
			'include_file' => 'extension/ezgithub/classes/eZGists.php',
			'class' => 'eZGists',
			'method' => 'fetchgetGists'
		),
		'parameter_type' => 'standard',
		'parameters' => 
		array(
			array( 'username' => 'location', 'type' => 'string', 'required' => false )
		)
	
	);

?>
