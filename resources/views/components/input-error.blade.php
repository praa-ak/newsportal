@props(['messages'])

@if ($messages)
     <div {{ $attributes->merge(['class' => 'text-danger']) }}>
        @foreach ((array) $messages as $message)
            <div>{{ $message }}</div>
        @endforeach
     </div>
@endif
