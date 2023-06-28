<?php
//dd($mainTrucks); 
?>
<button onclick="window.location.href='{{route('truck.index')}}';">Į pavadavimų sąrašą</button>
<table>
    <tr>
        <th>Pavaduojamasis sunkvežimis</th>
        <th>Pavaduojantis sunkvežimis</th>
        <th>Pradžia</th>
        <th>Pabaiga</th>

    </tr>
    <tr>
        <form method="POST" action="{{route('truck.store')}}">
        <td><select name="mainTruck" id="">
            @foreach ($mainTrucks as $truck)
                <option value="{{$truck->id}}">{{$truck->unit_number}}</option>
            @endforeach
        </select></td>
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