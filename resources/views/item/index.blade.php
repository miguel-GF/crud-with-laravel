@extends('layouts.header')

@section('information')
	
	<div class="container">
		<br>
		<div class="row" align="right">
			<a class="waves-effect waves-light btn">
				Nuevo
				<i class="material-icons right">add</i>
			</a>
		</div>
	</div>

	<div class="container">
		<table class="responsive-table centered highlight striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Amount</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
					<tr>
						<td>{{ $item->name }}</td>
						<td>{{ $item->description }}</td>
						<td>{{ $item->amount }}</td>
						<td>
							<a href="#"><i class="material-icons">edit</i></a>
							<a href="#"><i class="material-icons">delete</i></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>	

@endsection