@extends('layouts.layout')

@section('title', 'Create Enseignant')

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
        <h2>Create Etudiant Form</h2>
    </div>

    <div class="row">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group my-4">
                <input type="text" class="form-control bg-white border-0 small" placeholder="Search with Matricule ..."
                                aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Enter the informations:</h4>
        <form class="needs-validation" novalidate>
            <div class="mb-3">
            <label for="address">Matricule</label>
            <input type="text" class="form-control" id="code" placeholder="Ex: 123" required>
            <div class="invalid-feedback">
                Please enter your Matricule
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                Valid first name is required.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                Valid last name is required.
                </div>
            </div>
            </div>

            <div class="row">

            <div class="col-md-3 mb-3">
                <label for="zip">Section</label>
                <input type="text" class="form-control" id="section" placeholder="" required>
                <div class="invalid-feedback">
                Section required.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Groupe</label>
                <input type="text" class="form-control" id="groupe" placeholder="" required>
                <div class="invalid-feedback">
                Groupe required.
                </div>
            </div>
            </div>
                    <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('enseignant.create') }}';">Ajouter</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('etudiant.show') }}';">Annuler</button>
            </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2022 ALLOUI Abdelraouf</p>
    </footer>
    </div>
</body>
@endsection
