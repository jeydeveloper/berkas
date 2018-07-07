@extends('layouts.app')

@section('title', '| Permissions')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-key"></i>Available Tipe Berkas</h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipeberkas as $tb)
                <tr>
                    <td>{{ $tb->tb_name }}</td> 
                    <td>
                    <a href="{{ URL::to('tipeberkas/'.$tb->tb_id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['tipeberkas.destroy', $tb->tb_id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('tipeberkas/create') }}" class="btn btn-success">Add Tipe Berkas</a>

</div>

@endsection