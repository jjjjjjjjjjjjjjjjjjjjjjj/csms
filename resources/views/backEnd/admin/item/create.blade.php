@extends('backLayout.app')
@section('title')
Create new Item
@stop

@section('content')

    <h1>Create New Item</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/item', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                {!! Form::label('body', 'Body: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : ''}}">
                {!! Form::label('cat_id', 'Cat Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('cat_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('cat_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('generation_id') ? 'has-error' : ''}}">
                {!! Form::label('generation_id', 'Generation Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('generation_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('generation_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('capacity_id') ? 'has-error' : ''}}">
                {!! Form::label('capacity_id', 'Capacity Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('capacity_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('capacity_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('capacity_sub_cat_id') ? 'has-error' : ''}}">
                {!! Form::label('capacity_sub_cat_id', 'Capacity Sub Cat Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('capacity_sub_cat_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('capacity_sub_cat_id', '<p class="help-block">:message</p>') !!}
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