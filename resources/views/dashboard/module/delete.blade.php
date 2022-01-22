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
        <h2>Delete Module Form</h2>
    </div>

    <div class="row">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group my-4">
                <input type="text" class="form-control bg-white border-0 small" placeholder="Search with Code ..."
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
            <label for="address">Code</label>
            <input type="text" class="form-control" id="code" placeholder="Ex: 123" required>
            <div class="invalid-feedback">
                Please enter your code
            </div>
            </div>

            <div class="mb-3">
            <label for="address">Libelle</label>
            <input type="text" class="form-control" id="code" placeholder="Ex: SI 2" required>
            <div class="invalid-feedback">
                Please enter your Libelle
            </div>
            </div>



            <div class="row">

            <div class="col-md-3 mb-3">
                <label for="zip">Coef</label>
                <input type="text" class="form-control" id="" placeholder="" required>
                <div class="invalid-feedback">
                Coef required.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="zip">Code Enseignant</label>
                <input type="text" class="form-control" id="" placeholder="" required>
                <div class="invalid-feedback">
                Code Enseignant required.
                </div>
            </div>
            </div>
        </form>
                    <button type="button" class="btn btn-success" onclick="window.location.href='{{ route('module.delete') }}';">Supprimer</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('module.show') }}';">Annuler</button>
            </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2022 ALLOUI Abdelraouf</p>
    </footer>
    </div>
</body>
@endsection
