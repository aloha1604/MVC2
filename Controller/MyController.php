<?php
/**
 * Class Home
 * index.php?controller=MyController&action=index
 */
class MyController
{
	public  $model;
	function __construct()
	{
		$action = getIndex('action', 'index');
		
		if (method_exists($this,$action))
			$this->$action();
		else {echo "Chưa xây dựng method  $action "; exit;}
		
	}

	function index()
	{
		$tam = new Model_tam();
		$dataLoai =$tam->getLoai();
		/*print_r($dataLoai);
		echo "index!";*/
		include 'View/tam_index.php';
	}

	function index2()
	{
		echo "index2";
	}
}