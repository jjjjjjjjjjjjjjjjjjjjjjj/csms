@extends('backLayout.app')
@section('title')
Country
@stop

@section('content')

    <h1>Country</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $country->id }}</td> <td> {{ $country->name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection