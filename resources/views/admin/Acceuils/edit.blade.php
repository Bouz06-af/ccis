@extends('layouts.admin')

@section('content')
<style>
.container-fluid .page-header-content{
    background-image:url("{{asset('/images/cover3.jpg')}}");
    padding: 100px;
}

</style>
<div class="page-header">
    <div class="container-fluid">
        <div class="page-header-content">
            <br><br>
            <h1 class="page-header-title">
                <div class="page-header-icon"><i data-feather="mail"></i></div>
                <span>Modifier une cooperative</span>
            </h1>
            <br>
        </div>
    </div>
</div>

<div class="container-fluid mt-n10">


    <!--Card Primary-->

    <div class="card mb-4">
        <div class="card-header">Modifier la cooperative: </div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <div class="mt-3 card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/acceuils/'.$Acceuil->id.'/update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mt-3 card">
                    <div class="card-body">
                    <div class="mb-3">
    <label for="date" class="form-label">Date :</label>
    <input  class="form-control" type="date" id="date" name="date"
    value="{{old('date',$Acceuil->date ?? null)}}"
       min="2018-01-01" max="2030-12-31">
    @error('date') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="annexe" class="form-label">Annexe :</label>
    <input value="{{old('annexe',$Acceuil->annexe ?? null)}}" type="text" class="form-control" name="annexe" id="annexe">
    @error('annexe') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="membre" class="form-label">Membre :</label>
    <input value="{{old('membre',$Acceuil->membre ?? null)}}" type="text" class="form-control" name="membre" id="membre">
    @error('membre') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adherent" class="form-label">Adherent :</label>
    <input value="{{old('adherent',$Acceuil->adherent ?? null)}}" type="text" class="form-control" name="adherent" id="adherent">
    @error('adherent') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="nom_visiteur" class="form-label">Nom visiteur :</label>
    <input value="{{old('nom_visiteur',$Acceuil->nom_visiteur ?? null)}}" type="text" class="form-control" name="nom_visiteur" id="nom_visiteur">
    @error('nom_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="prenom_visiteur" class="form-label">Prenom visiteur :</label>
    <input value="{{old('prenom_visiteur',$Acceuil->prenom_visiteur ?? null)}}" type="text" class="form-control" name="prenom_visiteur" id="prenom_visiteur">
    @error('prenom_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="fonction_visiteur" class="form-label">fonction visiteur :</label>
    <input value="{{old('fonction_visiteur',$Acceuil->fonction_visiteur ?? null)}}" type="text" class="form-control" name="fonction_visiteur" id="fonction_visiteur">
    @error('fonction_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="profil_visiteur" class="form-label">Profil visiteur :</label>
    <input value="{{old('profil_visiteur',$Acceuil->profil_visiteur ?? null)}}" type="text" class="form-control" name="profil_visiteur" id="profil_visiteur">
    @error('profil_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email_visiteur" class="form-label">Email visiteur :</label>
    <input value="{{old('email_visiteur',$Acceuil->email_visiteur ?? null)}}" type="text" class="form-control" name="email_visiteur" id="email_visiteur">
    @error('email_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel_visiteur" class="form-label">Tel visiteur :</label>
    <input value="{{old('tel_visiteur',$Acceuil->tel_visiteur ?? null)}}" type="text" class="form-control" name="tel_visiteur" id="tel_visiteur">
    @error('tel_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="raison_social" class="form-label">Raison Social  :</label>
    <input value="{{old('raison_social',$Acceuil->raison_social ?? null)}}" type="text" class="form-control" name="raison_social" id="raison_social">
    @error('raison_social') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="prestation_demandee" class="form-label">Prestation demandee :</label>
    <input value="{{old('prestation_demandee',$Acceuil->prestation_demandee ?? null)}}" type="text" class="form-control" name="prestation_demandee" id="prestation_demandee">
    @error('prestation_demandee') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="departement_chargee" class="form-label">Departement Chargee :</label>
    <input value="{{old('departement_chargee',$Acceuil->departement_chargee ?? null)}}" type="text" class="form-control" name="departement_chargee" id="departement_chargee">
    @error('departement_chargee') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="responsable_chargee" class="form-label">Responsable Chargee :</label>
    <input value="{{old('responsable_chargee',$Acceuil->responsable_chargee ?? null)}}" type="text" class="form-control" name="responsable_chargee" id="responsable_chargee">
    @error('responsable_chargee') <span class="text-danger">{{ $message }}</span> @enderror
</div>


                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection