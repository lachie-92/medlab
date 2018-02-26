@extends('app')

@section('content')

<ul>
    <li><a href="{{ action("Admin\NutraceuticalsController@index") }}">Nutraceuticals</a></li>
</ul>
@endsection

