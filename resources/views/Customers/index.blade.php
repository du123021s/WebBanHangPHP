@extends('layouts.app')

@section('content')
      <div class="container">
            <h1>Customer</h1>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{--  // === search  --}}
            <div class="row justify-content-end">
                <div class="col-6">
                    <form action="{{ route('customers.index') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control"
                                placeholder="Search by first name or last name" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            {{--  // === add customers  --}}
            <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Add New Customer</a>

            {{--  // === display customer list  --}}
            <table class="table table-striped table-hover">
                  <thead>
                        <tr>
                              <th class="table-dark">ID</th>
                              <th class="table-dark">First Name</th>
                              <th class="table-dark">Last Name</th>
                              <th class="table-dark">Email</th>
                              <th class="table-dark">Phone</th>
                              <th class="table-dark">Address</th>
                              <th class="table-dark">Avatar</th>
                              <th class="table-dark">Created At</th>
                              <th class="table-dark">Actions</th>
                        </tr>
                  </thead>
                  <tbody>

                        @foreach ($customers as $customer)
                              <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->first_name }}</td>
                                    <td>{{ $customer->last_name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address}}</td>
                                    <td>
                                        @if ($customer->avatar)
                                            <img src="{{ asset('storage/'.$customer->avatar) }}" alt="Avatar" width="30">
                                        @else
                                            No avatar
                                        @endif
                                    </td>
                                    <td>{{ $customer->created_at }}</td>
                                    <td>
                                          <a href="{{ route('customers.edit', $customer)}}" class="btn btn-primary">
                                                <i class="fas fa-edit"></i>
                                          </a>
                                          <a href="{{ route('customers.destroy', $customer) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                          </a>
                                          <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-success">
                                            <i class="fas fa-eye"></i>
                                          </a>
                                          {{--  <button class="btn btn-danger btn-delete" data-url="{{route('customers.destroy', $customer)}}">
                                                <i class="fas fa-trash"></i>
                                          </button>  --}}
                                    </td>
                              </tr>
                        @endforeach
                  </tbody>
            </table>
            {{$customers->links() }}
      </div>
@stop

