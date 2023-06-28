<?php
    //dd($truck->isAvailableForSubstitution());
    $date = new DateTime('now');
    //dd($truck->canIbesubstituedOnThisTimeFrame(date('Y-m-d'),$date->modify('+1 day')->format('Y-m-d')));
    //dd($truck);
?>
<button onclick="window.location.href='{{route('truck.index')}}';">Į sąrašą</button>
<table>
    <tr>
        <th>Id</th>
        <th>Number</th>
        <th>Year</th>
        <th>Note</th>
        <th>Working status</th>
        @if ($truck->subUnits()->count())
        <th>SubUnits</th>
        @else
        <th>MainTruck</th>    
        @endif
        
        <th>Action</th>
    </tr>
    <tr>
        <td>{{$truck->id}}</td>
        <td>{{$truck->unit_number}}</td>
        <td>{{$truck->year}}</td>
        <td>{{$truck->note}}</td>
        <td>@if ($truck->workingStatus)
                Dirbantis
            @else
                Nedirbantis
            @endif
        </td>
        <td>
        @if ($truck->subUnits()->count())
            @foreach ($truck->subUnits() as $sUnit)
                {{$sUnit->unit_number}}<br>
            @endforeach
        @else            
            <td>{{$truck->getMainTruck()->unit_number}}</td>
        @endif
        </td>
        <td>
            <button onclick="window.location.href='{{route('truck.edit',[$truck])}}';">Edit</button><br>
            <form method="POST" action="{{ route('truck.destroy', [$truck]) }}">
                @csrf
                <input type="submit" value="Delete truck">
            </form> 
            @if (($truck->workingStatus)&&(true))
            @else
            @endif
        </td>
    </tr>
</table>