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

$Result['content'] = $tpl->fetch( 'design:github-user/show.tpl' );
$Result['path'] = array(
	array( 'text' => 'Github user', 'url' => false ),
	array( 'text' => $username, 'url' => false )
);

?>
