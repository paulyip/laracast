@extends('app')
@section('content')

    @if($first == 'John')

    @else

    @endif

<h1>About me: {{$first}} {{$last}}</h1>
    @if (count($people))
    <h3>People I Like:</h3>
    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach

    </ul>
    @endif
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet exercitationem harum, iure molestias porro
    repudiandae soluta vero. Animi atque delectus dolores eaque facere, praesentium qui rerum saepe. Aliquid iusto,
    voluptatibus!</p>
@stop