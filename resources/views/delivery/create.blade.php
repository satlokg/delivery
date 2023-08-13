@extends('layouts.front')
@section('heading_page','Add New Consign')
@section('title','Add New Consign')
@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('delivery.index')}}" class="btn btn-sm btn-success">Back To Consign List</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form id="addform" action="{{route('delivery.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-sm-6">
              <!-- text input -->
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" value="" placeholder="Enter ..." name="dtitle" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" value="" placeholder="Enter ..." name="dtype"  required>
              </div>
            </div>
            

            <div class="col-sm-6">
              <div class="form-group">
                <label>Take a picture</label>
                <input type="file" name="images[]" multiple accept="image/*;capture=camera" class="form-control" id="imgInp"  required>
              </div>
              <img id="blah" src="#" alt="your image" class="img" />
            </div>
            
            <div class="col-sm-6">
                <div class="form-group">
                  <label>Assign To</label>
                  <select name="user_id" id="user_id" class="form-control">
                    <option value="">--select thana--</option>
                    @foreach (App\Models\User::where('created_by', auth()->user()->id)->get() as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            
          </div>
            
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- /.card-body -->
    </div>
   

@endsection
@section('script')
    <script>
      function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
    </script>
@endsection