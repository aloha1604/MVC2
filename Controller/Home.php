<?php
/**
 * Class Home
 * index.php?controller=Home&action=index
 */
class Home
{
	public  $model;
	function __construct()
	{
		$this->model = new Model_Book();
		$action = getIndex('action', 'index');
		
		//print_r($_GET);
		if (method_exists($this,$action))
			$this->$action();
		else {echo "Chưa xây dựng method  $action "; exit;}
		
	}

	function index()
	{
		$data = $this->model->getBook();
	//echo "<pre>";	print_r($data);
		include "View/home_index.php";
	}

	function showBook()
	{
		$data = $this->model->getBook();
		include "View/home_showBook.php";
	}

	function searchBook()
	{
		$data = $this->model->searchBook(getIndex('book_name'));
		include "View/home_showBook.php";
	}

	function detail()
	{
		echo "Thong tin chi tiet sach co book_id=". getIndex('book_id');
	}

	function xyz()
	{
		echo "HI, XYZ";
	}
}