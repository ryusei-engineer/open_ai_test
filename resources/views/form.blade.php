@extends('layouts.default')
@section('title', 'フォーム')
@section('content')
<h1>フォームです</h1>
<form action="/submit" method="POST">
@csrf
<input type="text" name="message">  
</form>
@endsection