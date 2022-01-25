@extends('layouts.layout')

@section('title', 'Delete Etudiant')

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
        <h2>Delete Etudiant Form</h2>
    </div>

    <div class="row">
        <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Enter the informations:</h4>
        <form class="needs-validation" method="POST" action="{{ route('etudiant.destroy', ['matricule' => $student->matricule]) }}" enctype="multipart/form-data">
            @csrf
            @method('delete')
            <div class="mb-3">
            <label for="address">Matricule</label>
            <input type="text" class="form-control" id="matricule" nom="matricule" placeholder="Ex: 123" required disabled value="{{ $student->matricule }}">
            <div class="invalid-feedback">
                Please enter your Matricule
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="" disabled value="{{ $student->nom }}" required>
                <div class="invalid-feedback">
                Valid first name is required.
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="lastName">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="" disabled value="{{ $student->prenom }}" required>
                <div class="invalid-feedback">
                Valid last name is required.
                </div>
            </div>
            </div>

            <div class="row">

            <div class="col-md-3 mb-3">
                <label for="zip">Code Section</label>
                <input type="text" class="form-control" id="code_s" name="code_s" placeholder="" disabled value="{{ $student->code_s }}" required>
                <div class="invalid-feedback">
                Section required.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Groupe</label>
                <input type="text" class="form-control" id="groupe" name="groupe" name="groupe" value="{{ $student->groupe }}" disabled placeholder="" required>
                <div class="invalid-feedback">
                Groupe required.
                </div>
            </div>
            </div>
                    <button type="submit" class="btn btn-success">Supprimer</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('etudiant.index') }}';">Annuler</button>
        </form>
            </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2022 ALLOUI Abdelraouf</p>
    </footer>
    </div>
</body>
@endsection
