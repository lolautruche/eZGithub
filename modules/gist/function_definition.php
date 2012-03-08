<?php

$FunctionList['list'] = 
	array(
	
		'name' => 'list',
		'call_method' =>
		array(
			'include_file' => 'extension/ezgithub/classes/eZGists.php',
			'class' => 'eZGists',
			'method' => 'fetchGetGists'
		),
		'parameter_type' => 'standard',
		'parameters' => 
		array(
			array( 'name' => 'username', 'type' => 'string', 'required' => false )
		)
	
	);

$FunctionList['content'] = 
	array(
	
		'name' => 'content',
		'call_method' =>
		array(
			'include_file' => 'extension/ezgithub/classes/eZGists.php',
			'class' => 'eZGists',
			'method' => 'fetchGetGistContent'
		),
		'parameter_type' => 'standard',
		'parameters' => 
		array(
            array( 'name' => 'gist_id', 'type' => 'string', 'required' => true )
		)
	
	);

?>
