x<?php
function getIndex($index, $default='')
{
	return isset($_GET[$index])?$_GET[$index]:$default;
}
function postIndex($index, $default='')
{
	return isset($_POST[$index])?$_POST[$index]:$default;
}

function loadClass($c)
{
	if (is_file("Library/$c.class.php"))
		include "Library/$c.class.php";

	elseif (is_file("Controller/$c.php"))
		include "Controller/$c.php";

	elseif (is_file("Model/$c.php"))
		include "Model/$c.php";
		else {
			echo "Kg co class:::: $c"; exit;
		}
}

