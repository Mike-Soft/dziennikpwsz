@extends('layouts.teacherapp')

@section('teachercontent')

    <div class="container col-sm-4">

                                <div class="card card-default">

                                    <div class="card-header text-center">
                                        <div class="float-left "><b>Klasy</b></div>
                                        <div><a href="/home" class="btn btn-dark float-right">Strona główna</a></div>
                                    </div>

                                    <div class="card-body">

                                        <div class="list-group list-group-flush">

                                            @foreach($classes as $class)

                                                <a href="/classes/{{ $class->id }}" type="button" class="list-group-item list-group-item-action text-xl-center"><b>{{ $class->name }}</b></a>

                                            @endforeach



                                        </div>

                                    </div>

                                </div>



                            </div>

    @endsection
