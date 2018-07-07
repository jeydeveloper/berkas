@extends('layouts.app')

@section('title', '| Create Tipe Berkas')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    {{-- @include ('errors.list') --}}

    <h1><i class='fa fa-key'></i> Add Tipe Berkas</h1>
    <br>

    {{ Form::open(array('url' => 'tipeberkas')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('tb_name', '', array('class' => 'form-control')) }}
    </div>
    
    <br>
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>

@endsection