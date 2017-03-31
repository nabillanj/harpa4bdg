<form method="POST" action="{{ !empty($anggota->id_anggota) ? route('anggota.update', @$anggota->id_anggota):route('anggota.store')}}">
@if(!empty($kelas->id_anggota))
      <input type="hidden" name="_method" value="PUT">
@endif
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('jurusan', 'Kelas', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jurusan', null, ['class' => 'form-control']) !!}
        {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('generasi', 'Generasi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('generasi', null, ['class' => 'form-control']) !!}
        {!! $errors->first('generasi', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    {!! Form::label('angklung', 'No Angklung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('angklung', null, ['class' => 'form-control']) !!}
        {!! $errors->first('angklung', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
</form>