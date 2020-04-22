<?php
class Model_Publisher extends Db
{
	function getAllPublisher()
	{
		return $this->getTable('publisher');
	}
}