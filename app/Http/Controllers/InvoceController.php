<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvoceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $customers = DB::table('customer')->select('CustomerId', 'Pakage','Pakagefee', 'CustomerAddress', 'BillDue')
                                          ->where('Status', 'active')
                                          ->get();
        $Invocie = array();
        $i = 0;
        $invoiceGenerateDate = date('Y-m-d');
        foreach ($customers as $row){
                    $Invocie[$i]['customerid'] = $row->CustomerId;
                    $Invocie[$i]['pakageid'] = $row->Pakage;               
                    $Invocie[$i]['CustomerAddress'] = $row->CustomerAddress;
                    $Invocie[$i]['invoicedate'] = $invoiceGenerateDate; 
                    $Invocie[$i]['dueamount'] = $row->BillDue;
                    $Invocie[$i]['amount'] = $row->Pakagefee;                                                   
                    $Invocie[$i]['status_id'] = 'unpaid'; 
                    $i++;
        }
        
        $invoiceExistOrNot = DB::table('invoice')->select('invoicedate')
                                         ->where('invoicedate', $invoiceGenerateDate)
                                         ->count();
        if($invoiceExistOrNot >0){
            echo 'Invoice Already Generated';
        } else {
            if(DB::table('invoice')->insert($Invocie)){
                echo 'Invoice Generate Successfully';
            } else {
                echo 'Invoice Did not Generated uccessfully Db Error Occured';
            }
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
