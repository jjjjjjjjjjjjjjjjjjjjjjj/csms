@extends('backLayout.app')
@section('title')
Generation
@stop

@section('content')

    <h1>Generation <a href="{{ url('admin/generation/create') }}" class="btn btn-primary pull-right btn-sm">Add New Generation</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbladmin/generation">
            <thead>
                <tr>
                    <th>ID</th><th>Title</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($generation as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('admin/generation', $item->id) }}">{{ $item->title }}</a></td>
                    <td>
                        <a href="{{ url('admin/generation/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/generation', $item->id],
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
        $('#tbladmin/generation').DataTable({
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