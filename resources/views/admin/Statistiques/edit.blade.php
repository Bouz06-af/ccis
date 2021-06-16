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
                <span>Modifier un personne physiques</span>
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
                    <form method="POST" action="{{ url('/statistiques/'.$Statistique->id.'/update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

<div class="mb-3">
    <label for="adherent" class="form-label">Adherent :</label>
    <input value="{{old('adherent',$Statistique->adherent ?? null)}}" type="text" class="form-control" name="adherent" id="adherent">
    @error('adherent') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="Tel" class="form-label">Tel :</label>
    <input value="{{old('Tel',$Statistique->Tel ?? null)}}" type="text" class="form-control" name="Tel" id="Tel">
    @error('Tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="besoin" class="form-label">Besoin :</label>
    <input value="{{old('besoin',$Statistique->besoin ?? null)}}" type="number" class="form-control" name="besoin" id="besoin">
    @error('besoin') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="document" class="form-label">Document :</label>
    <input value="{{old('document',$Statistique->document ?? null)}}" type="number" class="form-control" name="document" id="document">
    @error('document') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="infos" class="form-label">Informations :</label>
    <input value="{{old('infos',$Statistique->infos ?? null)}}" type="number" class="form-control" name="infos" id="infos">
    @error('infos') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="acceuil" class="form-label">Acceuil :</label>
    <input value="{{old('acceuil',$Statistique->acceuil ?? null)}}" type="number" class="form-control" name="acceuil" id="acceuil">
    @error('acceuil') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="annee" class="form-label">Annee :</label>
    <input value="{{old('annee',$Statistique->annee ?? null)}}" type="text" class="form-control" name="annee" id="annee">
    @error('annee') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="mois" class="form-label">Mois :</label>
    <select class="form-select" aria-label="Default select example" name="mois" id="mois">
    <option selected value="{{old('Tel',$Statistique->mois ?? null)}}">{{old('Tel',$Statistique->mois ?? null)}}</option>
          <option value="Janvier">Janvier</option>
          <option value="Fevrier">Fevrier</option>
          <option value="Mars">Mars</option>
          <option value="Avril">Avril</option>
          <option value="Mai">Mai</option>
          <option value="Juin">Juin</option>
          <option value="Juillet">Juillet</option>
          <option value="Aout">Aout</option>
          <option value="Septembre">Septembre</option>
          <option value="Octobre">Octobre</option>
          <option value="Novembre">Novembre</option>
          <option value="Decembre">Decembre</option>
        </select>
            @error('mois') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection