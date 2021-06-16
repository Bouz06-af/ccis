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
<br><table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Numero de requete</th>
        <th scope="col">Date</th>
        <th scope="col">Trimestre</th>
        <th scope="col">Annexe</th>
        <th scope="col">Membre</th>
        <th scope="col">Adherent</th>
        <th scope="col">Nom Complet Visiteur</th>
        <th scope="col">Fonction Visiteur</th>
        <th scope="col">Profil Visiteur</th>
        <th scope="col">Email Visiteur</th>
        <th scope="col">Tel Visiteur</th>
        <th scope="col">ice</th>
        <th scope="col">Patente</th>
    
      </tr>
    </thead>
    <tbody>
    @foreach ($Suiviclient as $Suiviclient)
      <tr>
        <td>{{$Suiviclient->id}}</td>
        <td>{{$Suiviclient->date}}</td>
        <td>{{$Suiviclient->trimestre}}</td>
        <td>{{$Suiviclient->annexe}}</td>
        <td>{{$Suiviclient->membre}}</td>
        <td>{{$Suiviclient->adherent}}</td>
        <td>{{$Suiviclient->nom_visiteur}}</td>
        <td>{{$Suiviclient->fonction_visiteur}}</td>
        <td>{{$Suiviclient->profil_visiteur}}</td>
        <td>{{$Suiviclient->email_visiteur}}</td>
        <td>{{$Suiviclient->tel_visiteur}}</td>
        <td>{{$Suiviclient->ice}}</td>
        <td>{{$Suiviclient->patente}}</td>
       
      </tr>
      @endforeach
    </tbody>
  </table>


