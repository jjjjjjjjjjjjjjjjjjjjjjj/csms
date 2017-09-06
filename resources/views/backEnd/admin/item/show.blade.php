@extends('backLayout.app')
@section('title')
Item
@stop

@section('content')

    <h1>Item</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Body</th><th>Cat Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $item->id }}</td> <td> {{ $item->title }} </td><td> {{ $item->body }} </td><td> {{ $item->cat_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection