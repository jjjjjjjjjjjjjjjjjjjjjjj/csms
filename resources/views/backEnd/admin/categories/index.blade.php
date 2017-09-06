@extends('backLayout.app')
@section('title')
Category
@stop

@section('content')

    <h1>Categories <a href="{{ url('admin/categories/create') }}" class="btn btn-primary pull-right btn-sm">Add New Category</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/categories">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Description</th><th>Parent Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/categories', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->Description }}</td><td>{{ $item->parent_id }}</td>
                    <td>
                        <a href="{{ url('admin/categories/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/categories', $item->id],
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
        alert("done ");
        $('#tbladmin/categories').DataTable({
            columnDefs: [{
                targets: [0],
                visible: true,
                searchable: true
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection