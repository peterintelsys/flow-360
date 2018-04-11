@if ($errors->any())
    <div class="card alert-danger">
        {{ __('messages.errors_form') }}
    </div>
@endif