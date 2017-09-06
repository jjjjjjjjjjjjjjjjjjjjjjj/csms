@extends('backLayout.app')
@section('title')
Quotation
@stop

@section('content')

    <h1>Quotation <a href="{{ url('admin/quotation/create') }}" class="btn btn-primary pull-right btn-sm">Add New Quotation</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/quotation">
            <thead>
                <tr>
                    <th>ID</th><th>Item Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($quotation as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/quotation', $item->id) }}">{{ $item->item_id }}</a></td>
                    <td>
                        <a href="{{ url('admin/quotation/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/quotation', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbladmin/quotation').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection