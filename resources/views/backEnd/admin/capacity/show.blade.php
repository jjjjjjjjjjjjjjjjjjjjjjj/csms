@extends('backLayout.app')
@section('title')
Capacity
@stop

@section('content')

    <h1>Capacity</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Cat Id</th><th>C Parent</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $capacity->id }}</td> <td> {{ $capacity->title }} </td><td> {{ $capacity->cat_id }} </td><td> {{ $capacity->c_parent }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection