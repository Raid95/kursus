<?php

namespace App\Http\Controllers;

use App\Package;
use App\Course;
use DB;
use Illuminate\Http\Request;

class RegisterCourseController extends Controller
{
    public function index() {
        $data = DB::table('packages')
       ->join('courses', 'courses.course_id', '=', 'packages.course_id')
       ->select('courses.course_name', 'packages.package_name', 'packages.price')
       ->get();
     return view('package', compact('data'));
    }

    public function view() {
       // $course = Course::find(1);
        //$package = $course->packages;
        //dd($package->package_name);

        $package = Package::find(4);
        $course = $package->course;
        dd($course->course_name);
        //dd($package->package_name);

    }
}
