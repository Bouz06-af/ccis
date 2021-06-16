<style>
table,th,td {
  border-collapse: collapse;
 border: 1px solid black;
}
</style>
<div class="mt-3">
<h2 align="center">Liste des Personnephysiques</h2>
</div>
<br>
<br>

<table>
    <thead>
      <tr>
        <th scope="col">Annexe</th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Fonction</th>
        <th scope="col">Profil</th>
        <th scope="col">Email</th>
        <th scope="col">Tel</th>
        <th scope="col">Raison Sociale</th>
        <th scope="col">Statut Juridique</th>
        <th scope="col">College</th>
        <th scope="col">Secteur</th>
        <th scope="col">Activite</th>
      
      
      </tr>
    </thead>
    <tbody>
    @foreach ($Personnephysique as $personnephysique)
      <tr>
        
        <td>{{$personnephysique->annexe}}</td>
        <td>{{$personnephysique->membre}}</td>
        <td>{{$personnephysique->adherent}}</td>
        <td>{{$personnephysique->nom}}</td>
        <td>{{$personnephysique->prenom}}</td>
        <td>{{$personnephysique->fonction}}</td> 
        <td>{{$personnephysique->profil}}</td>
        <td>{{$personnephysique->email}}</td>
        <td>{{$personnephysique->tel}}</td>
        <td>{{$personnephysique->raison_social}}</td> 
        <td>{{$personnephysique->statut_juridique}}</td>
        <td>{{$personnephysique->college}}</td>
        <td>{{$personnephysique->secteur}}</td>
        <td>{{$personnephysique->activite}}</td> 
       

        @endforeach
    </tbody>
  </table>

