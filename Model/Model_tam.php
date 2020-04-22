<?php
class Model_tam extends Db
{
	function getLoai()
	{
		return $this->selectQuery('select * from category');
	}
}