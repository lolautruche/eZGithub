<?php

$http = new eZHTTPTool();
$tpl = eZTemplate::factory();

$gist_id = $Params['id'];

$tpl->setVariable( 'gist_id', $gist_id );

$Result['content'] = $tpl->fetch( 'design:gist/show.tpl' );
$Result['path'] = array(
	array( 'text' => 'Gist', 'url' => false ),
	array( 'text' => 'Show', 'url' => false )
);

?>
