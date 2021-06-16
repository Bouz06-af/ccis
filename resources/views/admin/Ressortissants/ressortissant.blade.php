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
                <div class="page-header-icon"><i data-feather="tool"></i></div>
                <span>Liste des Ressortissants</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-danger " href="{{'/ressortissants/pdf/ressortissant'}}">Télécharger</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{url('/ressortissants/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter un Ressortissant</a>
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
        <th scope="col">Nom Complet</th>
        <th scope="col">Fonction</th>
        <th scope="col">Profil</th>
        <th scope="col">Email</th>
        <th scope="col">Tel</th>
        <th scope="col">ICE</th>
        <th scope="col">Patente/if</th>
        <th scope="col">Raison Sociale</th>
        <th scope="col">Statut Juridique</th>
        <th scope="col">College</th>
        <th scope="col">Secteur</th>
        <th scope="col">Effectif</th>
        <th scope="col">CA</th>
        <th scope="col">Pays</th>
        <th scope="col">Ville</th>
        <th scope="col">Adresse</th>
        <th scope="col">Tel entreprise</th>
        <th scope="col">email entreprise</th>
        <th scope="col">Nom dirigeant</th>
        
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Ressortissants as $ressortissant)
      <tr>
        
        <td>{{$ressortissant->annexe}}</td>
        <td>{{$ressortissant->membre}}</td>
        <td>{{$ressortissant->adherent}}</td>
        <td>{{$ressortissant->nom_complet}}</td>
        <td>{{$ressortissant->fonction}}</td> 
        <td>{{$ressortissant->profil}}</td>
        <td>{{$ressortissant->email}}</td>
        <td>{{$ressortissant->tel}}</td>
        <td>{{$ressortissant->ice}}</td>
        <td>{{$ressortissant->patente}}</td>
        <td>{{$ressortissant->raison_social}}</td> 
        <td>{{$ressortissant->statut_juridique}}</td>
        <td>{{$ressortissant->college}}</td>
        <td>{{$ressortissant->secteur}}</td>
        <td>{{$ressortissant->effectif}}</td>
        <td>{{$ressortissant->ca}}</td>
        <td>{{$ressortissant->pays}}</td>
        <td>{{$ressortissant->ville}}</td>
        <td>{{$ressortissant->adresse}}</td> 
        <td>{{$ressortissant->tel_entreprise}}</td>
        <td>{{$ressortissant->email_entreprise}}</td>
        <td>{{$ressortissant->nom_complet_dirigeant}}</td>
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/ressortissants/'.$ressortissant->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/ressortissants/'.$ressortissant->id) }}">
                
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