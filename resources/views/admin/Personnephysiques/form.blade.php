<div class="mb-3">
    <label for="annexe" class="form-label">Annexe :</label>
    <input value="{{old('annexe',$personnephysique->annexe ?? null)}}" type="text" class="form-control" name="annexe" id="annexe">
    @error('annexe') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="membre" class="form-label">Membre :</label>
    <select class="form-select" aria-label="Default select example" name="membre" id="membre">
  <option selected disabled >Membre ou non ?</option>
  <option value="Oui" >Oui</option>
  <option value="Non" >Non</option>
  </select>
    @error('membre') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="adherent" class="form-label">Adherent :</label>
    <select class="form-select" aria-label="Default select example" name="adherent" id="adherent">
  <option selected disabled >Adherent ou non ?</option>
  <option value="Oui" >Oui</option>
  <option value="Non" >Non</option>
  </select>
    @error('adherent') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input value="{{old('nom',$personnephysique->nom ?? null)}}" type="text" class="form-control" name="nom" id="nom">
    @error('nom') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input value="{{old('prenom',$personnephysique->prenom ?? null)}}" type="text" class="form-control" name="prenom" id="prenom">
    @error('prenom') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="fonction" class="form-label">Fonction :</label>
    <input value="{{old('fonction',$personnephysique->fonction ?? null)}}" type="text" class="form-control" name="fonction" id="fonction">
    @error('fonction') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="profil" class="form-label">Profil :</label>
    <input value="{{old('profil',$personnephysique->profil ?? null)}}" type="text" class="form-control" name="profil" id="profil">
    @error('profil') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$personnephysique->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$personnephysique->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="raison_social" class="form-label">Raison social :</label>
    <input value="{{old('raison_social',$personnephysique->raison_social ?? null)}}" type="text" class="form-control" name="raison_social" id="raison_social">
    @error('raison_social') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="statut_juridique" class="form-label">Statut Juridique</label>
    <input value="{{old('statut_juridique',$personnephysique->statut_juridique ?? null)}}" type="text" class="form-control" name="statut_juridique" id="statut_juridique">
    @error('statut_juridique') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="college" class="form-label">College :</label>
    <select class="form-select" aria-label="Default select example" name="college" id="college">
  <option selected disabled >Selectionner un champ</option>
  <option value="Commerce" >Commerce</option>
  <option value="Industrie" >Industrie</option>
  <option value="Service" >Service</option>
  </select>
    @error('college') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="secteur" class="form-label">Secteur</label>
    <input value="{{old('secteur',$personnephysique->secteur ?? null)}}" type="text" class="form-control" name="secteur" id="secteur">
    @error('secteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="activite" class="form-label">Activite</label>
    <input value="{{old('activite',$personnephysique->activite ?? null)}}" type="text" class="form-control" name="activite" id="activite">
    @error('activite') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="effectif" class="form-label">Effectif </label>
    <input value="{{old('effectif',$personnephysique->effectif ?? null)}}" type="text" class="form-control" name="effectif" id="effectif">
    @error('effectif') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ca" class="form-label">CA </label>
    <input value="{{old('ca',$personnephysique->ca ?? null)}}" type="text" class="form-control" name="ca" id="ca">
    @error('ca') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ville" class="form-label">Ville :</label>
    <select class="form-select" aria-label="Default select example" name="ville" id="ville">
  <option selected disabled >Open this select menu</option>
  <option value="Tetouan" >Tetouan</option>
  <option value="Chefchaouen">chefchaouen</option>
  <option value="Ouazzane">Ouazzane</option>
  <option value="Fnideq">Fnideq</option>
  <option value="Mdiq">Mdiq</option>
</select>  @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adresse" class="form-label">Adresse </label>
    <input value="{{old('adresse',$personnephysique->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>