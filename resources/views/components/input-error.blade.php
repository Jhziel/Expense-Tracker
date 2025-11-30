@props(['messages'])

@if ($messages)

    @foreach ((array) $messages as $message)
        <p class="text-red-500 text-md mt-1 font-medium">
            {{ $message }}
        </p>
    @endforeach
@endif
