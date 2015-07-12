<?php
class Outbound extends BaseModel  {
	
	protected $table = 'outbound';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT outbound.* FROM outbound  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE outbound.id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
