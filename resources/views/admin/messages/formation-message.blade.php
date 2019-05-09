@if (session('formation_created'))
    <div class="alert alert-success">
        {{ session('formation_created') }}
    </div>
@endif