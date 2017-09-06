@extends('backLayout.app')
@section('title')
Edit Category
@stop

@section('content')

    <h1>Edit Category</h1>
    <hr/>

    {!! Form::model($category, [
        'method' => 'PATCH',
        'url' => ['admin/categories', $category->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Description') ? 'has-error' : ''}}">
                {!! Form::label('Description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('Description', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('Description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : ''}}">
            {!! Form::label('parent_id', 'Parent : ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::select ('parent_id', $allcategory->prepend('No Parent','0') , 2 , ['id' =>'myselect','class'=> 'form-control'])!!}
                
                {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('status', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('status', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
         <div class="col-sm-offset-3 col-sm-3">
         <a href="{{URL::to('/admin/categories')}}">Cancel </a>
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