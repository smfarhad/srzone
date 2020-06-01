<?php namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function getIndex( Request $request )
	{
		
		$this->data['online_users'] = \DB::table('tb_users')->orderBy('last_activity','desc')->limit(10)->get(); 
		$this->data['customer_count'] = \DB::table('customer')->count();
		$this->data['invoice_tottal'] = \DB::table('invoice')->count();
		$this->data['pakage_count'] = \DB::table('pakage')->count();
        $this->data['area_count'] = \DB::table('area')->count();
		$this->data['stuff_count'] = \DB::table('employee')->count();
		$this->data['zone_count'] = \DB::table('zone')->count();
        $this->data['payment_count'] = \DB::table('payment')->count();
		// $this->data['Invoice_paid'] = DB::table('invoice')
		// 		//	->select( DB::raw('count(*) as user_count, status_id'))
        //              ->where('status_id', 'paid', 1)
        //              ->groupBy('status_id')
        //              ->get();
                
		
		
		
		return view('dashboard.index',$this->data);


	}	




}