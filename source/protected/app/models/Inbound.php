<?php
class Inbound extends BaseModel  {
	
	protected $table = 'inbound';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT inbound.* FROM inbound  ";
	}
	public static function queryWhere(  ){
		
		return " WHERE inbound.id IS NOT NULL   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
