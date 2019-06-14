@extends('layouts.studentapp')


@section('studentcontent')

    <div class="container">

        <h1>{{$user-> surname}} {{ $user->name }}</h1>

        @foreach($subjects as $subject)

    <table class="table table-bordered mb-5">
        <thead>
        <tr>

            <th colspan="10" scope="col">{{ $subject->name }}</th>

        </tr>
        </thead>
        <tbody>
        <tr class="maly">
            @for($i=1;$i<11;$i++)

                <td class="text-center" style="width: 10%"><small>{{$i}}</small></td>

                @endfor
        </tr>
        <tr>
            @php
            $suma=0;
            $liczba=0;
            @endphp
            @foreach($marks as $mark)
                @if($mark->subject_id==$subject->id)
                    <td class="text-center"><p class="text-danger m-1"><b>{{$mark->mark}}</b></p></td>

                    @php
                    $suma = $suma + $mark->mark;
                    $liczba++


                    @endphp

                @endif
                @endforeach
        </tr>

        <tr>

            @if($liczba>0)

                <td>Średnia: {{ round($suma/$liczba,2) }}</td>

                @endif

        </tr>

        </tbody>
    </table>

            @endforeach

    </div>

    @endsection