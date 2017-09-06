@extends('backLayout.app')
@section('title')
Capacity
@stop

@section('content')

    <h1>Capacity <a href="{{ url('admin/capacity/create') }}" class="btn btn-primary pull-right btn-sm">Add New Capacity</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/capacity">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Cat Id</th><th>C Parent</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($capacity as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/capacity', $item->id) }}">{{ $item->title }}</a></td><td>{{ $item->cat_id }}</td><td>{{ $item->c_parent }}</td>
                    <td>
                        <a href="{{ url('admin/capacity/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/capacity', $item->id],
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
        $('#tbladmin/capacity').DataTable({
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