<?php
//dd($startDate);

?>
<button onclick="window.location.href='{{route('pavadavimas.index')}}';">Į pavadavimų sąrašą</button>
<table>
    <tr>
        <th>Pavaduojamasis sunkvežimis</th>
        <th>Pradžia</th>
        <th>Pabaiga</th>
        <th>Pavaduojantis sunkvežimis</th>
    </tr>
    <tr>

        <form method="POST" action="{{route('pavadavimas.store')}}">
        <td>{{$mainTruck->unit_number}}
        </td>
        <td><input name="startDate" type="datetime-local" min="{{$startDate->toDateTimeString()}}"></td>
        @if ($endDate === null)
            <td><input name="somedate" type="datetime-local" min="{{$startDate->toDateTimeString()}}"></td>
        @else
            <td><input name="somedate" type="datetime-local" min="{{$startDate->toDateTimeString()}}"></td>
        @endif
        <td><input placeholder="Pirmos registracijos metai" name="year"></input></td>
        <td><input placeholder="Komentaras" name="note"></input></td>
        <td><select name="workingStatus" id="">
            <option value="true">Dirbantis</option>
            <option value="false">Nedirbantis</option>
        </select></td>
        @csrf
        <td><input type="submit"></input></td>
        </form>

    </tr>
</table>