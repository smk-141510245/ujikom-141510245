@extends('layouts.app')
@section('content')
<h1><center>Tunjangan</center></h1>
	<table border="2" class="table table-striped table-border table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Tunjangan</th>
				<th>Nama Golongan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th>Status</th>
				<th>Jumlah Anak</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjangan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_t}}</td>
				<td>{{$data->golongan->nama_g}}</td>
				<td>{{$data->jabatan->nama_j}}</td>
				<td>{{$data->besar_uang}}</td>
				<td>{{$data->status}}</td>
				<td>{{$data->jumlah_anak}}</td>
				<td>
					<center><a href="{{route('tunjangan.edit',$data->id)}}" class='btn btn-danger'> Edit </a></center>
				</td>
				<td><center>
					{!! Form::open(['method'=>'DELETE','route'=>['tunjangan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</center></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('tunjangan/create')}}" class="btn btn-primary form-control">Tambah Data</a>

@endsection