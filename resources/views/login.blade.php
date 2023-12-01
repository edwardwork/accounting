@extends('layout')

@section('content')
    <div>
        <form action="{{ route('login') }}" method="POST">
            <input type="email" name="email">
            <button type="submit">Send</button>
        </form>
    </div>
@endsection
