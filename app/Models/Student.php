<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    protected $table = 'students';
    
    //to retrive all students
    $students = \App\Models\Student::all();


    //create new student record
    $student = new \App\Models\Student();
    $student->name = 'John Doe';
    $student->email = 'john@example.com';
    $student->save();

    //update student record
    $student\App\Models\Student::find(i); //assuming the student with ID 1 exists
    $student->name ='Updated Name';
    $student->save();

    //delete student record
    $student = \App\Models\Student::find(i); //assuming the student with ID 1 exists
    $student->delete(); 

    use HasFactory;
}
