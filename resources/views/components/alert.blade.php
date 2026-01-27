@if (session()->has('success') || session()->has('warning') || session()->has('error'))
    <div class="alert">
        <span class="alert__container">
            {{ session('success') ?? session('warning') ?? session('error') }}
        </span>
    </div>
@endif
