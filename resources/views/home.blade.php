 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Panel</div>

                <div class="card-body">
                    @if (auth()->user()->isAdmin())
                        <div class="alert alert-dark text-center" role="alert">
                            <a href="{{ route('users.index') }}">Zarządzaj użytkownikami</a>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
