@extends('layouts.app')

@section('content')
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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <!-- <div class="panel-heading">Dashboard</div>-->

                <div class="panel-body">
	 {!! Form::open(['url' => 'pledges']) !!}
        
	 <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Type of donation :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                              
							   <input type="radio" name="type" value="onetime" onchange="document.getElementById('monthlydiv').style.display = 'none';document.getElementById('onetimediv').style.display = 'block';"> One time
								<input type="radio" name="type" value="monthly" onchange="document.getElementById('monthlydiv').style.display = 'block';document.getElementById('onetimediv').style.display = 'none';"> Monthly 
								

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</br>
						<div id="onetimediv" class="form-group{{ $errors->has('onetime') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Amount (one time donation) :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="onetime" type="number" class="form-control" name="onetime" value="" required autofocus>

                                @if ($errors->has('onetime'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('onetime') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
		</br>
		<div class="monthlydiv" id="monthlydiv"> 
				 <div class="form-group{{ $errors->has('monthly') ? ' has-error' : '' }}">
                            <label for="monthly" class="col-md-4 control-label">Monthly donation pledge :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="monthly" type="number" class="form-control" name="monthly" value="" required autofocus>

                                @if ($errors->has('monthly'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('monthly') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
</br>
<div class="form-group{{ $errors->has('duration') ? ' has-error' : '' }}">
                            <label for="duration" class="col-md-4 control-label">duration donation pledge :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="duration" type="number" class="form-control" name="monthly" value="" required autofocus>

                                @if ($errors->has('duration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
	</br>
	
	 <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-4 control-label">Start date of donation :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="date" type="date" class="form-control" name="date" value="" required autofocus>

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
		</br>
		</div>
		</br>
		<div class="col-md-12" style=" margin-bottom: 20px; ">
		<b style=" font-size: 20px; font-weight: bold; " >Donor's Info</b>
		</div>
		</br>
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">email :</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
                            <label for="phonenumber" class="col-md-4 control-label">Phone number:</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                <input id="phonenumber" type="type" class="form-control" name="phonenumber" value="" required autofocus>

                                @if ($errors->has('phonenumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phonenumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('direction') ? ' has-error' : '' }}">
                            <label for="direction" class="col-md-4 control-label">Direct my donation towards:</label>

                            <div class="col-md-6" style=" margin-bottom: 15px; ">
                                 <input type="checkbox" name="direction" value="CapitalCost">Capital Cost<br>
								 <input type="checkbox" name="direction" value="SchoolImprovements" >School Improvements<br>
								 <input type="checkbox" name="direction" value="MACEducationFund" >MAC Education Fund<br>
                                @if ($errors->has('direction'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direction') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                             <div class="col-md-12" style=" margin-bottom: 15px; ">
                               </br> <button id="submit" type="submit" style="float:right;margin-right: 120px;" class="btn btn-primary" name="date" value="" required autofocus>
								Submit
								</button>
                                </div>
                      
      
    {!! Form::close() !!}
	
</div>
</div>
</div>
</div>

</div>
@endsection
