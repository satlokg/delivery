<?php

namespace App\Http\Controllers;

use App\Models\ConsignmentAssign;
use App\Models\ConsignmentUpdate;
use App\Models\Models\Consignment;
use App\Models\Models\ConsignmentImage;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Str;
use Notification;
use App\Notifications\LogNotification;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Stevebauman\Location\Facades\Location;

class DeliveryController extends Controller
{
    public function index(Request $req){
        if ($req->ajax()) {
            $data = Consignment::where('created_by',auth()->user()->id)->orWhere('user_id',auth()->user()->id)->latest()->get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.route('delivery.show',['delivery'=>$row->id]).'" class="btn btn-info btn-sm">View</a>';
                       return $btn;
                    })
                    ->addColumn('user_id', function($row){
                        return $row->getUser($row->user_id);
                    })
                    ->addColumn('created_at', function($row){
                        return $row->created_at->diffForHumans();
                    })
                    ->addColumn('updated_at', function($row){
                        return $row->updated_at->diffForHumans();
                    })
                    ->addColumn('created_by', function($row){
                        return $row->getUser($row->created_by);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('delivery.index');
    }
    public function delv(Request $req){
        // dd(User::find(auth()->user()->id)->consignments);
        if ($req->ajax()) {
            return DataTables::of(User::find(auth()->user()->id)->consignments->sort())
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="'.route('delivery.show',['delivery'=>$row->id]).'" class="btn btn-info btn-sm">View</a>';
                       return $btn;
                    })
                    ->addColumn('user_id', function($row){
                        return $row->getUser($row->user_id);
                    })
                    ->addColumn('created_at', function($row){
                        return $row->created_at->diffForHumans();
                    })
                    ->addColumn('updated_at', function($row){
                        return $row->updated_at->diffForHumans();
                    })
                    ->addColumn('created_by', function($row){
                        return $row->getUser($row->created_by);
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('delivery.delv');
    }
    public function create()
    {
        return view('delivery.create');
    }

    public function store(Request $request)
    {
        $consignment = new Consignment();
        $consignment->dtitle=$request->dtitle;
        $consignment->dtype=$request->dtype;
        $consignment->user_id=$request->user_id;
        $consignment->created_by=auth()->user()->id;
        $consignment->consignment_uuid = Str::uuid()->toString();
        if($consignment->save()){
            foreach ($request->file('images') as $imagefile) { //dd($imagefile);
                $image = new ConsignmentImage();
                $destinationPath = 'uploads';
                $myimage = time().$imagefile->getClientOriginalName();
                $imagefile->move(public_path($destinationPath), $myimage);
                $image->path = $myimage;
                $image->consignment_id = $consignment->id;
                $image->save();
              }
            $ca=new ConsignmentAssign();
            $ca->consignment_id=$consignment->id;
            $ca->user_id=$consignment->user_id;
            if($ca->save()){
            statusLog($consignment->user_id,$consignment->id,auth()->user()->name.' assign to '.$consignment->getUser($consignment->user_id));
            $userSchema = User::find(auth()->user()->id);
  
             $offerData = [
            
                'info' => $consignment->id,auth()->user()->name.' assign to '.$consignment->getUser($consignment->user_id),
                'thanks' => 'Thank you',
                'title' => 'Status update for delivery',
                'offerUrl' => url('/'),
                'consinment_id' => $consignment->uuid
            ];
  
        FacadesNotification::send($userSchema, new LogNotification($offerData));
        return redirect()->back();
       }else{
            return redirect()->back();
       }
        }

    
    }
    public function show($id)
    {
        $data = Consignment::find($id);
        return view('delivery.show', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $consignment=new Consignment();
    //    $res= Consignment::where('id',$id)->update(['user_id'=>$request->user_id]);
       $ca=new ConsignmentAssign();
            $ca->consignment_id=$id;
            $ca->user_id=$request->user_id;
            $ca->save();
       if($ca){
        // $res= Consignment::where('id',$id)->update(['status'=>'accepted']);
        statusLog(auth()->user()->id,$id,auth()->user()->name.' assign to '.$consignment->getUser($request->user_id));
        $userSchema = User::find(auth()->user()->id);
  
        $offerData = [
            
            'info' => $consignment->id,auth()->user()->name.' assign to '.$consignment->getUser($request->user_id),
            'thanks' => 'Thank you',
            'title' => 'Status update for delivery',
            'offerUrl' => url('/'),
            'consinment_id' => $consignment->uuid
        ];
  
        FacadesNotification::send($userSchema, new LogNotification($offerData));
            return redirect()->back();
       }else{
            return redirect()->back();
       }
    }

    public function statusUpdate(Request $request, $id)
    {
        $consignment=new Consignment();
       $res= Consignment::where('id',$id)->update(['status'=>$request->status]);
   
       if($res){
        // $res= Consignment::where('id',$id)->update(['status'=>'accepted']);
        statusLog(auth()->user()->id,$id,auth()->user()->name.' change status to '.$request->status);
        $userSchema = User::find(auth()->user()->id);
  
        $offerData = [
            
            'info' => $consignment->id,auth()->user()->name.' change status to '.$request->status,
            'thanks' => 'Thank you',
            'title' => 'Status update for delivery',
            'offerUrl' => url('/'),
            'consinment_id' => $consignment->uuid
        ];
  
        FacadesNotification::send($userSchema, new LogNotification($offerData));
            return redirect()->back();
       }else{
            return redirect()->back();
       }
    }
    public function finalUpdate(Request $request, $id)
    {
         $ip = $request->ip(); /*Dynamic IP address */
        // $ip = '162.159.24.227'; /* Static IP address */
        $currentUserInfo = Location::get($ip);
        $consignment=Consignment::find($id);
        $cu = new ConsignmentUpdate();
        $cu->consignment_id=$id;
        $cu->info=$request->info;
        $cu->ip=$ip;
        $cu->late=$currentUserInfo->latitude;
        $cu->longi=$currentUserInfo->longitude;
        $destinationPath = 'uploads';
        $myimage = time().$request->file('images')->getClientOriginalName();
        $request->file('images')->move(public_path($destinationPath), $myimage);
        $cu->image = $myimage;
       if($cu->save()){

        // $res= Consignment::where('id',$id)->update(['status'=>'accepted']);
        statusLog(auth()->user()->id,$id,auth()->user()->name.' delivered to destination'.$consignment->getUser($request->user_id));
        $userSchema = User::find(auth()->user()->id);
  
        $offerData = [
            
            'info' => $consignment->id,auth()->user()->name.' delivered to destination'.$consignment->getUser($request->user_id),
            'thanks' => 'Thank you',
            'title' => 'Status update for delivery',
            'offerUrl' => url('/'),
            'consinment_id' => $consignment->uuid
        ];
  
        FacadesNotification::send($userSchema, new LogNotification($offerData));
        $res= Consignment::where('id',$id)->update(['status'=>'complete']);
            return redirect()->back();
       }else{
            return redirect()->back();
       }
    }
    
}
