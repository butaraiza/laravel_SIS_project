<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        
        return response()->json([
            'status' => 200,
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->school_id = $request->input('school_id');
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->course = $request->input('course');
        $student->year = $request->input('year');
        $student->section = $request->input('section');
        $student->save();

        return response()->json([
            'status' => 200,
            'message' => 'Adding Student Successfully',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return response()->json([
            'status' => 200,
            'student' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->school_id = $request->input('school      $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->course = $request->input('course');
        $student->year = $request->input('year');
        $student->section = $request->input('section');
        $student->update();

        return response()->json([
            'status' => 200,
            'message' => 'Adding Student Successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Deleting student successfully',
        ]);
    }
}
