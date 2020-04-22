<?php
class Model_Book extends Db
{
		
	function getBook()
	{
		return $this->getTable('book');
	}

	function getCat()
	{
		return $this->getTable('category');
	}

	function getPub()
	{
		return $this->getTable('publisher');
	}


	function filter($name, $cat_id='all', $pub_id='all')
	{
		$sql="select * from book where 1 ";
		$arr= array();
		if ($name !='')
		{
			$sql .=" and book_name like ? ";
			$arr[]="%$name%";
		}
		if ($cat_id !='all')
		{
			$sql .=" and cat_id= ? ";
			$arr[]=$cat_id;
		}
		if ($pub_id !='all')
		{
			$sql .=" and pub_id= ? ";
			$arr[]=$pub_id;
		}
		return parent::selectQuery($sql, $arr);
	}


	function searchBook($name)
	{
		$sql="select * from book where 1 ";
		$arr= array();
		if ($name !='')
		{
			$sql .=" and book_name like ? ";
			$arr[]="%$name%";
		}
		
		return parent::selectQuery($sql, $arr);
	}
	function detail($book_id)
	{
		$sql="select * from book where book_id=? ";
		$arr= array($book_id);
		$data= parent::selectQuery($sql, $arr);
		if (Count($data)>0)
			return $data[0];
		return 0;
	}

	function getAllBook()
	{
		$sql = "select *, category.cat_name, publisher.pub_name
		from book, category, publisher 
		where book.cat_id = category.cat_id and book.pub_id = publisher.pub_id";
		$arr= array();

		return parent::selectQuery($sql, $arr);
	}
	function getBookById($book_id)
	{
		$sql = "select * from book where ?";
		$arr = array($book_id);

		return parent::selectQuery($sql, $arr);
	}
	function insertBook($book_id, $book_name, $description, $price, $img, $pub_id, $cat_id)
	{
		$sql = "insert into book values(?,?,?,?,?,?,?)";
		$arr = array($book_id, $book_name, $description, $price, $img, $pub_id, $cat_id);

		return parent::updateQuery($sql, $arr);
	}
	function deleteBook($book_id)
	{
		$sql = "delete from book where book_id = ?";
		$arr = array($book_id);
		
		return parent::updateQuery($sql, $arr);
	}
	function updateBook($book_id, $book_name, $description, $price, $img)
	{
		$sql = "update book set book_name = ?, description = ?, price = ?, img = ? where book_id = ?";
		$arr = array($book_name, $description, $price, $img, $book_id);
		
		return parent::updateQuery($sql, $arr);
	}
}
