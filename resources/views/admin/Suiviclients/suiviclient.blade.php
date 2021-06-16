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
                <span>suivi client</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">


    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-danger " href="{{'/suiviclients/pdf/suiviclient'}}">Télécharger</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<a href="{{url('/suiviclients/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter </a>
        </div>
        <div class="card-body">
            <div class="datatable table-responsive">
             
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Numero de requete</th>
        <th scope="col">Date</th>
        <th scope="col">Trimestre</th>
        <th scope="col">Annexe</th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent</th>
        <th scope="col">Nom Complet Visiteur</th>
        <th scope="col">Fonction Visiteur</th>
        <th scope="col">Profil Visiteur</th>
        <th scope="col">Email Visiteur</th>
        <th scope="col">Tel Visiteur</th>
        <th scope="col">ice</th>
        <th scope="col">Patente</th>
        <th scope="col">Raison Social</th>
        <th scope="col">Statut Juridique</th>
        <th scope="col">College</th>
        <th scope="col">Secteur</th>
        <th scope="col"> CA</th>
        <th scope="col"> Pays</th>
        <th scope="col">Ville</th>
        <th scope="col">Adresse</th>
        <th scope="col">Tel Entreprise</th>
        <th scope="col"> Email Entreprise</th>
        <th scope="col"> Nom Dirigeant</th>
        <th scope="col">Responsable</th>
        <th scope="col">Delai Traitement</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Suiviclients as $Suiviclient)
      <tr>
        <td>{{$Suiviclient->id}}</td>
        <td>{{$Suiviclient->date}}</td>
        <td>{{$Suiviclient->trimestre}}</td>
        <td>{{$Suiviclient->annexe}}</td>
        <td>{{$Suiviclient->membre}}</td>
        <td>{{$Suiviclient->adherent}}</td>
        <td>{{$Suiviclient->nom_visiteur}}</td>
        <td>{{$Suiviclient->fonction_visiteur}}</td>
        <td>{{$Suiviclient->profil_visiteur}}</td>
        <td>{{$Suiviclient->email_visiteur}}</td>
        <td>{{$Suiviclient->tel_visiteur}}</td>
        <td>{{$Suiviclient->ice}}</td>
        <td>{{$Suiviclient->patente}}</td>
        <td>{{$Suiviclient->raison_social}}</td>
        <td>{{$Suiviclient->statut_juridique}}</td>
        <td>{{$Suiviclient->college}}</td>
        <td>{{$Suiviclient->secteur}}</td>
        <td>{{$Suiviclient->ca}}</td>
        <td>{{$Suiviclient->pays}}</td>
        <td>{{$Suiviclient->ville}}</td>
        <td>{{$Suiviclient->adresse}}</td>
        <td>{{$Suiviclient->tel_entreprise}}</td>
        <td>{{$Suiviclient->email_entreprise}}</td>
        <td>{{$Suiviclient->nom_dirigeant}}</td>
        <td>{{$Suiviclient->responsable}}</td>
        <td>{{$Suiviclient->delai_traitement}}</td>
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/suiviclients/'.$Suiviclient->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/suiviclients/'.$Suiviclient->id) }}">
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