@extends('admin.layouts.register')

@section('register-content')

    <section class="form">
        <h2>Register a new idea</h2>
        <form action="{{route('save')}}" method="POST">

            @csrf

            <div class="input-group">
                <label for="title"></label>
                <input type="text" id="title" name="title" placeholder="Title of idea" minlength="5" maxlength="16" required>
            </div>
            <div class="input-group">
                <label for="author"></label>
                <input type="text" id="author" name="author" placeholder="Author" minlength="5" maxlength="24" required>
            </div>
            <div class="input-group">
                <label for="description"></label>
                <input type="text" id="description" name="description" placeholder="Description" minlength="10" maxlength="58">
            </div>
            <div class="input-group">
                <label for="level"></label>
                <select name="level" id="level">
                    <option value="1">Easy</option>
                    <option value="2">Medium</option>
                    <option value="3">Hard</option>
                </select>
            </div>
            <div class="input-group">
                <label for="example"></label>
                <input type="url" id="example" name="example" placeholder="Link of code example" maxlength="50">
            </div>
            <div class="input-group">
                <label for="github"></label>
                <input type="url" id="github" name="github" placeholder="Link of your Github" maxlength="50">
            </div>
            <div class="input-group">
                <label for="discord"></label>
                <input type="text" id="discord" name="discord" placeholder="Your user ID on Discord" maxlength="4">
                <small>Only numbers!</small>
            </div>
            <div class="form-buttons">
                <a class="form-button" href="{{route('cards')}}">Cancel</a>
                <button type="submit" class="form-button">Save</button>
            </div>
        </form>
    </section>

@endsection
