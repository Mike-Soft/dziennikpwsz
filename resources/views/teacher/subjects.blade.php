@extends('layouts.teacherapp')



@section('teachercontent')

    <div class="container col-sm-4">

        <div class="card card-default">

            <div class="card-header text-center">

                <div>
                    <a href="{{ route('classes.index') }}" class="btn btn-dark float-right">Wróć do klas</a>
                </div>

                <div class="float-left align-content-start"><p><b>Przedmioty klasy {{ $class->name }}</b></p></div>

            </div>

            <div class="card-body">

{{--                <div class="list-group list-group-flush">

 $klasa = App\User::all()->where('clas_id', $class->id)

                 @foreach($klasa as $klas)

                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>{{ $klas->surname }}</b></a>

                @endforeach--}}

                <?php  $subject = App\Subject::all() ?>

                @foreach($subject as $subjects)

                    <a href="/{{ $class->name }}/{{ $subjects->name }}" type="button" class="list-group-item list-group-item-action text-xl-center"><b>{{ $subjects->name }}</b></a>

                @endforeach






{{--                </div>--}}

            </div>

        </div>



    </div>

    @endsection