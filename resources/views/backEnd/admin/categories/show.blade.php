@extends('backLayout.app')
@section('title')
Category
@stop

@section('content')

    <h1>Category</h1>
    <div class="container">
        <a href="{{URL::to('/admin/categories')}}">Back </a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Description</th><th>Parent Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $category->id }}</td> <td> {{ $category->title }} </td><td> {{ $category->Description }} </td><td> {{ $category->parent_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection