<?php

use App\Models\StatusLog;

function statusLog($user_id,$consignment_id,$info){
    $status = new StatusLog();
    $status->user_id=$user_id;
    $status->consignment_id=$consignment_id;
    $status->info=$info;
    $status->save();
}