<?php

namespace App\Models\Models;

use App\Models\ConsignmentUpdate;
use App\Models\StatusLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignment extends Model
{
    use HasFactory;
public function images()
  {
   return $this->hasMany(ConsignmentImage::class, 'consignment_id');
  }
public function getUser($id){
    if($id>0)
        return User::find($id)->name;
}
public function users()
{
    return $this->belongsToMany(User::class, 'consignment_assigns');
}

public function statuslog()
  {
   return $this->hasMany(StatusLog::class, 'consignment_id');
  }
  public function dellog()
  {
   return $this->hasMany(ConsignmentUpdate::class, 'consignment_id');
  }
}
