<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class payment extends Sximo  {
	
	protected $table = 'payment';
	protected $primaryKey = 'paymentid';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT payment.* FROM payment  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE payment.paymentid IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
