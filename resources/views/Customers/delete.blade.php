@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Confirm Delete
                    </div>

                    <div class="card-body">
                        <h5>Are you sure you want to delete this customer?</h5>
                        <p><strong>Customer Name:</strong>{{ $customer->first_name }} {{ $customer->last_name }}</p>
                        <form action="{{ route('customers.destroyConfirmed', $customer->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
