@extends('layouts.front')
@section('heading_page','Add New Vahak')
@section('title','Add New Vahak')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('vahaks.index')}}" class="btn btn-sm btn-success">Back To Vahak List</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form id="addform" action="{{route('admins.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="vahak" name="role">
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
                <input type="email" class="form-control" value="" placeholder="Enter ..." name="email" required >
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="number"   class="form-control" value="" placeholder="Enter ..." name="phone" required >
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>PNO No.</label>
                <input type="text" class="form-control" value="" placeholder="Enter ..." name="pno_no" required >
              </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" value="" placeholder="Enter ..." name="password" required >
                </div>
              </div>
            
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
    </div>
   

@endsection
