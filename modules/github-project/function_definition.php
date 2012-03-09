<?php

$FunctionList['list'] = 
	array(
	
		'name' => 'list',
		'call_method' =>
		array(
			'include_file' => 'extension/ezgithub/classes/eZGithubProject.php',
			'class' => 'eZGithubProject',
			'method' => 'fetchGetProjects'
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
			'include_file' => 'extension/ezgithub/classes/eZGithubProject.php',
			'class' => 'eZGithubProject',
			'method' => 'fetchGetGithubProjectContent'
		),
		'parameter_type' => 'standard',
		'parameters' => 
		array(
            array( 'name' => 'project', 'type' => 'string', 'required' => true ),
            array( 'name' => 'username', 'type' => 'string', 'required' => false )
		)
	
	);

?>
