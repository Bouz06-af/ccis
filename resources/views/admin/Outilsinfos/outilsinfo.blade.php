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
                <div class="page-header-icon"><i data-feather="book-open"></i></div>
                <span>Liste des chambres</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">



    <div class="card mb-4">
        <div class="card-header">
        <a class="btn btn-danger " href="{{'/outilsinfos/pdf/outilsinfo'}}">Télécharger</a>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
<a href="{{url('/outilsinfos/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Ajouter une Chambre</a>
     
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
        <th scope="col">Nom de la chambre</th>
        <th scope="col">Ville</th>
        <th scope="col">Nom du President</th>
        <th scope="col">Nom de Directeur </th>
        <th scope="col">Adresse</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Outilsinfos as $outilsinfo)
      <tr>
        <th scope="row">{{$outilsinfo->id}}</th>
        <td>{{$outilsinfo->nom}}</td>
        <td>{{$outilsinfo->ville}}</td>
        <td>{{$outilsinfo->president}}</td>
        <td>{{$outilsinfo->directeur}}</td>
        <td>{{$outilsinfo->adresse}}</td>
        <td>{{$outilsinfo->tel}}</td>
        <td>{{$outilsinfo->email}}</td>
       

      
      
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/outilsinfos/'.$outilsinfo->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/outilsinfos/'.$outilsinfo->id) }}">
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