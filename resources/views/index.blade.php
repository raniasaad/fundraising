@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

    <div class=" col-sm-12">
	{!! link_to_route('pledge.create', 'Add a pledge', [], ['class' => 'btn btn-info pull-right']) !!}
		</br>
		</br>
    	@if(session()->has('ok'))
			<div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
		@endif
		
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Pledges List</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>One Time amount</th>
						<th>Monthly amount</th>
						<th>Duration</th>
						<th>Start date</th>
						<th>Doner name</th>
						<th>Doner email</th>
						<th>Doner phone</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pledges as $pledge)
						<tr>
							<td>{!! $pledge->id !!}</td>
							<td class="text-primary"><strong>{!! $pledge->one_time !!}</strong></td>
							<td class="text-primary"><strong>{!! $pledge->monthly !!}</strong></td>
							<td class="text-primary"><strong>{!! $pledge->duration !!}</strong></td>
							<td class="text-primary"><strong>{!! $pledge->start_date !!}</strong></td>
							<td class="text-primary"><strong>{!! $pledge->name_d !!}</strong></td>
							<td class="text-primary"><strong>{!! $pledge->email_d !!}</strong></td>
							<td class="text-primary"><strong>{!! $pledge->phone_d !!}</strong></td>
							<td>{!! link_to_route('pledge.show', 'View', [$pledge->id], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('pledge.edit', 'Edit', [$pledge->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['pledge.destroy', $pledge->id]]) !!}
									{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Are you sure to delete the pledge ?\')']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
	  			</tbody>
			</table>
		</div>
		
	</div>
	</div>
	</div>
@endsection