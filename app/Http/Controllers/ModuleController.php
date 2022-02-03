<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.module.index', [
            'modules' => cache()->remember('users', now()->addSeconds(10), function () {
            return Module::all();
        })
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.module.create');
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
            'code_m' => 'required',
            'libelle_m' => 'required',
            'coef' => 'required',
            'code_ens' => 'required'
        ]);

        $module = new Module();

        $module->code_m = $request->code_m;
        $module->libelle_m = $request->libelle_m;
        $module->coef = $request->coef;
        $module->code_ens = $request->code_ens;

        $module->save();

        return redirect()->route('module.index')->with('success', 'module has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show($code_m)
    {
        $module = Module::query()->where('code_m', 'like', "%{$code_m}%")->get()->first();

        return view('dashboard.module.show', ['module' => $module]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code_m)
    {
        $module = Module::find($code_m);

        $module->code_m = $request->code_m;
        $module->libelle_m = $request->libelle_m;
        $module->coef = $request->coef;
        $module->code_ens = $request->code_ens;

        $module->save();

        return redirect()->route('module.index')->with('success', 'module has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy($code_m)
    {
        $module = Module::find($code_m);
        $module->delete();
        return redirect()->route('module.index')->with('success', 'module has been deleted successfully');
    }

    public function deleteView($code_m)
    {
        $module = Module::find($code_m);

        return view('dashboard.module.delete', ['module' => $module]);
    }

    public function search(Request $request)
    {

        $key = trim($request->get('search'));
        $module = Module::find($key);

        return redirect()->route('module.show', [
            'code_m' => $module->code_m
        ]);
    }

    public function searchView()
    {
        return view('dashboard.module.search');
    }
}
