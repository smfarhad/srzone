<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class invoicemain extends Sximo  {
	
	protected $table = 'invoice';
	protected $primaryKey = 'invoiceid';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT invoice.* FROM invoice  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE invoice.invoiceid IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
