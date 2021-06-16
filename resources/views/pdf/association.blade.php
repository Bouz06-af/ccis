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
        <th scope="col">#</th>
        <th scope="col">Nom Association</th>
        <th scope="col">Tel</th>
        <th scope="col">Email</th>
        <th scope="col">Adresse</th>
        <th scope="col">President</th>
        <th scope="col">Ville</th>
        <th scope="col">Activitee</th>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($Association as $association)
      <tr>
        <th scope="row">{{$association->id}}</th>
        <td>{{$association->nom}}</td>
        <td>{{$association->tel}}</td>
        <td>{{$association->email}}</td>
        <td>{{$association->adresse}}</td>
        <td>{{$association->president}}</td>
        <td>{{$association->ville}}</td>
        <td>{{$association->activite}}</td>
        
        @endforeach
    </tbody>
  </table>

