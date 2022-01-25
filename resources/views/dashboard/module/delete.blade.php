@extends('layouts.layout')

@section('title', 'Delete Module')

@section('css')

<link href='{{ asset('css/sb-admin-2.min.css') }}' rel="stylesheet"/>

@endsection

@section('js')
<script src='{{ asset('js/sb-admin-2.min.js') }}'></script>
@endsection


@section('content')

<body class="bg-light">
    <div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('img/usthb_logo.png') }}" alt="" width="120" height="80">
        <h2>Update Module Form</h2>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Enter the informations:</h4>
        <form class="needs-validation" method="POST" action="{{ route('module.destroy', ['code_m' => $module->code_m]) }}">
            @csrf
            @method('delete')
            <div class="mb-3">
            <label for="address">Code</label>
            <input type="text" class="form-control" id="code_m" name="code_m" placeholder="Ex: 123" disabled value="{{ $module->code_m }}" required>
            <div class="invalid-feedback">
                Please enter your code
            </div>
            </div>

            <div class="mb-3">
            <label for="address">Libelle</label>
            <input type="text" class="form-control" id="libelle_m" name="libelle_m" value="{{ $module->libelle_m }}" disabled placeholder="Ex: SI 2" required>
            <div class="invalid-feedback">
                Please enter your Libelle
            </div>
            </div>



            <div class="row">

            <div class="col-md-3 mb-3">
                <label for="zip">Coef</label>
                <input type="text" class="form-control" id="" name="coef" value="{{ $module->coef }}" disabled placeholder="" required>
                <div class="invalid-feedback">
                Coef required.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Code Enseignant</label>
                <input type="text" class="form-control" id="" name="code_ens" value="{{ $module->code_ens }}" disabled placeholder="" required>
                <div class="invalid-feedback">
                Code Enseignant required.
                </div>
            </div>
            </div>
                    <button type="submit" class="btn btn-success">Supprimer</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('module.index') }}';">Annuler</button>
            </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2022 ALLOUI Abdelraouf</p>
    </footer>
    </div>
</body>
@endsection
