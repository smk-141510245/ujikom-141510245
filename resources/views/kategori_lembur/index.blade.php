@extends('layouts.app')
@section('kategori')
    active
@endsection
@section('content')
<h1><center>Kategori Lembur</center></h1>
	<table border="2" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Kategori Lembur</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($kategori as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_l}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>
					<center><a href="{{route('kategori.edit',$data->id)}}" class='btn btn-danger'> Edit </a></center>
				</td>
				<td><center>
					{!! Form::open(['method'=>'DELETE','route'=>['kategori.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('kategori/create')}}" class="btn btn-primary form-control">Tambah Data</a>

@endsection