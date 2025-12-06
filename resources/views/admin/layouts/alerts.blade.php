@if(session()->has('success'))
    <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
        {{ session()->get('success') }}
        <button class="btn-close"
                type="button"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-info dark alert-dismissible fade show" role="alert">
        {{ session()->get('info') }}
        <button class="btn-close"
                type="button"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
@elseif(session()->has('warning'))
    <div class="alert alert-warning dark alert-dismissible fade show" role="alert">
        {{ session()->get('warning') }}
        <button class="btn-close"
                type="button"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
@elseif (session()->has('error'))
    <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
        {{ session()->get('error') }}
        <button class="btn-close"
                type="button"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
@endif
