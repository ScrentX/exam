<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function view()
    {
        $students = DB::table('users as u')
        ->join('students as s', 'u.id', '=', 's.user_id')
        ->join('grades as g', 's.id', '=', 'g.student_id')
        ->join('departments as d', 'd.student_id', '=', 'd.id')
        ->select(
            's.id as student_id',
            's.first_name',
            's.last_name',
            's.middle_name',
            'd.departments',
            'g.midterm_grade',
            'g.final_grade'
        )
        ->get();

        return view('table', compact('students'));
    }
}