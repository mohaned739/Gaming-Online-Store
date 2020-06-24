@extends('layout.master')
@section('head')
    NEW
@endsection
@section('content')
    {{Form::open(['action'=>'productsController@store','method'=>'POST'])}}
    {{Form::label('name','Name')}}

    {{Form::text('name','',['class'=>''])}} <br>

    {{Form::label('price','Price')}}

    {{Form::text('price','',['class'=>''])}} <br>

    {{Form::label('type','PS4')}}

    {{Form::radio('type','PS4',true)}} <br>

    {{Form::label('type','XBOX')}}

    {{Form::radio('type','XBOX')}} <br>

    {{Form::label('type','PC')}}

    {{Form::radio('type','PC')}} <br>

    {{Form::label('desc','Description')}}

    {{Form::textarea('desc','',['class'=>''])}} <br>

    {{Form::file('image')}}
    {{Form::submit('Add')}}

    {{Form::close()}}
@endsection