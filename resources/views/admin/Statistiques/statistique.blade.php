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
                <span>Liste des Statistiques</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">
   <a href="{{url('/statistiques/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter un Statistique</a>
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
      
        <th scope="col">id</th>
        <th scope="col">Adherent</th>
        <th scope="col">Tel</th>
        <th scope="col">Besoin</th>
        <th scope="col">document</th>
        <th scope="col">Informations</th>
        <th scope="col">Acceuil</th>
        <th scope="col">Annee</th>
        <th scope="col">Mois</th>
      
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Statistique as $statistique)
      <tr>
        
        <td>{{$statistique->id}}</td>
        <td>{{$statistique->adherent}}</td>
        <td>{{$statistique->Tel}}</td>
        <td>{{$statistique->besoin}}</td>
        <td>{{$statistique->document}}</td> 
        <td>{{$statistique->infos}}</td>
        <td>{{$statistique->acceuil}}</td>
        <td>{{$statistique->annee}}</td>
        <td>{{$statistique->mois}}</td>

        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/statistiques/'.$statistique->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/statistiques/'.$statistique->id) }}">
                
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