<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create() {
        return view('courses.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255|unique:courses,title',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'instructor_id' => 'required|integer',
            'status' => 'required|string',
            'image_url' => 'nullable|url',
        ]);

        Course::create($data);
        return redirect()->route('course.index')->with('success', 'Course created successfully.');
    }

    public function show($id) {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function edit($id) {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id) {
        $course = Course::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255|unique:courses,title,' . $id,
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'instructor_id' => 'required|integer',
            'status' => 'required|string',
            'image_url' => 'nullable|url',
        ]);

        $course->update($data);
        return redirect()->route('course.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id) {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Course deleted.');
    }

    public function deleted() {
        $courses = Course::onlyTrashed()->get();
        return view('courses.restore', compact('courses'));
    }

    public function restore($id) {
        $course = Course::withTrashed()->findOrFail($id);
        $course->restore();
        return redirect()->route('course.index')->with('success', 'Course restored.');
    }

    public function forceDelete($id) {
        $course = Course::withTrashed()->findOrFail($id);
        $course->forceDelete();
        return redirect()->route('course.index')->with('success', 'Course permanently deleted.');
    }
}
