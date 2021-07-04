@extends('admin.layouts.main')

@section('main-content')

    @if (session('success'))
        <small class="toast">
            {{session('success')}}
        </small>
    @endif

<section class="cards">



@forelse ($ideas as $idea)
    <section class="card">
        <section class="header-card">
            <h1>{{$idea->title}}</h1>
            <span>Author: {{$idea->author}}</span>
        </section>
        <section class="description">
            <p class="text">{{$idea->description}}</p>
        </section>
        <section class="body-card">
            <button class="btn-body">Level {{$idea->level}}</button>
            <a class="btn-body" href="{{$idea->example}}" target="_blank" type="button"><img class="icon" src="{{asset('/storage/icons/code.svg')}}" alt="">Example</a>
        </section>
        <section class="footer-card">
            <h2>Conect with me</h2>
            <section class="footer-buttons">
                <a class="btn-body footer-button" href="{{$idea->github}}" target="_blank" type="button">
                    <img class="icon" src="{{asset('/storage/icons/github.svg')}}" alt="">
                    Github
                </a>
                <button class="btn-body footer-button">
                    <img class="icon" src="{{asset('/storage/icons/discord.svg')}}" alt="">
                    #{{$idea->discord}}
                </button>
            </section>
        </section>
    </section>

@empty

    <h1>No ideas found...</h1>

@endforelse

</section>

@endsection
