@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">	
			<div class="panel-heading">Pledge</div>
			<div class="panel-body"> 
				<p>One time amount : {{ $pledge->one_time }}</p>
				<p>Monthly amount : {{ $pledge->monthly }}</p>
				<p>Donor Name : {{ $pledge->name_d }}</p>
				<p>Donor Email : {{ $pledge->email_d }}</p>
				<p>Donor phone : {{ $pledge->phone_d }}</p>
				
			</div>
		</div>				
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> back
		</a>
	</div>
	</div>
@endsection