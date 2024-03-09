@if (Session::has('error'))
    <div class="alert laert-danger">
        {{ Session::get('error') }}
    </div>
@endif
