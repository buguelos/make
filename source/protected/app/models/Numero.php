<?php
class Numero extends BaseModel  {
	
	protected $table = 'number';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT number.* FROM number  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE number.id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
