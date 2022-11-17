<?php 
require_once ("Query.php");
class Category extends Query
{
	var $table="categories";
	public function getList()
	{
		$categories = $this->select($this->table, ['id','name','parent_id','thumbnail','slug','description','created_at']);
		return $categories;
	}
}

 ?>