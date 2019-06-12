@extends('layouts.teacherapp')



@section('teachercontent')

    <div class="container col-sm-4">

        <div class="card card-default">

            <div class="card-header text-center">
                Przedmioty
            </div>

            <div class="card-body">

                <div class="list-group list-group-flush">

 <?php $klasa = App\User::all()->where('clas_id', $class->id)?>

                   @foreach($klasa as $klas)

                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>{{ $klas->surname }}</b></a>

                    @endforeach



                </div>

            </div>

        </div>



    </div>

    @endsection