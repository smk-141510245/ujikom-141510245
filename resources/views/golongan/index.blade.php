@extends('layouts.app')
@section('golongan')
	active
@endsection
@section('content')
<h1><center>Golongan</center></h1>
	<table border="2" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Golongan</th>
				<th>Nama Golongan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($golongan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_g}}</td>
				<td>{{$data->nama_g}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
				<center><a href="{{route('golongan.edit',$data->id)}}" class='btn btn-danger'> Edit</a></center>
				</td>
				<td><center>
					{!! Form::open(['method'=>'DELETE','route'=>['golongan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('golongan/create')}}" class="btn btn-primary form-control">Tambah Data</a>

@endsection