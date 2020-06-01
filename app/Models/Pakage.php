<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class pakage extends Sximo  {
	
	protected $table = 'pakage';
	protected $primaryKey = 'PakageId';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT pakage.* FROM pakage  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE pakage.PakageId IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
