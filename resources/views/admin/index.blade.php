@extends('layouts.adminapp')


@section('admincontent')

    <div class="container">

        <div class="d-flex justify-content-start">
            <a href="{{ route('users.create') }}" class="btn btn-success float-left">Dodaj użytkownika</a>
        </div>

        <div class="card card-default mt-lg-1">

            <div class="card-header">Administratorzy</div>

            <div class="card-body card-default">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">l.p.</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Imię</th>
                        <th scope="col">E-mail</th>



                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $tab = 1
                    @endphp

                    @foreach($users as $user)
                        @if( $user-> role =='admin')

                        <tr>
                            <th scope="row">{{ $tab }}</th>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>





                            <td>
                                @if($user->email=='mtmpwsz@gmail.com')
                            @else
                                <a href="/users/{{ $user->id }}/delete"  class="btn btn-danger btn-sm float-right">Usuń</a>

                                @endif

                                    <a href="/users/{{ $user->id }}/edit"  class="btn btn-info  btn-sm float-right mr-2">Edytuj</a>

                            </td>

                        </tr>

                        @php
                            $tab++
                        @endphp

                        @endif

                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>


        <div class="card card-default mt-lg-1">

            <div class="card-header">Nauczyciele</div>

            <div class="card-body card-default">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">l.p.</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Imię</th>
                        <th scope="col">E-mail</th>



                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $tab = 1
                    @endphp

                    @foreach($users as $user)
                        @if( $user-> role =='teacher')
                        <tr>
                            <th scope="row"> {{ $tab }} </th>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>



                            <td>
                                <a href="/users/{{ $user->id }}/delete"  class="btn btn-danger btn-sm float-right">Usuń</a>
                                <a href="/users/{{ $user->id }}/edit"  class="btn btn-info  btn-sm float-right mr-2">Edytuj</a>

                            </td>

                        </tr>

                        @php
                            $tab++
                        @endphp

                    @endif

                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>



        <div class="card card-default mt-lg-1">

            <div class="card-header">Uczniowie</div>

            <div class="card-body card-default">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">l.p.</th>
                        <th scope="col">Nazwisko</th>
                        <th scope="col">Imię</th>
                        <th scope="col">E-mail</th>

                        <th scope="col">Klasa</th>
                        <th scope="col">E-mail opiekuna</th>

                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $tab = 1
                    @endphp

                    @foreach($users as $user)
                        @if( $user-> role =='student')
                        <tr>
                            <th scope="row">{{ $tab }}</th>
                            <td>{{ $user->surname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                            <td>{{ $user->class }}</td>
                            <td>{{ $user->parentmail }}</td>

                            <td>
                                <a href="/users/{{ $user->id }}/delete"  class="btn btn-danger btn-sm float-right">Usuń</a>
                                <a href="/users/{{ $user->id }}/edit"  class="btn btn-info  btn-sm float-right mr-2">Edytuj</a>

                            </td>
                        </tr>

                        @php
                            $tab++
                        @endphp

                        @endif

                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>




    </div>


    @endsection