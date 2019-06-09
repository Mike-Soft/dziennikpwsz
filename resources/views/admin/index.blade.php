@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="d-flex justify-content-start">
            <a href="{{ route('users.create') }}" class="btn btn-success float-left">Dodaj użytkownika</a>
        </div>

        <div class="card-body card-default mt-lg-1">

            <div class="card-header">Użytkownicy</div>

        </div>


        foreach ($users as $user) { echo $user->name . "<br>"; }


    </div>


    @endsection