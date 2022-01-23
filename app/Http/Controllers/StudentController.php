<?php

namespace App\Http\Controllers;

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
        return view('dashboard.etudiant.index', [
            'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.etudiant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'groupe' => 'required',
            'code_s' => 'required'
        ]);

        $student = new Student();

        $student->matricule = $request->matricule;
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->groupe = $request->groupe;
        $student->code_s = $request->code_s;

        $student->save();

        return redirect()->route('etudiant.index')->with('success', 'Student has been created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('etudient.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('dashboard.etudiant.update', [
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricule)
    {
        $request->validate([
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'groupe' => 'required',
            'code_s' => 'required'
        ]);

        $student = Student::find($matricule);

        $student->matricule = $request->matricule;
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->groupe = $request->groupe;
        $student->code_s = $request->code_s;

        return redirect()->route('etudiant.index')->with('success', 'student has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('etudiant.index')->with('success', 'student has been deleted successfully');
    }

    public function deleteView() {
        return view('dashboard.etudiant.delete');
    }
}
