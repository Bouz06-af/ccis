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
                    <div class="mb-3">
    <label for="annexe" class="form-label">Annexe :</label>
    <input value="{{old('annexe',$Ressortissant->annexe ?? null)}}" type="text" class="form-control" name="annexe" id="annexe">
    @error('annexe') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="membre" class="form-label">Membre :</label>
    <select class="form-select" aria-label="Default select example" name="membre" id="membre">
    <option selected value="{{old('membre',$Ressortissant->membre ?? null)}}">{{old('membre',$Ressortissant->membre  ?? null)}}</option>
  <option value="Oui" >Oui</option>
  <option value="Non" >Non</option>
  </select>
    @error('membre') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adherent" class="form-label">Adherent :</label>
    <select class="form-select" aria-label="Default select example" name="adherent" id="adherent">
    <option selected value="{{old('adherent',$Ressortissant->adherent ?? null)}}">{{old('adherent',$Ressortissant->adherent  ?? null)}}</option>
  <option value="Oui" >Oui</option>
  <option value="Non" >Non</option>
  </select>
      @error('adherent') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="nom_complet" class="form-label">Nom Complet:</label>
    <input value="{{old('nom_complet',$Ressortissant->nom_complet ?? null)}}" type="text" class="form-control" name="nom_complet" id="nom_complet">
    @error('nom_complet') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="fonction" class="form-label">Fonction :</label>
    <input value="{{old('fonction',$Ressortissant->fonction ?? null)}}" type="text" class="form-control" name="fonction" id="fonction">
    @error('fonction') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="profil" class="form-label">Profil :</label>
    <input value="{{old('profil',$Ressortissant->profil ?? null)}}" type="text" class="form-control" name="profil" id="profil">
    @error('profil') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$Ressortissant->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$Ressortissant->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ice" class="form-label">ICE :</label>
    <input value="{{old('ice',$Ressortissant->ice ?? null)}}" type="text" class="form-control" name="ice" id="ice">
    @error('ice') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="patente" class="form-label">Patente/IF :</label>
    <input value="{{old('patente',$Ressortissant->patente ?? null)}}" type="text" class="form-control" name="patente" id="patente">
    @error('patente') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="raison_social" class="form-label">Raison social :</label>
    <input value="{{old('raison_social',$Ressortissant->raison_social ?? null)}}" type="text" class="form-control" name="raison_social" id="raison_social">
    @error('raison_social') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="statut_juridique" class="form-label">Statut Juridique</label>
    <input value="{{old('statut_juridique',$Ressortissant->statut_juridique ?? null)}}" type="text" class="form-control" name="statut_juridique" id="statut_juridique">
    @error('statut_juridique') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="college" class="form-label">College :</label>
    <select class="form-select" aria-label="Default select example" name="college" id="college">
    <option selected value="{{old('college',$Ressortissant->college ?? null)}}">{{old('college',$Ressortissant->college  ?? null)}}</option>
  <option value="Commerce" >Commerce</option>
  <option value="Industrie" >Industrie</option>
  <option value="Service" >Service</option>
  </select>
    @error('college') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="secteur" class="form-label">Secteur</label>
    <input value="{{old('secteur',$Ressortissant->secteur ?? null)}}" type="text" class="form-control" name="secteur" id="secteur">
    @error('secteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="effectif" class="form-label">Effectif </label>
    <input value="{{old('effectif',$Ressortissant->effectif ?? null)}}" type="text" class="form-control" name="effectif" id="effectif">
    @error('effectif') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ca" class="form-label">CA </label>
    <input value="{{old('ca',$Ressortissant->ca ?? null)}}" type="text" class="form-control" name="ca" id="ca">
    @error('ca') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="pays" class="form-label">Pays </label>
    <input value="{{old('pays',$Ressortissant->pays ?? null)}}" type="text" class="form-control" name="pays" id="pays">
    @error('pays') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ville" class="form-label">Ville </label>
    <input value="{{old('ville',$Ressortissant->ville ?? null)}}" type="text" class="form-control" name="ville" id="ville">
    @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adresse" class="form-label">Adresse </label>
    <input value="{{old('adresse',$Ressortissant->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel_entreprise" class="form-label">Tel entreprise </label>
    <input value="{{old('tel_entreprise',$Ressortissant->tel_entreprise ?? null)}}" type="text" class="form-control" name="tel_entreprise" id="tel_entreprise">
    @error('tel_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email_entreprise" class="form-label">email entreprise </label>
    <input value="{{old('email_entreprise',$Ressortissant->email_entreprise ?? null)}}" type="text" class="form-control" name="email_entreprise" id="email_entreprise">
    @error('email_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="nom_complet_dirigeant" class="form-label">Nom dirigeant </label>
    <input value="{{old('nom_complet_dirigeant',$Ressortissant->nom_complet_dirigeant ?? null)}}" type="text" class="form-control" name="nom_complet_dirigeant" id="nom_complet_dirigeant">
    @error('nom_complet_dirigeant') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection