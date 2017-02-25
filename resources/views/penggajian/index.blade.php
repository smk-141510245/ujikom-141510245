@extends('layouts.app')
@section('content')
    <center><h1>Penggajian<h1></center>
    <table border="3" class="table table-striped table-border table-hover">
                        <thead>
                            <tr class="bg-primary">
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Nip Pegawai</th> 
                            <th>Status Pengambilan</th>
                            <th colspan="3"> <center>Opsi</center></th>
                            </tr>
                        </thead>

                        @php
                            $no=1 ;
                        @endphp
                        <tbody>
                        @foreach($penggajian as $penggajian)
                        <td>{{$no++}}</td>                        
                        <td>{{$penggajian->Tunjangan_pegawai->Pegawai->User->name}}</td>
                        <td>{{$penggajian->Tunjangan_pegawai->Pegawai->nip}}</td>
                         <td><b>@if($penggajian->tgl_pengambilan == ""&&$penggajian->status_pengambilan == "0")

                        Gaji Belum Diambil

                        @elseif($penggajian->tgl_pengambilan == ""||$penggajian->status_pengambilan == "0")
                        Gaji Belum Diambil

                        @else
                        Gaji Sudah Diambil Pada {{$penggajian->tgl_pengambilan}}

                        @endif</b></td>





                        </h5>
                                <td><a class="btn btn-primary form-control" href="{{route('penggajian.show',$penggajian->id)}}">Lihat</a></td>
                                     <td>{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajian->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger col-md-12'])!!}</td>
                                     <div>

                                    {!!Form::close()!!}
                                
                        </center>
                        </div> 
                          </tbody>
                        @endforeach

                    </table>
                    <a  href="{{url('penggajian/create')}}" class="btn btn-primary form-control">Tambah Data</a>
                    <br>

           
        
@endsection

