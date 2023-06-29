<?php
//dd($startDate);

?>
<button onclick="window.location.href='{{route('pavadavimas.index')}}';">Į pavadavimų sąrašą</button>
<br>
<br>
@if (($startDate === null)||($endDate === null))
<table >
@else
<table hidden> 
@endif
    <tr>
        <th>Pavaduojamasis sunkvežimis</th>
        <th>Pradžia</th>
        <th>Pabaiga</th>
    </tr>
    <tr>

        <form method="GET" action="{{route('pavadavimas.create',[$mainTruck])}}">
        <td>{{$mainTruck->unit_number}}
        </td>
        <td><input name="startDate" type="datetime-local" min="{{$startDate->toDateTimeString()}}" value="{{$startDate->toDateTimeString()}}"></td>
        @if ($endDate === null)
            <td><input name="endDate" type="datetime-local" min="{{$startDate->toDateTimeString()}}"></td>
        @else
            <td><input name="somedatea" type="datetime-local" min="{{$startDate->toDateTimeString()}}"></td>
        @endif
        @csrf
        <td><input type="submit"></input></td>
        </form>

    </tr>
</table>