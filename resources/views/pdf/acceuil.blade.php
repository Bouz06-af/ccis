<style>
table,th,td {
  border-collapse: collapse;
 border: 1px solid black;
}
</style>
<div class="mt-3">
<h2 align="center">Liste des Acceuils</h2>
</div>
<br>
<br>
<table>
    <thead>
      <tr>
    
        <th scope="col">Date </th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent </th>
        <th scope="col">Nom Visiteur</th>
        <th scope="col">Prenom Visiteur</th>
        <th scope="col">Fonction Visiteur</th>
        <th scope="col">Profil Visiteur</th>
        <th scope="col">Tel Visiteur</th>
        <th scope="col">Nom/Raison Sociable</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Acceuil as $acceuil)
      <tr>
      
        <td>{{$acceuil->date}}</td>
        
        <td>{{$acceuil->membre}}</td>
        <td>{{$acceuil->adherent}}</td>
        <td>{{$acceuil->nom_visiteur}}</td>
        <td>{{$acceuil->prenom_visiteur}}</td>
        <td>{{$acceuil->fonction_visiteur}}</td>
        <td>{{$acceuil->profil_visiteur}}</td>
        <td>{{$acceuil->tel_visiteur}}</td>
        <td>{{$acceuil->raison_social}}</td>
      
     
      </tr>
      @endforeach
    </tbody>
  </table>

