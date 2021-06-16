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
                <div class="page-header-icon"><i data-feather="link"></i></div>
                <span>Les cooperatives</span>
            </h1>
            <br>
        </div>
    </div>
</div>


<div class="container-fluid mt-n10">



    <div class="card mb-4">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="datatable table-responsive">
             
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nom cooperative</th>
        <th scope="col">President</th>
        <th scope="col">Tel</th>
        <th scope="col">Communaute/siege</th>
        <th scope="col">Date de creation</th>
        <th scope="col">Email</th>
        <th scope="col">Active ou non</th>
        <th scope="col">remarque</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($cooperatives as $cooperative)
      <tr>
      
        <td>{{$cooperative->nom}}</td>
        <td>{{$cooperative->president}}</td>
        <td>{{$cooperative->tel}}</td>
        <td>{{$cooperative->siege}}</td>
        <td>{{$cooperative->date_creation}}</td>
        <td>{{$cooperative->email}}</td> 
        <td>{{$cooperative->active}}</td>
        <td>{{$cooperative->remarque}}</td>
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/cooperatives/'.$cooperative->id.'/edit')}}" type="button" class="btn btn-primary">Modifier</a>
                <form method="POST" action="{{ url('/cooperatives/'.$cooperative->id) }}">
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