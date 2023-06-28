<form method="POST" action="{{ route('truck.destroy', [$truck]) }}">
    @csrf
    <input type="submit" value="Delete truck">
</form>
    <table>
    <tr>
        <th>Id</th>
        <th>Number</th>
        <th>Year</th>
        <th>Note</th>

    </tr>
    <tr>
        <td>{{$truck->id}}</td>
        <form method="POST" action="{{route('truck.update',[$truck])}}">
        <td><input value="{{$truck->unit_number}}" name="unit_number"></input></td>
        <td><input value="{{$truck->year}}" name="year"></input></td>
        <td><input value="{{$truck->note}}" name="note"></input></td>
        <td><select name="workingStatus" id="">
            @if($truck->workingStatus)
            <option value="true" selected>Dirbantis</option>
            <option value="false">Nedirbantis</option>
            @else
            <option value="true" >Dirbantis</option>
            <option value="false" selected>Nedirbantis</option>
            @endif
        </select></td>
        @csrf
        <td><input type="submit"></input></td>
        </form>

    </tr>
</table>
