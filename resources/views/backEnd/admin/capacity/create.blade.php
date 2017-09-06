@extends('backLayout.app')
@section('title')
Create new Capacity
@stop

@section('content')

    <h1>Create New Capacity</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/capacity', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : ''}}">
                {!! Form::label('cat_id', 'Cat Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('cat_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('cat_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('c_parent') ? 'has-error' : ''}}">
                {!! Form::label('c_parent', 'C Parent: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('c_parent', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('c_parent', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection