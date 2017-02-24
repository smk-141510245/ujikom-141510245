@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Edit Lembur<center></div>
                <div class="panel-body">
                    {!! Form::model($lembur,['method'=>'PATCH','route'=>['lemburp.update',$lembur->id]])!!}
                        {!! Form::hidden('id',null,['class'=>'form-control']) !!}
               
                       
                        <div class="form-group{{ $errors->has('Jumlah_jam') ? ' has-error' : '' }}">
                            <label for="Jumlah_jam" class="col-md-4 control-label">Jumlah jam </label>

                            <div class="col-md-6">
                                <input id="Jumlah_jam" type="text" class="form-control" name="Jumlah_jam" value="{{ old('Jumlah_jam') }}"  autofocus>

                                @if ($errors->has('Jumlah_jam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Jumlah_jam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    Simpan
                                </button>
                            </div>
                        </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection