<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class zone extends Sximo  {
	
	protected $table = 'zone';
	protected $primaryKey = 'ZoneId';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT zone.* FROM zone  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE zone.ZoneId IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
