<?php

$http = new eZHTTPTool();
$tpl = eZTemplate::factory();

if ( isset( $Params['project'] ) )
{

    // We have at least two parameters so we should handle
    // a custom username and a project name
    //
    $username = $Params['username'];
    $project = $Params['project'];

}
else
{

    // We have only one parameter so username is in reality
    // the project name and the username is fetch from configuration file
    //
    $ini = eZINI::instance( 'ezgithub.ini' );
    $username = $ini->variable( 'Profile', 'username' );

    $project = $Params['username']; // WARNING : See over

}

$tpl->setVariable( 'username', $username );
$tpl->setVariable( 'project', $project );

$Result['content'] = $tpl->fetch( 'design:github-project/show.tpl' );
$Result['path'] = array(
	array( 'text' => 'Github project', 'url' => false ),
	array( 'text' => 'Show', 'url' => false )
);

?>
