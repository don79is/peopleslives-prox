@extends('main')

@section('title', trans('Pomegiai'))



@section('content')

    @if(isset($name))
        <div>Pomegis sukurtas sėkmingai: {{$name}}</div>
    @endif



    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.hobby')]) !!}

    {{Form::label('hobby', 'Hobby')}}
    {{Form::text('hobby')}}
    {{Form::submit('Prideti pomegi!')}}

    {!! Form::close() !!}

@endsection