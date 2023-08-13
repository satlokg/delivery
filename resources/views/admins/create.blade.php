@extends('layouts.front')
@section('heading_page','Add New Admin')
@section('title','Add New Admin')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admins.index')}}" class="btn btn-sm btn-success">Back To Admin List</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form id="addform" action="{{route('admins.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="admin" name="role">
        <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="" placeholder="Enter ..." name="name" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" value="" placeholder="Enter ..." name="email"  required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="number" max="10" class="form-control" value="" placeholder="Enter ..." name="phone"  required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>PNO No.</label>
                <input type="text" class="form-control" value="" placeholder="Enter ..." name="pno_no"  required>
              </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" value="" placeholder="Enter ..." name="password"  required>
                </div>
              </div>
            
          </div>
            
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
    </div>
   

@endsection
