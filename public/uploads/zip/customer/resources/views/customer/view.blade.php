@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('customer?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox animated fadeInRight">
	<div class="sbox-title"> 
   		<a href="{{ URL::to('customer?return='.$return) }}" class="tips btn btn-xs btn-default pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('customer/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>CustomerId</td>
						<td>{{ $row->CustomerId }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>FullName</td>
						<td>{{ $row->FullName }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CustomerAddress</td>
						<td>{{ $row->CustomerAddress }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Phone</td>
						<td>{{ $row->Phone }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ConnectionDate</td>
						<td>{{ $row->ConnectionDate }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ConnectionFee</td>
						<td>{{ $row->ConnectionFee }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pakage</td>
						<td>{{ $row->Pakage }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Area</td>
						<td>{{ $row->Area }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>BoxId</td>
						<td>{{ $row->BoxId }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>BillDue</td>
						<td>{{ $row->BillDue }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Status</td>
						<td>{{ $row->Status }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop