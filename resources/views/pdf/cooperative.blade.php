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
<table>
    <thead>
      <tr>
        <th scope="col">Nom cooperative</th>
        <th scope="col">President</th>
        <th scope="col">Tel</th>
        <th scope="col">Communaute/siege</th>
        <th scope="col">Date de creation</th>
        <th scope="col">Email</th>
        <th scope="col">Active ou non</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($Cooperative as $cooperative)
      <tr>
        <td>{{$cooperative->nom}}</td>
        <td>{{$cooperative->president}}</td>
        <td>{{$cooperative->tel}}</td>
        <td>{{$cooperative->siege}}</td>
        <td>{{$cooperative->date_creation}}</td>
        <td>{{$cooperative->email}}</td> 
        <td>{{$cooperative->active}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

