<?php

function _e($string)
{
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}