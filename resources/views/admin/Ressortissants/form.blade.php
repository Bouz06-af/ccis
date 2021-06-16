<div class="mb-3">
    <label for="annexe" class="form-label">Annexe :</label>
    <input value="{{old('annexe',$ressortissant->annexe ?? null)}}" type="text" class="form-control" name="annexe" id="annexe">
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
    <label for="nom_complet" class="form-label">Nom Complet:</label>
    <input value="{{old('nom_complet',$ressortissant->nom_complet ?? null)}}" type="text" class="form-control" name="nom_complet" id="nom_complet">
    @error('nom_complet') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="fonction" class="form-label">Fonction :</label>
    <input value="{{old('fonction',$ressortissant->fonction ?? null)}}" type="text" class="form-control" name="fonction" id="fonction">
    @error('fonction') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="profil" class="form-label">Profil :</label>
    <input value="{{old('profil',$ressortissant->profil ?? null)}}" type="text" class="form-control" name="profil" id="profil">
    @error('profil') <span class="text-danger">{{ $message }}</span> @enderror
</div>


<div class="mb-3">
    <label for="email" class="form-label">Email :</label>
    <input value="{{old('email',$ressortissant->email ?? null)}}" type="text" class="form-control" name="email" id="email">
    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel :</label>
    <input value="{{old('tel',$ressortissant->tel ?? null)}}" type="text" class="form-control" name="tel" id="tel">
    @error('tel') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ice" class="form-label">ICE :</label>
    <input value="{{old('ice',$ressortissant->ice ?? null)}}" type="text" class="form-control" name="ice" id="ice">
    @error('ice') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="patente" class="form-label">Patente/IF :</label>
    <input value="{{old('patente',$ressortissant->patente ?? null)}}" type="text" class="form-control" name="patente" id="patente">
    @error('patente') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="raison_social" class="form-label">Raison social :</label>
    <input value="{{old('raison_social',$ressortissant->raison_social ?? null)}}" type="text" class="form-control" name="raison_social" id="raison_social">
    @error('raison_social') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="statut_juridique" class="form-label">Statut Juridique</label>
    <input value="{{old('statut_juridique',$ressortissant->statut_juridique ?? null)}}" type="text" class="form-control" name="statut_juridique" id="statut_juridique">
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
    <input value="{{old('secteur',$ressortissant->secteur ?? null)}}" type="text" class="form-control" name="secteur" id="secteur">
    @error('secteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="effectif" class="form-label">Effectif </label>
    <input value="{{old('effectif',$ressortissant->effectif ?? null)}}" type="text" class="form-control" name="effectif" id="effectif">
    @error('effectif') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ca" class="form-label">CA </label>
    <input value="{{old('ca',$ressortissant->ca ?? null)}}" type="text" class="form-control" name="ca" id="ca">
    @error('ca') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="pays" class="form-label">Pays </label>
    <input value="{{old('pays',$ressortissant->pays ?? null)}}" type="text" class="form-control" name="pays" id="pays">
    @error('pays') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ville" class="form-label">Ville </label>
    <input value="{{old('ville',$ressortissant->ville ?? null)}}" type="text" class="form-control" name="ville" id="ville">
    @error('ville') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="adresse" class="form-label">Adresse </label>
    <input value="{{old('adresse',$ressortissant->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel_entreprise" class="form-label">Tel entreprise </label>
    <input value="{{old('tel_entreprise',$ressortissant->tel_entreprise ?? null)}}" type="text" class="form-control" name="tel_entreprise" id="tel_entreprise">
    @error('tel_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email_entreprise" class="form-label">email entreprise </label>
    <input value="{{old('email_entreprise',$ressortissant->email_entreprise ?? null)}}" type="text" class="form-control" name="email_entreprise" id="email_entreprise">
    @error('email_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="nom_complet_dirigeant" class="form-label">Nom dirigeant </label>
    <input value="{{old('nom_complet_dirigeant',$ressortissant->nom_complet_dirigeant ?? null)}}" type="text" class="form-control" name="nom_complet_dirigeant" id="nom_complet_dirigeant">
    @error('nom_complet_dirigeant') <span class="text-danger">{{ $message }}</span> @enderror
</div>