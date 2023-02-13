@extends('layouts.main-layout')

@section('content')
    <h2>People</h2>

    <ul>
        @foreach ($people as $person)
            <li>
                {{-- Person --}}
                <div>
                    <strong>Username:</strong> {{ $person -> name}}
                </div>
                <div>
                    <strong>Email:</strong> {{$person -> mail}}
                </div>

                {{-- Person Detail --}}
                <div>
                    <strong>Phone:</strong> {{ $person -> personDetail -> phone}}
                </div>
                <div>
                    <strong>Address:</strong> {{ $person -> personDetail -> address}}
                </div>

                <hr>

                <h4>Number of posts: {{$person -> posts -> count()}}</h4>
                @foreach ($person -> posts as $post)
                    <h5>{{$post -> title}}</h5>
                    <p>{{$post -> body}}</p>
                @endforeach
            </li> 
            <hr>   
        @endforeach
    </ul>
@endsection