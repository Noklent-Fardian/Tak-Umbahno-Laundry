@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert soft-bg-danger alert-dismissible fade show">
    {{ $error }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endforeach
@endif