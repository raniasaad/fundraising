@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Edit pledge</div>
			<div class="panel-body"> 
				<div class="col-sm-12">
					{!! Form::model($pledge, ['route' => ['pledge.update', $pledge->id], 'method' => 'put', 'class' => 'form-horizontal panel']) !!}
					<div class="form-group {!! $errors->has('one_time') ? 'has-error' : '' !!}">
						{!! Form::text('one_time', null, ['class' => 'form-control', 'placeholder' => 'One time amount']) !!}
						{!! $errors->first('one_time', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('monthly') ? 'has-error' : '' !!}">
						{!! Form::text('monthly', null, ['class' => 'form-control', 'placeholder' => 'Monthly amount']) !!}
						{!! $errors->first('monthly', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('duration') ? 'has-error' : '' !!}">
						{!! Form::text('duration', null, ['class' => 'form-control', 'placeholder' => 'duration']) !!}
						{!! $errors->first('duration', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('start_date') ? 'has-error' : '' !!}">
						{!! Form::text('start_date', null, ['class' => 'form-control', 'placeholder' => 'start date']) !!}
						{!! $errors->first('start_date', '<small class="help-block">:message</small>') !!}
					</div>
					</br>
		<div class="col-md-12" style=" margin-bottom: 20px; ">
		<b style=" font-size: 20px; font-weight: bold; " >Donor's Info</b>
		</div>
		</br>
					<div class="form-group {!! $errors->has('name_d') ? 'has-error' : '' !!}">
						{!! Form::text('name_d', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
						{!! $errors->first('name_d', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email_d') ? 'has-error' : '' !!}">
						{!! Form::email('email_d', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						{!! $errors->first('name_d', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('phone_d') ? 'has-error' : '' !!}">
						{!! Form::text('phone_d', null, ['class' => 'form-control', 'placeholder' => 'phone']) !!}
						{!! $errors->first('phone_d', '<small class="help-block">:message</small>') !!}
					</div>
			
					<div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('direction1', 1, null) !!} Capital Cost
							</label>
						</div>
					</div><div class="form-group">
						<div class="checkbox">
							<label>
								{!! Form::checkbox('direction2', 1, null) !!} School Improvements
							</label>
						</div>
					</div><div class="form-group">
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
@endsection