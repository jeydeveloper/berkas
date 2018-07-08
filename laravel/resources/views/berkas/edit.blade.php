@extends('layouts.app')

@section('title', '| Edit Berkas')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> Edit {{$berkas->brks_name}}</h1>
    <br>
    {{ Form::model($berkas, array('route' => array('berkas.update', $berkas->brks_id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Berkas Name') }}
        {{ Form::text('brks_name', null, array('class' => 'form-control')) }}
    </div>
    <br>
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection