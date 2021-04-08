<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class InfoController extends \App\Http\Controllers\AuthController
{
    public function getPrivateData(){
       return $this->formatReturn('200','ok',['video'=>'ABC.rmvb']);
    }
}
