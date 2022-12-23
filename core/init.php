<?php
ini_set('session.gc_maxlifetime', 900);

session_start();

spl_autoload_register(function ($class){
	include_once 'classes/'.$class.'.php';
});

include_once 'functions/sanitize.php';
include_once 'functions/debug.php';