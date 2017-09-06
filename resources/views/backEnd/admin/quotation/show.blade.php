@extends('backLayout.app')
@section('title')
Quotation
@stop

@section('content')

    <h1>Quotation</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Item Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $quotation->id }}</td> <td> {{ $quotation->item_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection