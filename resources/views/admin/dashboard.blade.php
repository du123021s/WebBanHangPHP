@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content-header', 'Admin Dashboard')
@section('content')

{{--  Main content  --}}
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Welcome, Admin!</h3>
                </div>

                <div class="box-body">
                    {{--  Add your admin dashboard content here  --}}
                    <p>This is the admin dashboard page.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  End Main content  --}}

@endsection
