@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="card">
    <span class="tag">About this project</span>
    <h1>About PC Parts POS</h1>
    <p>PC Parts POS is a foundational web application developed with Laravel for IT0049 — Web System Technologies.</p>
    <p>This TFA6 version replaces the static PHP arrays from TFA5 with MySQL migrations, a seeder, Eloquent models, and database-backed Customer Accounts and User Accounts pages.</p>
    <h2>Learning goals</h2>
    <p>Practice Laravel migrations, database seeding, Eloquent models, controller-to-view data flow, and Blade loops.</p>
    <p><strong>Developer:</strong> Lance Kevin Famoleras</p>
</div>
@endsection
