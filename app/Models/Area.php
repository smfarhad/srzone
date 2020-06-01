<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class area extends Sximo  {
	
	protected $table = 'area';
	protected $primaryKey = 'areaid';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT area.* FROM area  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE area.areaid IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
