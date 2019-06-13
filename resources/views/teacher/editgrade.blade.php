{{--@extends('layouts.teacherapp')--}}

{{--@section('teachercontent')--}}

{{--    <div class="container">--}}


{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Edytuj użytkownika') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{ route('grades.update', ['grade'=>$username.$subjectname, 'user'=>$user,--}}
{{--                        'subject'=>$subject, 'mark'=>$mark->id]) }}">--}}
{{--                            @csrf--}}

{{--                            @method('PUT')--}}

{{--                            @php(--}}

{{--                            $selname=1--}}
{{--                            )--}}

{{--                            @foreach($marks as $mark)--}}

{{--                                    <select name="{{ $selname }}" id="{{ $mark->id }}" class="form-control align-middle mb-4 col-md-7" >--}}
{{--                                        <option selected value="{{ $mark->mark }}">{{ $mark->mark }}</option>--}}
{{--                                        <option value="">Brak</option>--}}
{{--                                        <option value="1,0">1,0</option>--}}
{{--                                        <option value="1,5">1,5</option>--}}
{{--                                        <option value="1,75">1,75</option>--}}
{{--                                        <option value="2,0">2,0</option>--}}
{{--                                        <option value="2,5">2,5</option>--}}
{{--                                        <option value="2,75">2,75</option>--}}
{{--                                        <option value="3,0">3,0</option>--}}
{{--                                        <option value="3,5">3,5</option>--}}
{{--                                        <option value="3,75">3,75</option>--}}
{{--                                        <option value="4,0">4,0</option>--}}
{{--                                        <option value="4,5">4,5</option>--}}
{{--                                        <option value="4,75">4,75</option>--}}
{{--                                        <option value="5,0">5,0</option>--}}
{{--                                        <option value="5,5">5,5</option>--}}
{{--                                        <option value="5,75">5,75</option>--}}



{{--                                        @php($selname++)--}}



{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                @endforeach--}}

{{--                            <button type="submit" class="btn btn-primary">{{ __('Edytuj') }}--}}
{{--                            </button>--}}

{{--                            </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    </div>--}}


{{--    @endsection--}}