@extends('backLayout.app')
@section('title')
Generation
@stop

@section('content')

    <h1>Generation</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $generation->id }}</td> <td> {{ $generation->title }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection