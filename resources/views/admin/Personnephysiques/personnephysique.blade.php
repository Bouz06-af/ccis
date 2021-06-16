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
                <div class="page-header-icon"><i data-feather="info"></i></div>
                <span>Liste des Personnes Physiques</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-danger " href="{{'/personnephysiques/pdf/personnephysique'}}">Télécharger</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{url('/personnephysiques/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter une Personne Physique</a>
        </div>
        <div class="card-body">
            <div class="datatable table-responsive">
            @if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session()->get('status')}}.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<table class="table table-bordered">
    <thead>
      <tr>
      
        <th scope="col">Annexe</th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Fonction</th>
        <th scope="col">Profil</th>
        <th scope="col">Email</th>
        <th scope="col">Tel</th>
        <th scope="col">Raison Sociale</th>
        <th scope="col">Statut Juridique</th>
        <th scope="col">College</th>
        <th scope="col">Secteur</th>
        <th scope="col">Activite</th>
        <th scope="col">Effectif</th>
        <th scope="col">CA</th>
        <th scope="col">Ville</th>
        <th scope="col">Adresse</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Personnephysiques as $personnephysique)
      <tr>
        
        <td>{{$personnephysique->annexe}}</td>
        <td>{{$personnephysique->membre}}</td>
        <td>{{$personnephysique->adherent}}</td>
        <td>{{$personnephysique->nom}}</td>
        <td>{{$personnephysique->prenom}}</td>
        <td>{{$personnephysique->fonction}}</td> 
        <td>{{$personnephysique->profil}}</td>
        <td>{{$personnephysique->email}}</td>
        <td>{{$personnephysique->tel}}</td>
        <td>{{$personnephysique->raison_social}}</td> 
        <td>{{$personnephysique->statut_juridique}}</td>
        <td>{{$personnephysique->college}}</td>
        <td>{{$personnephysique->secteur}}</td>
        <td>{{$personnephysique->activite}}</td> 
        <td>{{$personnephysique->effectif}}</td>
        <td>{{$personnephysique->ca}}</td>
        <td>{{$personnephysique->ville}}</td>
        <td>{{$personnephysique->adresse}}</td> 
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/personnephysiques/'.$personnephysique->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/personnephysiques/'.$personnephysique->id) }}">
                
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
              </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection