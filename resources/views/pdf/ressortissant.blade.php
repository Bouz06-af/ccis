<style>
table,th,td {
  border-collapse: collapse;
 border: 1px solid black;
}
</style>
<div class="mt-3">
<h2 align="center">Liste des Cooperatives</h2>
</div>
<br>
<br>

<table class="table table-bordered">
    <thead>
      <tr>
      
        <th scope="col">Annexe</th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent</th>
        <th scope="col">Nom Complet</th>
        <th scope="col">Fonction</th>
        <th scope="col">Profil</th>
        <th scope="col">Email</th>
        <th scope="col">Tel</th>
        <th scope="col">ICE</th>
        <th scope="col">Patente/if</th>
        <th scope="col">Raison Sociale</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($Ressortissant as $ressortissant)
      <tr>
        
        <td>{{$ressortissant->annexe}}</td>
        <td>{{$ressortissant->membre}}</td>
        <td>{{$ressortissant->adherent}}</td>
        <td>{{$ressortissant->nom_complet}}</td>
        <td>{{$ressortissant->fonction}}</td> 
        <td>{{$ressortissant->profil}}</td>
        <td>{{$ressortissant->email}}</td>
        <td>{{$ressortissant->tel}}</td>
        <td>{{$ressortissant->ice}}</td>
        <td>{{$ressortissant->patente}}</td>
        <td>{{$ressortissant->raison_social}}</td> 
        <td>{{$ressortissant->statut_juridique}}</td>
        <td>{{$ressortissant->college}}</td>
        <td>{{$ressortissant->secteur}}</td>
        <td>{{$ressortissant->effectif}}</td>
        <td>{{$ressortissant->ca}}</td>
        <td>{{$ressortissant->pays}}</td>
        <td>{{$ressortissant->ville}}</td>
        <td>{{$ressortissant->adresse}}</td> 
        <td>{{$ressortissant->tel_entreprise}}</td>
        <td>{{$ressortissant->email_entreprise}}</td>
        <td>{{$ressortissant->nom_complet_dirigeant}}</td>
   
      </tr>
      @endforeach
    </tbody>
  </table>