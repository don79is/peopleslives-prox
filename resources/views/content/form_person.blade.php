@extends('main')

@section('title', trans('Zmones'))



@section('content')

    @if(isset($name))
        <div>Zmogus pridetas sėkmingai: {{$name}}</div>
    @endif



    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.person')]) !!}

    {{Form::label('name', 'Person')}}
    {{Form::text('person')}}
    <br>

    {{Form::label('phone', 'Phone')}}
    {{Form::text('phone')}}
    <br>

    {{Form::label('email', 'Email')}}
    {{Form::text('email')}}<br>


    {{Form::select('city', $cities)}}<br>


    @foreach($hobbies as $key => $hobby)<br>
        {{Form::checkbox('hobbies[]',$key)}}
        {{$hobby}}
    @endforeach
    <br/>



    {{Form::submit('Prideti zmogu!')}}<br>



    {!! Form::close() !!}

@endsection