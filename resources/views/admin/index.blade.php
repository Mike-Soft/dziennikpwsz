@extends('layouts.app')


@section('content')

    <div class="container">

        <div class="d-flex justify-content-start">
            <a href="{{ route('users.create') }}" class="btn btn-success float-left">Dodaj użytkownika</a>
        </div>

        <div class="card card-default mt-lg-1">

            <div class="card-header">Użytkownicy</div>

            <div class="card-body card-default">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Imię</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Rola</th>
                        <th scope="col">Klasa</th>
                        <th scope="col">E-mail opiekuna</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>{{ $user->class }}</td>
                            <td>{{ $user->parentmail }}</td>

                        </tr>



                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>





    </div>


    @endsection