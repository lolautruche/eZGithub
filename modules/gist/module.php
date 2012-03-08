<?php

$Module = array( 'name' => 'gist' );

$ViewList = array();
$FunctionList = array();

$FunctionList['all'] = array();
$FunctionList['public'] = array();
$FunctionList['private'] = array();

$ViewList['show'] = array(

    'script' => 'front/show.php',
    'functions' => array( 'public' ),
    'params' => array( 'id' )

);

?>
