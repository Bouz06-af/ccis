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
                <div class="page-header-icon"><i data-feather="briefcase"></i></div>
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
                        <form method="POST" action="{{ url('/associations/'.$Association->id.'/update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mt-3 card">
                    <div class="card-body">
                    <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input value="{{old('nom',$Association->nom ?? null)}}" type="text" class="form-control" name="nom" id="nom">
    @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$Association->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$Association->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adresse" class="form-label">Adresse :</label>
    <input value="{{old('adresse',$Association->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="president" class="form-label">President :</label>
    <input value="{{old('president',$Association->president ?? null)}}" type="text" class="form-control" name="president" id="president">
    @error('president') <span class="text-danger">{{ $message }}</span> @enderror
</div>
    <label for="ville" class="form-label">ville :</label>
    <select class="form-select" aria-label="Default select example" name="ville" id="ville">
    <option selected value="{{old('ville',$Association->ville ?? null)}}">{{old('ville',$Association->ville ?? null)}}</option>
 <option value="Tetouan" >Tetouan</option>
  <option value="Chefchaouen">chefchaouen</option>
  <option value="Ouazanne">Ouazzane</option>
  <option value="Fnideq">Fnideq</option>
  </select>
<div class="mb-3">
    <label for="activite" class="form-label">Activite :</label>
    <input value="{{old('activite',$Association->activite ?? null)}}" type="text" class="form-control" name="activite" id="activite">
    @error('activite') <span class="text-danger">{{ $message }}</span> @enderror
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