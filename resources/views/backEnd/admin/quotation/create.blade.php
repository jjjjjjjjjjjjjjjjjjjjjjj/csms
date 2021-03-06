@extends('backLayout.app')
@section('title')
Create new Quotation
@stop

@section('content')

    <h1>Create New Quotation</h1>
    <hr/>

    {!! Form::open(['url' => 'admin/quotation', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
                {!! Form::label('item_id', 'Item Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('item_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
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