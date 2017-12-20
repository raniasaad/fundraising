@extends('layouts.app')

@section('content')
<?php $user = Auth::user();?>
<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <!-- <div class="panel-heading">Dashboard</div>-->

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
	
	<div class="row">
	<div class="col-sm-offset-2 col-sm-8">
		<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Add a pledge</div>
			<div class="panel-body" style=""> 
				<div class="col-sm-12">
					{!! Form::open(['route' => 'pledge.store', 'class' => 'form-horizontal panel']) !!}	
					<div class="form-group">
					<div class="row" style="margin-left: 220px;">
					<div class="col-sm-5">
						<div class="checkbox">
							<label>
								{!! Form::radio('onetime', 1, null,['name'=>'type','onchange'=>'document.getElementById("monthlydiv").style.display = "none";document.getElementById("onetimediv").style.display = "block";']) !!} One time
							</label>
						</div>
						</div>
						<div class="col-sm-6">
						<div class="checkbox">
							<label>
								{!! Form::radio('monthlyc', 1, null,['name'=>'type','onchange'=>'document.getElementById("monthlydiv").style.display = "block";document.getElementById("onetimediv").style.display = "none";']) !!}  Monthly
							</label>
						</div>
						</div>
						</div>
					</div>
					<div  id="onetimediv" class="form-group{{ $errors->has('one_time') ? ' has-error' : '' }}">
                            <label for="one_time" class="col-md-4 control-label">One time amount</label>

                            <div class="col-md-7">
                                <input id="one_time" type="number" class="form-control" name="one_time" value="" required>

                                @if ($errors->has('one_time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('one_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
					
					<div id="monthlydiv">
					<div  class="form-group{{ $errors->has('monthly') ? ' has-error' : '' }}">
                            <label for="monthly" class="col-md-4 control-label">Monthly amount</label>

                            <div class="col-md-7">
                                <input id="monthly" type="number" class="form-control" name="monthly" value="" required>

                                @if ($errors->has('monthly'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('monthly') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div  class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                            <label for="duration" class="col-md-4 control-label">Duration</label>

                            <div class="col-md-7">
                                <input id="duration" type="number" class="form-control" name="duration" value="" required>

                                @if ($errors->has('duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div   class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                            <label for="start_date" class="col-md-4 control-label">Start date</label>

                            <div class="col-md-7">
                                <input id="start_date" type="date" class="form-control" name="start_date" value="" required>

                                @if ($errors->has('start_date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
					</div>
					</br>
		<div class="col-md-12" style=" margin-bottom: 20px;padding-left: 0px; ">
		<b style=" font-size: 20px; font-weight: bold; " >Donor's Info</b>
		</div>
		</br>
		<div class="form-group{{ $errors->has('name_d') ? ' has-error' : '' }}">
                            <label for="name_d" class="col-md-4 control-label">Name</label>

                            <div class="col-md-7">
                                <input id="name_d" type="name_d" class="form-control" name="name_d" value="<?php echo $user->name;?>" required>

                                @if ($errors->has('name_d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_d') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
									
					
				<div class="form-group{{ $errors->has('email_d') ? ' has-error' : '' }}">
                            <label for="email_d" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-7">
                                <input id="email_d" type="email_d" class="form-control" name="email_d" value="{{ old('email_d') }}" required>

                                @if ($errors->has('email_d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_d') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
					<div class="form-group{{ $errors->has('phone_d') ? ' has-error' : '' }}">
                            <label for="phone_d" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-7">
                                <input id="phone_d" type="phone_d" class="form-control" name="phone_d" value="" required>

                                @if ($errors->has('phone_d'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_d') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
			
			
			             
						
					<div class="form-group" style=" margin-left: 240px; ">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('direction1', 1, null) !!} Capital Cost
							</label>
						</div>
					</div><div class="form-group" style=" margin-left: 240px; ">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('direction2', 1, null) !!} School Improvements
							</label>
						</div>
					</div><div class="form-group" style=" margin-left: 240px; ">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('direction3', 1, null) !!} MAC Education Fund
							</label>
						</div>
					</div>
					{!! Form::submit('Submit', ['class' => 'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Back
		</a>
	</div>
	</div>
	</div>
@endsection