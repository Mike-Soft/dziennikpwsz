@extends('layouts.teacherapp')

@section('teachercontent')

    <div class="container">






{{--        <div class="position-relative float-left">--}}
{{--            <a href="{{ route('users.create') }}" class="btn btn-success float-left">Dodaj użytkownika</a>--}}
{{--        </div>--}}

        <div class="card card-default mt-lg-1">



            <div class="card-header text-xl-center">
                <div class="float-right">
                <a href="/classes/{{ $subid }}" class="btn btn-dark">Wróć do przedmiotów</a>
                </div>

                <div class="float-left">
                <b>Przedmiot: {{ $sub->name }} <br></br>Klasa {{ $users->first()->class }} </b>
                </div>

            </div>
            <div class="card-body card-default">

                <table class="table align-content-start table-fixed table-bordered pl-0">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col" style="width: 2%">l.p.</th>
                        <th  class="text-center" scope="col" style="width: 20%">Nazwisko</th>
                        <th class="text-center" scope="col" style="width: 8%">Imię</th>

                        @for($i=1;$i<11;$i++)
                        <th scope="col" class="text-center" style="width: 7%">{{$i}} </th>

                            @endfor



                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $tab = 1
                    @endphp

                    @foreach($users as $user)
{{--                        @if( $user-> class =='')--}}

                            <tr>
                                <th scope="row"  class="text-center">{{ $tab }}</th>
                                <td class="text-center"><b>{{ $user->surname }}</b></td>
                                <td class="text-center"><b>{{ $user->name }}</b></td>




{{--                                @php--}}
{{--                                        $average=0--}}
{{--                                @endphp--}}

                                        @foreach($marks as $mark)



                                            @if($mark->user_id == $user->id)

                                                <td class="text-center">{{ $mark->mark }}</td>




                                                @endif

                                @endforeach
                                </tr>












                            <tr>
                                <td></td>





                                <td class="align-content-center">
{{--                                    {{$userid = $user->id}}--}}
{{--                                    {{ $subjectid = $sub->id }}--}}
                                    <form method="POST" class=" align-content-center" action="{{ route('grades.new', ['user'=>$user->id, 'subject'=>$sub->id , 'subname'=>$sub->name,  'class'=> $users->first()->class])}}">
                                    @csrf

{{--                                        {{$userid = $user->id}}--}}
{{--                                        {{ $subjectid = $sub->id }}--}}

                                        <div class="form-row ">
                                            <div class="col-auto">
{{--                                                <label class="sr-only" name="userid" id="userid" for="userid"></label>--}}
{{--                                                <label class="sr-only" name="subjectid" id="subjectid" for="subjectid"> {{$sub->id }}</label>--}}
{{--                                                <input type="hidden" value={{$user->id}} name="userid">--}}
{{--                                                <input type="hidden" value={{$sub->id}} name="subjectid">--}}
{{--                                                <input type="text" class="form-control mb-2 w-25" id="note" name="note"  placeholder="Jane Doe">--}}
                                                <select name="note" id="note" class="form-control align-middle" >
                                                    <option selected>Ocena</option>

                                                    <option value="1,0">1,0</option>
                                                    <option value="1,5">1,5</option>
                                                    <option value="1,75">1,75</option>
                                                    <option value="2,0">2,0</option>
                                                    <option value="2,5">2,5</option>
                                                    <option value="2,75">2,75</option>
                                                    <option value="3,0">3,0</option>
                                                    <option value="3,5">3,5</option>
                                                    <option value="3,75">3,75</option>
                                                    <option value="4,0">4,0</option>
                                                    <option value="4,5">4,5</option>
                                                    <option value="4,75">4,75</option>
                                                    <option value="5,0">5,0</option>
                                                    <option value="5,5">5,5</option>
                                                    <option value="5,75">5,75</option>




                                                </select>
                                            </div>


{{--                                            <div class="col-auto">--}}
                                                <button type="submit" class="btn btn-primary btn-sm w-auto">Wystaw</button>
{{--                                            </div>--}}
                                        </div>




                                    </form>
                                </td>

{{--                                <form method="POST" class=" align-content-center" action="{{ route('grades.update', [ 'subject'=>$sub->id , 'subname'=>$sub->name,  'class'=> $users->first()->class])}}">--}}
{{--                                    @csrf--}}
{{--                                    @method('PUT')--}}

                                <td class="text-center">



                                </td>


                                @foreach($marks as $mark)

                                    @if($mark->user_id == $user->id)

                                        <td class="text-center p-1 align-content-center">

                                                <div class="p-0 m-0">

                                            <form method="POST" class=" align-content-center" action="{{ route('grades.update', ['grade'=>$mark->id, 'user'=>$user->id, 'subject'=>$sub->id , 'subname'=>$sub->name,  'class'=> $users->first()->class])}}">
                                                @csrf
                                                @method('PUT')



{{--                                            <input type="hidden" name="gradeid" value="{{$mark->id}}" >--}}
{{--                                                <input type="hidden" name="userid" value="{{ $user->id }}" >--}}

                                                <select name="noteedit" id="noteedit" class=" btn-mini " style="margin: 1"  >
                                                    <option selected></option>

                                                    <option value="1,0">1</option>
                                                    <option value="1,5">1+</option>
                                                    <option value="1,75">2-</option>
                                                    <option value="2,0">2</option>
                                                    <option value="2,5">2+</option>
                                                    <option value="2,75">3-</option>
                                                    <option value="3,0">3</option>
                                                    <option value="3,5">3+</option>
                                                    <option value="3,75">4-</option>
                                                    <option value="4,0">4</option>
                                                    <option value="4,5">4+</option>
                                                    <option value="4,75">5-</option>
                                                    <option value="5,0">5</option>
                                                    <option value="5,5">5+</option>
                                                    <option value="5,75">6-</option>
                                                    <option value="6">6</option>




                                                </select>


                                                <button type="submit" class="btn btn-primary col-form-label-sm col-sm-1 btn-sm align-bottom"></button>

                                            </form>
            </div>
                                        </td>

                                    @endif

                                @endforeach

{{--                                </form>--}}

                            </tr>

                            @php
                                $tab++
                            @endphp

{{--                        @endif--}}

                    @endforeach

                    </tbody>
                </table>

            </div>






</div>
    </div>
    </div>



    @endsection