@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<div class="card">
    <span class="tag">Eloquent database records</span>
    <h1>User Accounts</h1>
    <p>User records are retrieved from MySQL through the User Eloquent model.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>#</th><th>Username</th><th>Full Name</th></tr>
            </thead>
            <tbody>
                @if ($users->isNotEmpty())
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->full_name }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="3">No users found. Run the TFA6 seeder.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
    <p class="record-count">Total users: {{ $users->count() }}</p>
</div>
@endsection
