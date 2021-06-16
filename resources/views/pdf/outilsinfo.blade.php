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

<table>
    <thead>
      <tr>
        <th scope="col">Nom de la chambre</th>
        <th scope="col">Ville</th>
        <th scope="col">Nom du President</th>
        <th scope="col">Nom de Directeur </th>
        <th scope="col">Adresse</th>
        <th scope="col">Tel</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Outilsinfo as $outilsinfo)
      <tr>
        <td>{{$outilsinfo->nom}}</td>
        <td>{{$outilsinfo->ville}}</td>
        <td>{{$outilsinfo->president}}</td>
        <td>{{$outilsinfo->directeur}}</td>
        <td>{{$outilsinfo->adresse}}</td>
        <td>{{$outilsinfo->tel}}</td>
       
        @endforeach

</table>