<?php

$FunctionList['content'] = 
	array(
	
		'name' => 'content',
		'call_method' =>
		array(
			'include_file' => 'extension/ezgithub/classes/eZGithubUser.php',
			'class' => 'eZGithubUser',
			'method' => 'fetchGetGithubUserContent'
		),
		'parameter_type' => 'standard',
		'parameters' => 
		array(
            array( 'name' => 'username', 'type' => 'string', 'required' => false )
		)
	
	);

?>
