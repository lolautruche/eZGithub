<?php

$Module = array( 'name' => 'github-user' );

$ViewList = array();
$FunctionList = array();

$FunctionList['all'] = array();
$FunctionList['public'] = array();
$FunctionList['private'] = array();

$ViewList['show'] = array(

    'script' => 'front/show.php',
    'functions' => array( 'public' ),
    'params' => array( 'username' )

);

?>
