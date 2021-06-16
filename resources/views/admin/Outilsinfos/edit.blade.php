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
                        <form method="POST" action="{{ url('/outilsinfos/'.$Outilsinfo->id.'/update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                            <div class="mb-3">
    <label for="nom" class="form-label">Nom de la chambre:</label>
    <input value="{{old('nom',$Outilsinfo->nom ?? null)}}" type="text" class="form-control" name="nom" id="nom">
    @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ville" class="form-label">ville :</label>
    <select class="form-select" aria-label="Default select example" name="ville" id="ville">
    <option selected value="{{old('ville',$Outilsinfo->ville ?? null)}}">{{old('ville',$Outilsinfo->ville ?? null)}}</option>
      
  <option value="Tanger" >Tanger</option>
  <option value="Tetouan">Tétouan</option>
  <option value="Al Hoceima">Al Hoceima</option>
  <option value="Larache">Larache</option>
  <option value="Marrakech" >Marrakech</option>
  <option value="Safi">Safi</option>
  <option value="Essaouira">Essaouira</option>
  <option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
  <option value="Guelmim">Guelmim</option>
  <option value="Casablanca">Casablanca</option>
  <option value="Settat">Settat</option>
  <option value="Laâyoune">Laâyoune</option>
  <option value="Oujda">Oujda</option>
  <option value="Nador">Nador</option>
  <option value="Béni Mellal">Béni Mellal</option>
  <option value="khénifra">khénifra</option>
  <option value="Agadir">Agadir</option>
  <option value="Ouarzazat">Ouarzazat</option>
  <option value="Dakhla">Dakhla</option>
  <option value="Rabat">Rabat</option>
  <option value="Kénitra">Kénitra</option>
  <option value="Fès">Fès</option>
  <option value="Taza">Taza</option>
  <option value="El Hajeb">El Hajeb</option>
  <option value="Mekknès">Mekknès</option>
 
</select>
    @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="president" class="form-label">President :</label>
    <input value="{{old('president',$Outilsinfo->president ?? null)}}" type="text" class="form-control" name="president" id="president">
    @error('president') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="adresse" class="form-label">Adresse :</label>
    <input value="{{old('adresse',$Outilsinfo->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="directeur" class="form-label">Directeur :</label>
    <input value="{{old('directeur',$Outilsinfo->directeur ?? null)}}" type="text" class="form-control" name="directeur" id="directeur">
    @error('directeur') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="adresse" class="form-label">Adresse :</label>
    <input value="{{old('adresse',$Outilsinfo->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$Outilsinfo->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$Outilsinfo->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
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