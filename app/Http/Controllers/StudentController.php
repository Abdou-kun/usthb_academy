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
    public function show($matricule)
    {
        $student = Student::find($matricule);

        return view('dashboard.etudiant.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $matricule)
    {
        $student = Student::find($matricule);

        $student->matricule = $request->matricule;
        $student->nom = $request->nom;
        $student->prenom = $request->prenom;
        $student->groupe = $request->groupe;
        $student->code_s = $request->code_s;

        $student->save();

        return redirect()->route('etudiant.index')->with('success', 'student has been updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($matricule)
    {
        $student = Student::find($matricule);
        $student->delete();

        return redirect()->route('etudiant.index')->with('success', 'student has been deleted successfully');
    }

    public function deleteView($matricule) {

        $student = Student::find($matricule);

        return view('dashboard.etudiant.delete', ['student' => $student]);
    }

    public function search(Request $request) {

        $key = trim($request->get('search'));
        $student = Student::query()->where('matricule', 'like', "%{$key}%")->get()->first();

        return redirect()->route('etudiant.show', [
            'matricule' => $student->matricule
        ]);
    }

    public function searchView() {
        return view('dashboard.etudiant.search');
    }
}
