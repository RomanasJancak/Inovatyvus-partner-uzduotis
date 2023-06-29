<?php
    //dd($truck->isAvailableForSubstitution());
    //$date = new DateTime('now');
    //dd($truck->canIbesubstituedOnThisTimeFrame(date('Y-m-d'),$date->modify('+1 day')->format('Y-m-d')));
    //dd($truck->pavadavimai);
?>
<button onclick="window.location.href='{{route('truck.index')}}';">Sunkvežimių sąrašas</button>
<table>
    <tr>
        <th>
            <button onclick="window.location.href='{{route('truck.edit',[$truck])}}';">Redaguoti</button>
        </th>
        <th>
            <form method="POST" action="{{ route('truck.destroy', [$truck]) }}">
                @csrf
                <input type="submit" value="Trinti">
            </form>
        </th>
        <th>
        <button onclick="window.location.href='{{route('pavadavimas.create',[$truck])}}';">Prideti pavadavimą</button>
        </th> 
    </tr>
</table>

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
        <th>Pavadavimo laikotarpis</th> 
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
            @foreach ($truck->pavadavimai as $pavadavimas)
                {{$pavadavimas->getSubTruck()->unit_number}}<br>
            @endforeach
        @elseif($truck->getMainTruck() != null)            
            <td>{{$truck->getMainTruck()->unit_number}}</td>
        @endif
        </td>
        <td>
            @foreach ($truck->pavadavimai as $pavadavimas)
                [ {{$pavadavimas->start_date}} , {{$pavadavimas->end_date}} ]<br>
            @endforeach
        </td>
        <td>
            @foreach ($truck->pavadavimai as $pavadavimas)
                <form method="POST" action="{{ route('pavadavimas.destroy', [$pavadavimas]) }}">
                    @csrf
                    <input type="submit" value="Trinti">
                </form>
            @endforeach
            @if (!((!$truck->workingStatus)&&($truck->pavadavimai->isEmpTy())))
            @else

            @endif
        </td>
    </tr>
</table>