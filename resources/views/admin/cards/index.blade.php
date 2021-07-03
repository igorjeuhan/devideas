@extends('admin.layouts.main')

@section('main-content')

<section class="cards">

    <section class="card">
        <section class="header-card">
            <h1>to-do list</h1>
            <span>Author: igorjeuhan</span>
        </section>
        <section class="description">
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin placerat tempor magna, sit amet tincidunt dui ornare in.
            </p>
        </section>
        <section class="body-card">
            <button class="btn-body">Level 3</button>
            <a class="btn-body" href="#" type="button"><img class="icon" src="{{asset('/storage/icons/code.svg')}}" alt=""> Example</a>
        </section>
        <section class="footer-card">
            <h2>Conect with me</h2>
            <section class="footer-buttons">
                <a class="btn-body footer-button" href="#" type="button">
                    <img class="icon" src="{{asset('/storage/icons/github.svg')}}" alt="">
                    Github
                </a>
                <button class="btn-body footer-button">
                    <img class="icon" src="{{asset('/storage/icons/discord.svg')}}" alt="">
                    #1779
                </button>
            </section>
        </section>
    </section>

</section>

@endsection
