@extends('layouts.front')
@section('heading_page','Consign List')
@section('title','Consign List')
@section('content')

<div class="card">
    <div class="card-header">
        @if(auth()->user()->role=='admin')
        <a href="{{route('delivery.create')}}" class="btn btn-sm btn-success">Add New</a>
        @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="datatb" class="table table-bordered table-striped" style="width: 100%;">
            <thead>
              <tr>
                <th>Sr</th>
                <th>Title</th>
                <th>Type </th>
                <th>Assign To</th>
                <th>Issued By</th>
                <th>Issued Date</th>
                <th>Last update</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
              <tbody>
               
              </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    </div>
   

@endsection
@section('script')
    <script>
        var table = $('#datatb').DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            dom: 'Bfrtip',
            retrieve: true,
            processing: true,
            serverSide: true,
            // responsive:true,
            ajax: "{{ route('delivery.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'dtitle', name: 'dtitle'},
                {data: 'dtype', name: 'dtype'},
                {data: 'user_id', name: 'user_id'},
                {data: 'created_by', name: 'created_by'},
                {data: 'created_at', name: 'created_at'},
                {data: 'updated_at', name: 'updated_at'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action'},
                
                ],
        
        });
    </script>
@endsection