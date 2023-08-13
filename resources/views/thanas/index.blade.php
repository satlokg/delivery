@extends('layouts.front')
@section('heading_page','Thana List')
@section('title','Thana List')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('thanas.create')}}" class="btn btn-sm btn-success">Add New</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="datatb" class="table table-bordered table-striped" style="width: 100%;">
            <thead>
              <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Email </th>
                <th>Phone</th>
                <th>PNO No.</th>
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
            ajax: "{{ route('admins.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'phone', name: 'phone'},
                {data: 'pno_no', name: 'court_name'},
                {data: 'action', name: 'action'},
                
                ],
        
        });
    </script>
@endsection