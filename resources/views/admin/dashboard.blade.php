{{-- @extends('layouts.app')

@section('title', 'Dashboard')

@section('breadcrumb', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Bienvenue sur le Dashboard de l'Admin</h5>
            </div>
            <div class="card-body">
                <p>Bienvenue {{ auth()->user()->email }} !</p>
                <p>Gérez vos utilisateurs, produits, et plus ici.</p>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<div>
    {{ auth()->user()->email }}
</div>
