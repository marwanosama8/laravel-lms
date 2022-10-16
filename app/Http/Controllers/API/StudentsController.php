<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function getAllStudents(Request $request)
    {
        $data =  Student::when($request->get('grade_id') != '', function ($query) use ($request) {
            $query->where('grade_id', $request->get('grade_id'));
        })
        ->when($request->get('code') != '',function($query) use ($request) {
            $query->where('code',$request->get('code'));
        })->paginate(3);
        return StudentResource::collection($data);
    }

    public function studentInfo(Request $request)
    {
        $data = Student::find($request->get('id'));
        return StudentResource::make($data);
    }
}
