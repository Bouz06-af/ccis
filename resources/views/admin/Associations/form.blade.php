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
  <option selected disabled >Open this select menu</option>
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