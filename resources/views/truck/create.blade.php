    <table>
    <tr>
        <th>Number</th>
        <th>Year</th>
        <th>Note</th>

    </tr>
    <tr>
        <form method="POST" action="{{route('truck.store')}}">
        <td><input placeholder="Sunkvežimio numeris" name="unit_number"></input></td>
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
