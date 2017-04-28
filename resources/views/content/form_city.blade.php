
@extends('main')

@section('title', trans('app.form_city'))


@section('content')

    @if(isset($name))
        <div>Miestas sukurtas sėkmingai: {{$name}}</div>
    @endif


    {{--<form method="POST" action="{{route('create.cities')}}">--}}
    {{--City:<br>--}}
    {{--<input type="text" name="city" placeholder="write">--}}
    {{--<br>--}}
    {{--<input type="submit" value="Submit">--}}

    {{--{{csrf_field()}}--}}

    {{--</form>--}}


    {!! Form::open(['url' => route('create.city')]) !!}

    {{Form::label('city', 'City')}}
    {{Form::text('city')}}
    {{Form::submit('Add city!')}}

    {!! Form::close() !!}

@endsection
