@extends('backLayout.app')
@section('title')
Item
@stop

@section('content')

    <h1>Item <a href="{{ url('admin/item/create') }}" class="btn btn-primary pull-right btn-sm">Add New Item</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/item">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Body</th><th>Cat Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($item as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/item', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->body }}</td><td>{{ $item->cat_id }}</td>
                    <td>
                        <a href="{{ url('admin/item/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/item', $item->id],
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
        $('#tbladmin/item').DataTable({
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