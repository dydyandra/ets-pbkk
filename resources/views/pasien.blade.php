@extends('layouts.template')

@section('container')
    <h1>{{$title}}</h1>
    <hr />
    <div class="row m-2" style="">
        @foreach ($persons as $person)
            <div class="card col-3 mx-1 my-3 d-flex">
                <img src="https://buildyourspechere.com/wp-content/uploads/2020/10/placeholder-image-person-jpg.jpg" class="card-img-top" alt="...">
                <div class="class-body">
                    <h4 class="card-title"><a href="/{{ $field }}/{{ $person->slug }}">{{ $person->nama }}</a></h4>
                    {{-- <p class="card-text"><a href="/{{ $field }}/{{ $person->username }}">Read Author</a></p> --}}
                    <a href="/{{ $field }}/{{ $person->slug }}" class="mb-3 btn btn-dark">List</a>
                </div>
                
            </div>
            {{-- <ul>
            <li>
                <h2><a href="/{{ $field }}/{{ $person->username}}">{{ $person->name }}</a></h2>
            </li>
        </ul> --}}
        @endforeach
    </div>
@endsection
