<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    // Using Query builder
    // public function index(){
    //     $students = DB::table('students')->get(); 
    //     return view('home',['students'=>$students]);
    // }

    // public function create(Request $request){
    //     DB::table('students')->insert([
    //         'name'=> $request->name,
    //         'city'=> $request->city,
    //         'marks'=> $request->marks,
    //     ]);
    //     return redirect(route('index'))->with('status','Student Added Successfully!');
    // }

    // public function edit($id){
    //     $student = DB::table('students')->find($id);
    //     return view('editform',['student'=>$student]);
    // }

    // public function update(Request $request, $id){
    //     $student = DB::table('students')->where('id',$id)->update([
    //         'name'=> $request->name,
    //         'city'=> $request->city,
    //         'marks'=> $request->marks,
    //     ]);
    //     return redirect(route('index'))->with('status','Student Updated Successfully!');
    // }
    // public function destroy($id){
    //     DB::table('students')->where('id',$id)->delete();
    //     return redirect(route('index'))->with('status','Student Deleted Successfully!');

    // }

    //using Eloquent Model
    public function index(){
        $students = Student::all();
        return view('/student/home',['students'=>$students]);
    }

    public function create(Request $request){
        
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'city' => 'required|max:255',
            'marks' => 'required|numeric',
        ]);
        $student = Student::create($storeData);


        // $student = new Student;
        // $student->name = $request->name;
        // $student->city = $request->city;
        // $student->marks = $request->marks;
        // $student->save();
        return redirect(route('index'))->with('status','Student Added Successfully!');
    }

    public function edit($id){
        // $student = Student::findOrFail($id);
        $student = Student::find($id);
        return view('/student/editform',['student'=>$student]);
    }

    public function update(Request $request, $id){
        // $updateData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'phone' => 'required|numeric',
        //     'password' => 'required|max:255',
        // ]);
        // Student::whereId($id)->update($updateData);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->city = $request->city;
        $student->marks = $request->marks;
        $student->save();
        return redirect(route('index'))->with('status','Student Updated Successfully!');
    }
    public function destroy($id){
        // $student = Student::findOrFail($id);
        // $student->delete();

        Student::destroy($id);
        return redirect(route('index'))->with('status','Student Deleted Successfully!');

    }
}
