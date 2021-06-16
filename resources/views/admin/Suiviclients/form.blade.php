<div class="mb-3">
    <label for="date" class="form-label">Date :</label>
    <input  class="form-control" type="date" id="date" name="date"
    value="{{old('date',$Suiviclient->date ?? null)}}"
       min="2018-01-01" max="2030-12-31">    @error('date') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="trimestre" class="form-label">Trimestre :</label>
    <input value="{{old('trimestre',$Suiviclient->trimestre ?? null)}}" type="text" class="form-control" name="trimestre" id="trimestre">
    @error('trimestre') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="annexe" class="form-label">Annexe :</label>
    <input value="{{old('annexe',$Suiviclient->annexe ?? null)}}" type="text" class="form-control" name="annexe" id="annexe">
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
    <label for="nom_visiteur" class="form-label">Nom visiteur :</label>
    <input value="{{old('nom_visiteur',$Suiviclient->nom_visiteur ?? null)}}" type="text" class="form-control" name="nom_visiteur" id="nom_visiteur">
    @error('nom_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="fonction_visiteur" class="form-label">Fonction visiteur :</label>
    <input value="{{old('fonction_visiteur',$Suiviclient->fonction_visiteur ?? null)}}" type="text" class="form-control" name="fonction_visiteur" id="fonction_visiteur">
    @error('fonction_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="profil_visiteur" class="form-label">Profil visiteur :</label>
    <input value="{{old('profil_visiteur',$Suiviclient->profil_visiteur ?? null)}}" type="text" class="form-control" name="profil_visiteur" id="profil_visiteur">
    @error('profil_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email_visiteur" class="form-label">Email visiteur :</label>
    <input value="{{old('email_visiteur',$Suiviclient->email_visiteur ?? null)}}" type="text" class="form-control" name="email_visiteur" id="email_visiteur">
    @error('email_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel_visiteur" class="form-label">Tel visiteur :</label>
    <input value="{{old('tel_visiteur',$Suiviclient->tel_visiteur ?? null)}}" type="text" class="form-control" name="tel_visiteur" id="tel_visiteur">
    @error('tel_visiteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ice" class="form-label">ICE  :</label>
    <input value="{{old('ice',$Suiviclient->ice ?? null)}}" type="text" class="form-control" name="ice" id="ice">
    @error('ice') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="patente" class="form-label">Patente :</label>
    <input value="{{old('patente',$Suiviclient->patente ?? null)}}" type="text" class="form-control" name="patente" id="patente">
    @error('patente') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="raison_social" class="form-label">Raison Social :</label>
    <input value="{{old('raison_social',$Suiviclient->raison_social ?? null)}}" type="text" class="form-control" name="raison_social" id="raison_social">
    @error('raison_social') <span class="text-danger">{{ $message }}</span> @enderror
</div>

<div class="mb-3">
    <label for="statut_juridique" class="form-label">Statut juridique :</label>
    <input value="{{old('statut_juridique',$Suiviclient->statut_juridique ?? null)}}" type="text" class="form-control" name="statut_juridique" id="statut_juridique">
    @error('statut_juridique') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="college" class="form-label">College :</label>
    <select class="form-select" aria-label="Default select example" name="college" id="college">
  <option selected disabled >Selectionner un champ</option>
  <option value="Commerce" >Commerce</option>
  <option value="Industrie" >Industrie</option>
  <option value="Service" >Service</option>
  </select>  @error('college') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="secteur" class="form-label">Secteur :</label>
    <input value="{{old('secteur',$Suiviclient->secteur ?? null)}}" type="text" class="form-control" name="secteur" id="secteur">
    @error('secteur') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="ca" class="form-label">CA :</label>
    <input value="{{old('ca',$Suiviclient->ca ?? null)}}" type="text" class="form-control" name="ca" id="ca">
    @error('ca') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="pays" class="form-label">Pays :</label>
    <input value="{{old('pays',$Suiviclient->pays ?? null)}}" type="text" class="form-control" name="pays" id="pays">
    @error('pays') <span class="text-danger">{{ $message }}</span> @enderror
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
    <label for="adresse" class="form-label">Adresse :</label>
    <input value="{{old('adresse',$Suiviclient->adresse ?? null)}}" type="text" class="form-control" name="adresse" id="adresse">
    @error('adresse') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="tel_entreprise" class="form-label">Tel Entreprise :</label>
    <input value="{{old('tel_entreprise',$Suiviclient->tel_entreprise ?? null)}}" type="text" class="form-control" name="tel_entreprise" id="tel_entreprise">
    @error('tel_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="email_entreprise" class="form-label">Email Entreprise :</label>
    <input value="{{old('email_entreprise',$Suiviclient->email_entreprise ?? null)}}" type="text" class="form-control" name="email_entreprise" id="email_entreprise">
    @error('email_entreprise') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="nom_dirigeant" class="form-label">Nom Dirigeant :</label>
    <input value="{{old('nom_dirigeant',$Suiviclient->nom_dirigeant ?? null)}}" type="text" class="form-control" name="nom_dirigeant" id="nom_dirigeant">
    @error('nom_dirigeant') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="responsable" class="form-label">Responsable :</label>
    <input value="{{old('responsable',$Suiviclient->responsable ?? null)}}" type="text" class="form-control" name="responsable" id="responsable">
    @error('responsable') <span class="text-danger">{{ $message }}</span> @enderror
</div>
<div class="mb-3">
    <label for="delai_traitement" class="form-label">Delai Traitement :</label>
    <input value="{{old('delai_traitement',$Suiviclient->delai_traitement ?? null)}}" type="text" class="form-control" name="delai_traitement" id="delai_traitement">
    @error('delai_traitement') <span class="text-danger">{{ $message }}</span> @enderror
</div>

