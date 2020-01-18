@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                The the Quiz
            </div>
        </div>

        <div>
                <ul>
                    <li>Translate: {{$translateWord->foreign}}</li>
                </ul>

        </div>

        <div class="container">
            <form method="POST" action='{{ route('translateWords.verifyAnswer', $translateWord) }}'>
                @csrf
                <div id="field1">
                    <label>Answer</label>
                    <input type="text" name="answer">
                    @error('answer')
                    <p class="help is-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit">OK</button>
            </form>

            //Informacja o dobrej odpowiedzi
            //przycisk do kolejengo quizu
        </div>
    </div>
@endsection
