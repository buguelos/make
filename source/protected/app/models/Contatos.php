<?php
class Contatos extends BaseModel  {
	
	protected $table = 'wa_contact';
	protected $primaryKey = '';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		
		return "  SELECT wa_contact.* FROM wa_contact  ";
	}
	public static function queryWhere(  ){
		
		return "   ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
