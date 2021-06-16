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
                <span>Acceuil</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-danger " href="{{'/acceuils/pdf/acceuil'}}">Télécharger</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{url('/acceuils/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter </a>
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
    
        <th scope="col">Date </th>
        <th scope="col">Annexe</th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent </th>
        <th scope="col">Nom Visiteur</th>
        <th scope="col">Prenom Visiteur</th>
        <th scope="col">Fonction Visiteur</th>
        <th scope="col">Profil Visiteur</th>
        <th scope="col">Email Visiteur</th>
        <th scope="col">Tel Visiteur</th>
        <th scope="col">Nom/Raison Sociable</th>
        <th scope="col">Prestation demandee</th>
        <th scope="col">deppartement chargee</th>
        <th scope="col">Responsable en charge</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Acceuils as $acceuil)
      <tr>
      
        <td>{{$acceuil->date}}</td>
        <td>{{$acceuil->annexe}}</td>
        <td>{{$acceuil->membre}}</td>
        <td>{{$acceuil->adherent}}</td>
        <td>{{$acceuil->nom_visiteur}}</td>
        <td>{{$acceuil->prenom_visiteur}}</td>
        <td>{{$acceuil->fonction_visiteur}}</td>
        <td>{{$acceuil->profil_visiteur}}</td>
        <td>{{$acceuil->email_visiteur}}</td>
        <td>{{$acceuil->tel_visiteur}}</td>
        <td>{{$acceuil->raison_social}}</td>
        <td>{{$acceuil->prestation_demandee}}</td>
        <td>{{$acceuil->departement_chargee}}</td>
        <td>{{$acceuil->responsable_chargee}}</td>
      
      
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/acceuils/'.$acceuil->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/acceuils/'.$acceuil->id) }}">
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