 @extends('layouts.app')

@section('content')

    @if (auth()->user()->isAdmin())

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header text-center">Panel</div>

                <div class="card-body">

                        <div class="alert alert-dark text-center" role="alert">
                            <a href="{{ route('users.index') }}">Zarządzaj użytkownikami</a>

                        </div>
                    <div class="alert alert-dark text-center" role="alert">
                        <a href="{{ route('classes.index') }}">Przejdź do klas</a>

                    </div>
                    @endif

                    @if(auth()->user()->isTeacher())


                        <div class="container col-sm-4">

                            <div class="card card-default">

                                <div class="card-header text-center">
                                    <a href="{{ route('classes.index') }}">Przejdź do klas</a>

                                </div>

                            </div>
                        </div>
                    @endif

                        @if(auth()->user()->isStudent())


                            <div class="container col-sm-4">

                                <div class="card card-default">

                                    <div class="card-header text-center">
                                        <a href="{{ route('grades.show', ['grade'=>$user->id]  ) }}">Zobacz oceny</a>

                                    </div>

                                </div>
                            </div>


{{--                        <div class="container col-sm-4">--}}

{{--                            <div class="card card-default">--}}

{{--                                <div class="card-header text-center">--}}
{{--                                    Klasy--}}
{{--                                </div>--}}

{{--                                <div class="card-body">--}}

{{--                                    <div class="list-group list-group-flush">--}}

{{--                                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>1a</b></a>--}}
{{--                                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>1b</b></a>--}}
{{--                                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>2a</b></a>--}}
{{--                                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>1b</b></a>--}}
{{--                                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>3a</b></a>--}}
{{--                                        <a href="" type="button" class="list-group-item list-group-item-action text-xl-center"><b>3b</b></a>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </div>--}}

{{--                            <div class="alert alert-dark text-center" role="alert">--}}
{{--                                <a href="{{ route('users.index') }}">Zarządzaj użytkownikami</a>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                            @endif





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
