@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')
<h1>Edit Kategori Lembur</h1>
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit</div>
                <div class="panel-body">
					{!! Form::model($lembur,['method'=>'PATCH','route'=>['lemburp.update',$lembur->id]])!!}
						{!! Form::hidden('id',null,['class'=>'form-control']) !!}
                        <div class="form-group{{ $errors->has('kode_l') ? ' has-error' : '' }}">
                            <label for="kode_l" class="col-md-4 control-label">Kode Lembur Pegawai</label>

                            <div class="col-md-6">
                                {!! Form::text('kode_l',null,['class'=>'form-control']) !!}
                                @if ($errors->has('kode_l'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_l') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
						{!! Form::submit('Save',['class'=>'btn btn-primary form-control']) !!}
					</div>
				{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection