<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreStudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $query = Student::query();

        // Tìm kiếm theo tên
        if ($request->filled('keyword')) {
            $query->where('name', 'like', '%' . $request->keyword . '%');
        }

        // Sắp xếp theo tên
        $sort = $request->get('sort', 'asc');

        if (!in_array($sort, ['asc', 'desc'])) {
            $sort = 'asc';
        }

        $students = $query
            ->orderBy('name', $sort)
            ->paginate(5)
            ->withQueryString();

        return view('students.index', compact('students', 'sort'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request)
    {
        Student::create($request->validated());

        return redirect()
            ->route('students.index')
            ->with('success', 'Thêm sinh viên thành công.');
    }
}
