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
		<li><a href="{{ URL::to('invoicemain?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'invoicemain/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-6">
						<fieldset><legend> Invoice</legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Invoiceid" class=" control-label col-md-4 text-left"> Invoiceid </label>
									<div class="col-md-6">
									  {!! Form::text('invoiceid', $row['invoiceid'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Customerid" class=" control-label col-md-4 text-left"> Customerid </label>
									<div class="col-md-6">
									  <select name='customerid' rows='5' id='customerid' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="CustomerAddress" class=" control-label col-md-4 text-left"> CustomerAddress </label>
									<div class="col-md-6">
									  <textarea name='CustomerAddress' rows='5' id='CustomerAddress' class='form-control '  
				           >{{ $row['CustomerAddress'] }}</textarea> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Details</legend>
									
								  <div class="form-group  " >
									<label for="Invoicedate" class=" control-label col-md-4 text-left"> Invoicedate </label>
									<div class="col-md-6">
									  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('invoicedate', $row['invoicedate'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Pakageid" class=" control-label col-md-4 text-left"> Pakageid </label>
									<div class="col-md-6">
									  <select name='pakageid' rows='5' id='pakageid' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Duadate" class=" control-label col-md-4 text-left"> Duadate <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('duadate', $row['duadate'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Amount" class=" control-label col-md-4 text-left"> Amount <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('amount', $row['amount'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Status Id" class=" control-label col-md-4 text-left"> Status Id </label>
									<div class="col-md-6">
									  
					<?php $status_id = explode(',',$row['status_id']);
					$status_id_opt = array( 'unpaid' => 'UnPaid' ,  'paid' => 'Paid' , ); ?>
					<select name='status_id' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_id_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status_id'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('invoicemain?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#customerid").jCombo("{{ URL::to('invoicemain/comboselect?filter=customer:CustomerId:FullName') }}",
		{  selected_value : '{{ $row["customerid"] }}' });
		
		$("#pakageid").jCombo("{{ URL::to('invoicemain/comboselect?filter=pakage:PakageId:PakageId|PakageName|PakageFee') }}",
		{  selected_value : '{{ $row["pakageid"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop