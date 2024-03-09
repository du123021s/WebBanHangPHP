@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Customer</div>
                </div>

                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id)}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name"
                                class="form-control @error('first_name') is-invalid @enderror"
                                value="{{ old('first_name', $customer->first_name) }}" required>
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name"
                                class="form-control @error('last_name') is-invalid @enderror"
                                value="{{ old('last_name', $customer->last_name) }}" required>
                            @error('last_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="last_name"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $customer->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone', $customer->phone) }}" required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address"
                                class="form-control @error('address') is-invalid @enderror"
                                value="{{ old('address', $customer->address) }}" required>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="avatar">Avatar</label>
                            <input type="file" name="avatar" id="avatar"
                                class="form-control-file @error('avatar') is-invalid @enderror"
                                value="{{ old('avatar', $customer->avatar) }}" required>
                            @error('avatar')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="user_id">User ID</label>
                            <input type="number" name="user_id" id="user_id"
                                class="form-control @error('user_id') is-invalid @enderror"
                                value="{{ old('user_id', $customer->user_id) }}" required>
                            @error('user_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
