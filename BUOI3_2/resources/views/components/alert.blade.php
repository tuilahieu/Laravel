<!-- resources/views/components/alert.blade.php -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif