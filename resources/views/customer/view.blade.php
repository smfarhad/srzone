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
						<td width='30%' class='label-view text-right'>Customer ID</td>
						<td>{{ $row->CustomerId }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Customer Name</td>
						<td>{{ $row->FullName }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>CustomerAddress</td>
						<td>{{ $row->CustomerAddress }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Mobile </td>
						<td>{{ $row->Phone }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Connection Date</td>
						<td>{{ $row->ConnectionDate }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ConnectionFee</td>
						<td>{{ $row->ConnectionFee }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Package Name</td>
						<td>{!! SiteHelpers::gridDisplayView($row->Pakage,'Pakage','1:pakage:PakageId:PakageName') !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Area Name</td>
						<td>{!! SiteHelpers::gridDisplayView($row->Area,'Area','1:area:arename:arename') !!} </td>
						
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
						<td width='30%' class='label-view text-right'>Customer Status</td>
						<td>{{ $row->Status }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Pakagefee</td>
						<td>{{ $row->Pakagefee }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Customertype</td>
						<td>{{ $row->Customertype }} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 	<hr />
	
	<h5> Payment Details </h5>
	
	<div class="table-responsive">
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"> No </th>
					@foreach ($subgrid['tableGrid'] as $t)
					@if($t['view'] =='1')
						<th>{{ $t['label'] }}</th>
					@endif
				@endforeach
				
			  </tr>
        </thead>

        <tbody>
            @foreach ($subgrid['rowData'] as $row)
            <tr>
				<td width="30">  </td>		
			 @foreach ($subgrid['tableGrid'] as $field)
				 @if($field['view'] =='1' )
				 <td>					 
				 	@if($field['attribute']['image']['active'] =='1')
						{!! SiteHelpers::showUploadedFile($row->$field['field'],$field['attribute']['image']['path']) !!}
					@else	
						{{--*/ $conn = (isset($field['conn']) ? $field['conn'] : array() ) /*--}}
						{!! SiteHelpers::gridDisplay($row->$field['field'],$field['field'],$conn) !!}	
					@endif						 
				 </td>
				 @endif					 
			 
			 @endforeach
			@endforeach
			</tr> 


        </tbody>	

     </table>   
     </div>
	
	</div>
</div>	

	</div>
</div>
	  
@stop