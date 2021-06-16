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
    <input value="{{old('besoin',$Statistique->besoin ?? null)}}" type="number" class="form-control" name="besoin" id="besoin"  min="1" max="5">
    @error('besoin') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="document" class="form-label">Document :</label>
    <input value="{{old('document',$Statistique->document ?? null)}}" type="number" class="form-control" name="document" id="document"  min="1" max="5">
    @error('document') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="infos" class="form-label">Informations :</label>
    <input value="{{old('infos',$Statistique->infos ?? null)}}" type="number" class="form-control" name="infos" id="infos"  min="1" max="5">
    @error('infos') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="acceuil" class="form-label">Acceuil :</label>
    <input value="{{old('acceuil',$Statistique->acceuil ?? null)}}" type="number" class="form-control" name="acceuil" id="acceuil" min="1" max="5">
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
          <option selected value="Janvier">Janvier</option>
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

