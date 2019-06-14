@extends('layouts.adminapp')

@section('admincontent')

    <div class="container">


        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        <div class="float-left">{{ __('Zarejestruj użytkownika') }}</div>

                        <div><a href="{{ route('users.index') }}" class=" btn btn-dark float-right">Powrót</a></div>



                        </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Imię') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko') }}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Rola') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <select class="custom-select" id="role">--}}
{{--                                        <option selected>wybierz</option>--}}
{{--                                        <option value="student">Uczeń</option>--}}
{{--                                        <option value="teacher">Nauczyciel</option>--}}
{{--                                    </select>--}}
{{--                                    </div>--}}


{{--                                </div>--}}

                            <?php  $classes= App\Clas::all()  ?>

                            <div class="form-group-row">



                                <div >

                                    <select name="class" id="class" class="form-control align-middle mb-4 col-md-7" >
                                        <option selected>Wybierz klasę</option>
                                        <option value="">Brak</option>
                                        @foreach($classes as $class)



                                        <option value="{{ $class->id }}">{{ $class->name }}</option>


                                            @endforeach
                                    </select>



                                </div>
                            </div>

                            <div class="form-group-row">



                                <div >

                                    <select name="role" id="role" class="form-control align-middle mb-4 col-md-7" >
                                        <option selected>Wybierz Funkcję</option>
                                        <option value="">Brak</option>
                                        <option value="admin">Admin</option>
                                        <option value="teacher">Nauczyciel</option>
                                        <option value="student">Uczeń</option>



                                    </select>



                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Funkcja') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="role" type="text" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>--}}

{{--                                    @error('role')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="input-group mb-3">--}}
{{--                                <div class="input-group-prepend">--}}

{{--                                </div>--}}
{{--                                <select class="custom-select" id="role[]"  name="role[]" >--}}
{{--                                    <option selected>Choose...</option>--}}
{{--                                    <option value="admin">Admin</option>--}}
{{--                                    <option value="teacher">Teacher</option>--}}
{{--                                    <option value="student">Student</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Klasa') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}"  autofocus>--}}

{{--                                    @error('class')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}





                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adres E-mail użytkownika') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="parentmail" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail opiekuna') }}</label>

                                <div class="col-md-6">
                                    <input id="parentmail" type="email" class="form-control @error('email') is-invalid @enderror" name="parentmail" value="{{ old('email') }}" >

                                    @error('parentmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>





                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Potwierdź hasło') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Zarejestruj') }}
                                    </button>
                                </div>
                            </div>

                </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>








@endsection

