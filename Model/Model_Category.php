<?php
class Model_Category extends Db
{
	function getllAllCategory()
	{
		return $this->getTable('category');
	}
}