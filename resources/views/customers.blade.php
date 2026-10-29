@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<div class="card">
    <span class="tag">Eloquent database records</span>
    <h1>Customer Accounts</h1>
    <p>Customer records are retrieved from MySQL through the Customer Eloquent model.</p>

    <div class="table-wrap">
        <table>
            <thead>
                <tr><th>#</th><th>Full Name</th><th>Email</th><th>Phone</th></tr>
            </thead>
            <tbody>
                @if ($customers->isNotEmpty())
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->full_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone ?? '—' }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr><td colspan="4">No customers found. Run the TFA6 seeder.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
    <p class="record-count">Total customers: {{ $customers->count() }}</p>
</div>
@endsection
