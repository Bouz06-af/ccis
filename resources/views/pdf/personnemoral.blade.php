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
        <th scope="col">Denomination</th>
        <th scope="col">Gerant</th>
        <th scope="col">Ville</th>
        <th scope="col">IF</th>
        <th scope="col">RC</th>
        <th scope="col">ICE</th>
        <th scope="col">Activitee</th>
        <th scope="col">Forme Juridique</th>
        <th scope="col">Date Creation</th>
        <th scope="col">Adresse</th>
        <th scope="col">Email</th>
        <th scope="col">Tel</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Personnemoral as $personnemoral)
      <tr>
        <td>{{$personnemoral->denomination}}</td>
        <td>{{$personnemoral->gerant}}</td>
        <td>{{$personnemoral->ville}}</td>
        <td>{{$personnemoral->if}}</td>
        <td>{{$personnemoral->rc}}</td>
        <td>{{$personnemoral->ice}}</td>
        <td>{{$personnemoral->activite}}</td>
        <td>{{$personnemoral->forme_juridique}}</td>
        <td>{{$personnemoral->date_creation}}</td>
        <td>{{$personnemoral->adresse}}</td>
        <td>{{$personnemoral->email}}</td>
        <td>{{$personnemoral->tel}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
