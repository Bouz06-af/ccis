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
                        <form method="POST" action="{{ url('/cooperatives/'.$Cooperative->id.'/update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input value="{{old('nom',$Cooperative->nom ?? null)}}" type="text" class="form-control" name="nom" id="nom">
    @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="president" class="form-label">President :</label>
    <input value="{{old('president',$Cooperative->president ?? null)}}" type="text" class="form-control" name="president" id="president">
    @error('president') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$Cooperative->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="date_creation" class="form-label">Date de Creation :</label>
    <input  class="form-control" type="date" id="date_creation" name="date_creation"
    value="{{old('date_creation',$Cooperative->date_creation ?? null)}}"
       min="2018-01-01" max="2030-12-31">
    @error('date_creation') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$Cooperative->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="active" class="form-label">Active :</label>
    <select class="form-select" aria-label="Default select example" name="active" id="active">
    <option selected value="{{old('active',$Cooperative->active ?? null)}}">{{old('active',$Cooperative->active ?? null)}}</option>
                                  
  <option value="Oui" >Oui</option>
  <option value="Non" >Non</option>
  </select>
    @error('active') <span class="text-danger">{{ $message }}</span> @enderror

</div>

<div class="mb-3">
    <label for="remarque" class="form-label">Remarque :</label>
    <input value="{{old('remarque',$Cooperative->remarque ?? null)}}" type="text" class="form-control" name="remarque" id="remarque">
    @error('remarque') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="ville" class="form-label">ville :</label>
    <select class="form-select" aria-label="Default select example" name="ville" id="ville">
    <option selected value="{{old('ville',$Cooperative->ville ?? null)}}">{{old('ville',$Cooperative->ville ?? null)}}</option>
                                  
  <option value="Tetouan" >Tetouan</option>
  <option value="Chefchaouen">chefchaouen</option>
  <option value="Ouazzane">Ouazzane</option>
  <option value="Fnideq">Fnideq</option>
  <option value="Mdiq">Mdiq</option>

</select>
    @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
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