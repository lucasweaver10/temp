<?php

namespace App\Http\Controllers;

use App\Course;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
   public function index()
    {
      $courses = Course::all();
      return view('courses.index', ['courses' => $courses ]);
    }

    public function show(Course $course)
    {
      return view('courses.show', compact ('course'));
    }

    public function create()
    {
      return view('courses.create');
    }

    public function store()
    {
      $attributes = request()->validate([
        'title' => 'required',
        'description' => 'required'
          ]);
      Course::create($attributes);
      return redirect('/courses');
    }

    public function edit(Course $course)
        {
          return view('courses.edit', compact ('course'));
        }

    public function update(Course $course)
        {
           $course->update(request(['title', 'description']));
           return redirect('/courses');
        }

    public function destroy(Course $course)
        {
           $course->delete();
           return redirect('/courses');
        }

}
