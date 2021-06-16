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
                <span>Modifier une Personne Morale</span>
            </h1>
            <br>
        </div>
    </div>
</div>

<div class="container-fluid mt-n10">


    <!--Card Primary-->

    <div class="card mb-4">
        <div class="card-header">Modifier une Personne Morale </div>
        <div class="card-body">
            <div class="datatable table-responsive">
                <div class="mt-3 card">
                    <div class="card-body">
                        <form method="POST" action="{{ url('/personnemorals/'.$Personnemoral->id.'/update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
    <label for="denomination" class="form-label">Denomination :</label>
    <input value="{{old('denomination',$Personnemoral->denomination ?? null)}}" type="text" class="form-control" name="denomination" id="denomination">
    @error('denomination') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="gerant" class="form-label">Gerant :</label>
    <input value="{{old('gerant',$Personnemoral->gerant ?? null)}}" type="text" class="form-control" name="gerant" id="gerant">
    @error('gerant') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="ville" class="form-label">ville :</label>
    <select class="form-select" aria-label="Default select example" name="ville" id="ville">
    <option selected value="{{old('ville',$Personnemoral->ville ?? null)}}">{{old('ville',$Personnemoral->ville ?? null)}}</option>
       <option value="Tetouan" >Tetouan</option>
  <option value="Chefchaouen">chefchaouen</option>
  <option value="Ouazzane">Ouazzane</option>
  <option value="Fnideq">Fnideq</option>
  <option value="Mdiq">Mdiq</option>
  <option value="Martil">Martil</option>
  
</select>
    @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="if" class="form-label">IF  :</label>
    <input value="{{old('if',$Personnemoral->if ?? null)}}" type="text" class="form-control" name="if" id="if">
    @error('if') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="rc" class="form-label">RC  :</label>
    <input value="{{old('rc',$Personnemoral->rc ?? null)}}" type="text" class="form-control" name="rc" id="rc">
    @error('rc') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ice" class="form-label">ICE  :</label>
    <input value="{{old('ice',$Personnemoral->ice ?? null)}}" type="text" class="form-control" name="ice" id="ice">
    @error('ice') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="activite" class="form-label">Activite  :</label>
    <input value="{{old('activite',$Personnemoral->activite ?? null)}}" type="text" class="form-control" name="activite" id="activite">
    @error('activite') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="forme_juridique" class="form-label">Forme Juridique  :</label>
    <input value="{{old('forme_juridique',$Personnemoral->forme_juridique ?? null)}}" type="text" class="form-control" name="forme_juridique" id="forme_juridique">
    @error('forme_juridique') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="date_creation" class="form-label">Date de Creation :</label>
    <input  class="form-control" type="date" id="date_creation" name="date_creation"
    value="{{old('date_creation',$Personnemoral->date_creation ?? null)}}"
       min="2018-01-01" max="2030-12-31">
    @error('date_creation') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adresse" class="form-label">Adresse  :</label>
    <input value="{{old('adresse',$Personnemoral->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$Personnemoral->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$Personnemoral->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
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