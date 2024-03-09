@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Customer Details
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $customer->firstname }} {{ $customer->last_name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $customer->email }}</td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td>{{ $customer->phone }}</td>
                        </tr>

                        <tr>
                            <th>Address</th>
                            <td>{{ $customer->address }}</td>
                        </tr>

                        <tr>
                            <th>User ID</th>
                            <td>{{ $customer->user_id }}</td>
                        </tr>

                    </tbody>
                </table>

                <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
@endsection
