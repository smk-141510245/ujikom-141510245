@extends('layouts.app')
@section('penggajian')
    active
@endsection
@section('content')
<center><h2>Tabel Penggajian</h2></center> 
<table border="2" class="table table-striped table-border table-hover">
            <thead>
                <tr>
                        <th>No</th>
                        <th><center>Nama Pegawai</center></th>
                        <th><center>Nip Pegawai</center></th> 
                        <th><center>Status Pengambilan</center></th>
                        <th colspan="3"><center>Opsi</center></th>
                </tr>
            </thead>

                        @php
                            $no=1 ;
                        @endphp
                        @foreach($penggajian as $penggajians)
                        <td>{{$no++}}</td>                        
                        <td>{{$penggajians->Tunjanganp->Pegawai->User->name}}</td>
                        <td>{{$penggajians->Tunjanganp->Pegawai->nip}}</td>
                        <td><b>@if($penggajians->tanggal_pengambilan == ""&&$penggajians->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @elseif($penggajians->tanggal_pengambilan == ""||$penggajians->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else
                            Gaji Sudah Diambil Pada {{$penggajians->tanggal_pengambilan}}
                        @endif</b></td>


                        </h5>
                        
                                <td><a class="btn btn-primary form-control" href="{{route('penggajian.show',$penggajians->id)}}">Lihat</a></td>
                                     <td>{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajians->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger col-md-12'])!!}</td>
                                    {!!Form::close()!!}
                                
                        </center>
                        </div> 
                        @endforeach
                       
                    </table>
                    <center><a href="{{url('penggajian/create')}}" class="btn btn-primary form-control">Tambah Data</a></center><hr>
                </div>



                </div>

           
        
@endsection