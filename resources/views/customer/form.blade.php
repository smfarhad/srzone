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

		 {!! Form::open(array('url'=>'customer/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-6">
						<fieldset><legend> Customer Details </legend>
									
								  <div class="form-group hidethis " style="display:none;">
									<label for="Customer ID" class=" control-label col-md-4 text-left"> Customer ID </label>
									<div class="col-md-6">
									  {!! Form::text('CustomerId', $row['CustomerId'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Customer Name" class=" control-label col-md-4 text-left"> Customer Name <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('FullName', $row['FullName'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Customer Address" class=" control-label col-md-4 text-left"> Customer Address </label>
									<div class="col-md-6">
									  <textarea name='CustomerAddress' rows='5' id='CustomerAddress' class='form-control '  
				           >{{ $row['CustomerAddress'] }}</textarea> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Mobile Number" class=" control-label col-md-4 text-left"> Mobile Number <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('Phone', $row['Phone'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Area" class=" control-label col-md-4 text-left"> Area </label>
									<div class="col-md-6">
									  <select name='Area' rows='5' id='Area' class='select2 '   ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Box ID" class=" control-label col-md-4 text-left"> Box ID </label>
									<div class="col-md-6">
									  {!! Form::text('BoxId', $row['BoxId'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Customer Type" class=" control-label col-md-4 text-left"> Customer Type <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  <?php $Customertype = explode(",",$row['Customertype']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='Customertype[]' value ='self' required  class='' 
					@if(in_array('self',$Customertype))checked @endif 
					 /> Self </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='Customertype[]' value ='rent' required  class='' 
					@if(in_array('rent',$Customertype))checked @endif 
					 /> Rent </label>  
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			<div class="col-md-6">
						<fieldset><legend> Conection Details</legend>
									
								  <div class="form-group  " >
									<label for="Connection Date" class=" control-label col-md-4 text-left"> Connection Date <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('ConnectionDate', $row['ConnectionDate'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Pakage" class=" control-label col-md-4 text-left"> Pakage <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  <select name='Pakage' rows='5' id='Pakage' class='select2 ' required  ></select> 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Connection Fee" class=" control-label col-md-4 text-left"> Connection Fee <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('ConnectionFee', $row['ConnectionFee'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Bill Due" class=" control-label col-md-4 text-left"> Bill Due </label>
									<div class="col-md-6">
									  {!! Form::text('BillDue', $row['BillDue'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Pakage Fee" class=" control-label col-md-4 text-left"> Pakage Fee <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  {!! Form::text('Pakagefee', $row['Pakagefee'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " >
									<label for="Conection Status" class=" control-label col-md-4 text-left"> Conection Status <span class="asterix"> * </span></label>
									<div class="col-md-6">
									  <?php $Status = explode(",",$row['Status']); ?>
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='Status[]' value ='active' required  class='' 
					@if(in_array('active',$Status))checked @endif 
					 /> Active </label> 
					 <label class='checked checkbox-inline'>   
					<input type='checkbox' name='Status[]' value ='inactive' required  class='' 
					@if(in_array('inactive',$Status))checked @endif 
					 /> InActive </label>  
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
					<button type="button" onclick="location.href='{{ URL::to('customer?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		$('.addC').relCopy({});
		
		$("#Area").jCombo("{{ URL::to('customer/comboselect?filter=area:arename:arename') }}",
		{  selected_value : '{{ $row["Area"] }}' });
		
		$("#Pakage").jCombo("{{ URL::to('customer/comboselect?filter=pakage:PakageId:PakageName|PakageFee') }}",
		{  selected_value : '{{ $row["Pakage"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop