
<div>
<div><h4><a href="{{route('truck.create')}}">Create new Truck</a></h4></div>
<table>
  <tr>
  <th>ID</th>
  <th>Unit number</th>
  <th>Year</th>
  <th>Note</th>
  <th collspan="2">Actions</th>
  </tr>
@foreach ($trucks as $truck)
  <tr>
    <td>{{$truck->id}}</td>
    <td>{{$truck->unit_number}}</td>
    <td>{{$truck->year}}</td>
    <td>{{$truck->note}}</td>
    <td><button onclick="window.location.href='{{route('truck.show',[$truck])}}';">Details</td>
    <td><button onclick="window.location.href='{{route('truck.edit',[$truck])}}';">Edit</td>
    <td><form method="POST" action="{{ route('truck.destroy', [$truck]) }}">
    @csrf
    <input type="submit" value="Delete truck">
</form></td>
  </tr>
@endforeach
</table>
</div>