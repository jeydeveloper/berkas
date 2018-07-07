@extends('layouts.app')

@section('title', '| Edit Tipe Berkas')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> Edit {{$tipeberkas->tb_name}}</h1>
    <br>
    {{ Form::model($tipeberkas, array('route' => array('tipeberkas.update', $tipeberkas->tb_id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Tipe Berkas Name') }}
        {{ Form::text('tb_name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection