
<div>
<div><h4><a href="{{route('truck.index')}}">Visi sunkvežimiai</a></h4></div>
<table>
  <tr>
  <th>ID</th>
  <th>truck_id</th>
  <th>subUnit</th>
  <th>start_date</th>
  <th>end_date</th>
  <th collspan="2">Actions</th>
  </tr>
@foreach ($pavadavimai as $pavadavimas)
  <tr>
    <td>{{$pavadavimas->id}}</td>
    <td>{{$pavadavimas->truck_id}}</td>
    <td>{{$pavadavimas->subUnit}}</td>
    <td>{{$pavadavimas->start_date}}</td>
    <td>{{$pavadavimas->end_date}}</td>

    <td><button onclick="window.location.href='{{route('pavadavimas.show',[$pavadavimas])}}';">Details</td>
    <td><button onclick="window.location.href='{{route('pavadavimas.edit',[$pavadavimas])}}';">Edit</td>
    <td><form method="POST" action="{{ route('pavadavimas.destroy', [$pavadavimas]) }}">
    @csrf
    <input type="submit" value="Trinti pavadavimą">
</form></td>
  </tr>
@endforeach
</table>
</div>