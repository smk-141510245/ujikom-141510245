@extends('layouts.app')
@section('penggajian')
    active
@endsection
@section('content')
<div class="col-md-15 col-md-offset-0">
 <div class="panel panel-danger">
<div class="panel-body">
        <div class="col-md-15 col-md-offset-0">
            <div class="panel panel-danger">
                <div class="panel-title"><center><h2>Data Penggajian</h2></center></div>
                    <div class="panel-body"><hr></hr>
     <table class="table table-striped table-hover table-bordered">
                        
                        <div class="col-md-12">
                        
                        

                        <h3>Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp{{$penggajian->Tunjangan_pegawai->Pegawai->User->name}}</h3>

                        <h3>NIP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp{{$penggajian->Tunjangan_pegawai->Pegawai->nip}}</h3>

                        <h3>Status Gaji &nbsp&nbsp&nbsp&nbsp&nbsp : &nbsp @if($penggajian->tgl_pengambilan == ""&&$penggajian->status_pengambilan == "0")
                        Gaji Belum Diambil @elseif($penggajian->tgl_pengambilan == ""||$penggajian->status_pengambilan == "0")
                        Gaji Belum Diambil</h3>

                        @else
                            <h3>Gaji Sudah Diambil Pada {{$penggajian->tgl_pengambilan}}</h3>

                        @endif</b>
                        <center>
                        <br>
                        <br>
                        <h2>Perhitungan Gaji Keseluruhan&nbsp:</h2>
                        <br>
                        <h5>Gaji Lembur&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->jumlah_uang_lembur,2,",",".");?> <hr>Gaji Pokok&nbsp&nbsp&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->gaji_pokok,2,",",".");?><hr>Tunjangan&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->Tunjangan_pegawai->Tunjangan->besar_uang,2,",",".");?><hr>Total Gaji&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->total_gaji,2,",",".");?>



                        </h5>
                        <br>
                                <a class="btn btn-primary col-md-12" href="{{url('penggajian')}}">Kembali</a></br>
                                
                        </center>
                        </div> 
                        
                    </table>

@endsection