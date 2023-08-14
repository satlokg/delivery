@extends('layouts.front')
@section('heading_page','Add New Consign')
@section('title','Add New Consign')
@section('content')
@section('style')
    <style>
        ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 0;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: -9px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
    </style>
@endsection
<div class="card">
    <div class="card-header">
        @if(auth()->user()->role=='thana')
        <form id="addform" action="{{route('delivery.update',['delivery'=>$data->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="col-sm-6">
        <a href="{{route('delivery.index')}}" class="btn btn-sm btn-success">Back To Consign List</a>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
              <label>Assign To Patra Vahak</label>
              <select name="user_id" id="user_id" class="form-control">
                <option value="">--Select Patra Vahak--</option>
                @foreach (App\Models\User::where('created_by', auth()->user()->id)->get() as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-success">Submit</button>
        
          </div>
        </form>
        @elseif(auth()->user()->role=='vahak')
        <form id="addform" action="{{route('delivery.status.update',['delivery'=>$data->id])}}" method="POST" enctype="multipart/form-data">
            {{-- @method('PUT') --}}
            @csrf
            <div class="col-sm-6">
            <a href="{{route('delivery.index')}}" class="btn btn-sm btn-success">Back To Consign List</a>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                <label>Change Status</label>
                <select name="status" id="user_id" class="form-control" required>
                    <option value="">--Select Status--</option>
                        <option value="transit">transit</option>
                        <option value="accepted">accepted</option>
                        <option value="reject">reject</option>
                        
                </select>
                </div>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-success">Submit</button>
            
            </div>
        </form>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Final Submit
          </button>
        @endif
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form id="addform" action="{{route('delivery.final.update',['delivery'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                {{-- @method('PUT') --}}
                @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Fill The Form For Final Submission</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Take a picture</label>
                    <input type="file" name="images" accept="image/*;capture=camera" class="form-control" id="imgInp" required>
                  </div>
                  <img id="blah" src="#" alt="your image" class="img" />
                <div class="form-group">
                <label>Change Status</label>
                <textarea class="form-control" name="info" required></textarea>
                </div>
                   
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-12">
                <div class="wrap">
                    <div class="ico-wrap">
                        {{-- <span class="mbr-iconfont fa-volume-up fa"></span> --}}
                    </div>
                    <div>
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Consignment<span>Detail <b>Status:</b>{{$data->status}}</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">{{$data->dtitle}}</p>
                        <p class="mbr-fonts-style text1 mbr-text display-6">{{$data->dtype}}</p>
                        <p class="mbr-fonts-style text1 mbr-text display-6">{{$data->created_by}}</p>
                        <p class="mbr-fonts-style text1 mbr-text display-6">{{$data->created_at}}</p>
                        <p class="mbr-fonts-style text1 mbr-text display-6">{{$data->updated_at}}</p>

                    </div>
                </div>
                </div>
                @foreach($data->images as $img)
                    <div class="col-sm-12">
                        <div class="row">
                        <img src="{{ asset('uploads/'.$img->path) }}" class="img img-thumbnail">
                    </div>
                    </div>
                @endforeach
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h4>Transit Status</h4>
                        <ul class="timeline">
                            @if($data->dellog)
                            @foreach($data->dellog->sort() as $slog)
                            <li>
                                <b href="#">Delivery Status (done)</b>
                                <small >{{$slog->created_at->diffForHumans()}}</small>
                                <p>{{$slog->info}}</p>
                                <p>Latitute-{{$slog->lati}} longitude-{{$slog->longi}}</p>
                                <img src="{{ asset('uploads/'.$slog->image) }}" class="img img-thumbnail">
                            </li>
                            @endforeach
                            @endif
                           @foreach($data->statuslog->sort() as $slog)
                            <li>
                                <small >{{$slog->created_at->diffForHumans()}}</small>
                                <p>{{$slog->info}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
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