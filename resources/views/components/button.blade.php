@switch($type)
    @case('link')
        <a class="button{{ $class }}" href="{{ $href }}">{{ $slot }}</a>
        @break
    @default
        <button
            class="button{{ $class }}"
            type="{{ $type }}"
            @if($wire) wire:click="{{ $wire }}" @endif
            @if($id) id="{{ $id }}" @endif
            x-data="{ isUploading: false }" 
            x-on:disable-actions.window="isUploading = $event.detail"
            x-bind:disabled="isUploading"
            x-bind:class="{ 'opacity-50 cursor-not-allowed': isUploading }"
            {{ $attributes }}
            >{{ $slot }}</button>
@endswitch