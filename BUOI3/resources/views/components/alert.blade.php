@props(['message'])
@if ($message)
    <div style="color: green">
        {{ $message }}
    </div>
@endif
