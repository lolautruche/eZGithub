<?php

$Module = array( 'name' => 'githubproject' );

$ViewList = array();
$FunctionList = array();

$FunctionList['all'] = array();
$FunctionList['public'] = array();
$FunctionList['private'] = array();

$ViewList['show'] = array(

    'script' => 'front/show.php',
    'functions' => array( 'public' ),
    'params' => array( 'username', 'project' )

);

$ViewList['list'] = array(

    'script' => 'front/list.php',
    'functions' => array( 'public' ),
    'params' => array( 'username' )

);

?>
