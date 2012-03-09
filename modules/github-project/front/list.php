<?php

$http = new eZHTTPTool();
$tpl = eZTemplate::factory();

if ( isset( $Params['username'] ) )
{
    $username = $Params['username'];
}
else
{
    $ini = eZINI::instance( 'ezgithub.ini' );
    $username = $ini->variable( 'Profile', 'username' );
}

$tpl->setVariable( 'username', $username );

$Result['content'] = $tpl->fetch( 'design:github-project/list.tpl' );
$Result['path'] = array(
	array( 'text' => 'Github project', 'url' => false ),
	array( 'text' => 'List', 'url' => false )
);

?>
