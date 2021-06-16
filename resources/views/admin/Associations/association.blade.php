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
            <h1 class="page-header-title">
              <br><br><br>
                <div class="page-header-icon"><i data-feather="briefcase"></i></div>
                <span>Liste des Associations</span>
            </h1>
           
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">
    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-danger " href="{{'/associations/pdf/association'}}">Télécharger la liste des Associations</a>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{url('/associations/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter une Association</a>
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
        <th scope="col">#</th>
        <th scope="col">Nom Association</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col">Adresse</th>
        <th scope="col">President</th>
        <th scope="col">Ville</th>
        <th scope="col">Activitee</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Associations as $association)
      <tr>
        <th scope="row">{{$association->id}}</th>
        <td>{{$association->nom}}</td>
        <td>{{$association->tel}}</td>
        <td>{{$association->email}}</td>
        <td>{{$association->adresse}}</td>
        <td>{{$association->president}}</td>
        <td>{{$association->ville}}</td>
        <td>{{$association->activite}}</td>
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/associations/'.$association->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/associations/'.$association->id) }}">
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