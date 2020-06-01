@extends('layouts.app')

@section('content')
{{-- <div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('invoicemain?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>   --}}
	 
	 
 	{{-- <div class="page-content-wrapper m-t">    --}}

{{-- <div class="sbox animated fadeInRight"> --}}
	{{-- <div class="sbox-title"> 
   		<a href="{{ URL::to('invoicemain?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('invoicemain/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div> --}}
	{{-- <div class="content" style="background:#fff;"> 	 --}}

<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="fa fa-globe"></i> SR DIGITAL CABLE NETWORK
                                    <small class="pull-right">Date: {{ $row->invoicedate }}</small>
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row --><hr/>
                        <div class="row invoice-info">
						
                            <div class="col-sm-4 invoice-col">
                                From
                                <address>
                                    <strong> 
                                     SR DIGITAL                                       </strong><br/>
									 Medical Paker Matha <br/>
                                     Phone: +880 1712 507811<br/>
									 Email: info@srdigitalzone.com
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong>
                                       {!! SiteHelpers::gridDisplayView($row->customerid,'customerid','1:customer:CustomerId:FullName') !!}                                   </strong>
                                    <br>
                                    {{ $row->CustomerAddress }}                              </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Invoice #{{ $row->invoiceid }}</b><br>
                                <b>Payment Due:</b> {{ $row->duadate }}<br>
                                <b>Status:</b> {{ $row->status_id }} 
                            </div><!-- /.col -->
                        </div><!-- /.row -->
<hr/>
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Qty</th>
                                            <th>Product</th>
                                             <th>Conection Fee</th>
                                            <th>Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                                                                <tr>
                                            <td>1</td>
                                            <td>Monthly line Bill</td>
                                            <td>{{ $row->amount }}</td>
                                            <td>{{ $row->amount }}</td>
                                        </tr>
                                                                            </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                                <p class="lead">Amount Due Date {{ $row->duadate }}</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>Total Amount:</th>
                                                <td> {{ $row->amount }} TAKA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
<hr/>
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                                <a href="" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
@if($access['is_add'] ==1)
   		<a href="{{ URL::to('invoicemain/update/'.$id.'?return='.$return) }}" class="btn btn-success pull-right" title="Submit Payment"><i class="fa fa-credit-card"></i> Submit Payment </a>
		@endif 
                                <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                            </div>
                        </div>
                    </section>
                </section>	 
	

	{{-- </div> --}}
{{-- </div>	 --}}

	{{-- </div> --}}
{{-- </div> --}}
	  
@stop