<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GradeResource;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function getGradeIds()
    {
        return GradeResource::collection(Grade::where('active',1)->get());
    }
}
