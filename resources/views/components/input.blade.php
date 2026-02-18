<div class="input {{ $class }}" style="width: {{ $width }}" {{ $attributes }}>
    
    {{-- Label --}}
    @if ($label)
        <label for="{{ $id }}" class="input__label">
            {{ $label }}
            @if ($required)
                <span class="label__required">*</span>
            @endif
        </label>
    @endif
    
    {{-- Inputs --}}
    @switch($type)
        @case('select')
            <div class="select @error($name) error @enderror">
                <select
                    id="{{ $id }}"
                    name="{{ $name }}"
                    @if($class) class="{{ $class }}" @endif
                    @if($wire) wire:model.live="{{ $wire }}" @endif
                    {{ $attributes }}
                    >
                    @if($placeholder) <option value="" selected>{{ $placeholder }}</option> @endif
                    @foreach ($options as $key => $option)
                        <option value="{{ $key }}" @selected($key === old($name, $value))>{{ $option }}</option>
                    @endforeach
                </select>
            </div>
            @break
        @case('select-search')
            @if(isset($__livewire))
                <div
                    x-data="{
                        options: @js($options),
                        q: @entangle($wire.'.value'),
                        k: @entangle($wire.'.key'),
                        isFocused: false,
                
                        filtered() {
                            if (!this.q) return Object.entries(this.options);
                            return Object.entries(this.options)
                                .filter(([_, v]) =>
                                    v.toLowerCase().includes(this.q.toLowerCase())
                                );
                        },
                
                        choose(key, val) {
                            this.k = key;
                            this.q = val;
                            this.isFocused = false;
                
                            $wire.set('{{ $wire }}.key', key);
                            $wire.set('{{ $wire }}.value', val);
                        },
                
                        blurHandler() {
                            setTimeout(() => this.isFocused = false, 150);
                
                            let f = Object.entries(this.options)
                                .find(([_, v]) => v.toLowerCase() === this.q.toLowerCase());
                
                            if (f) {
                                this.k = f[0];
                                this.q = f[1];
                
                                $wire.set('{{ $wire }}.key', f[0]);
                                $wire.set('{{ $wire }}.value', f[1]);
                            } else {
                                this.k = '';
                                $wire.set('{{ $wire }}.key', '');
                            }
                        }
                    }"
                    class="select-search"
                >
            @else
                <div
                    x-data="{
                        options: @js($options),
                        q: '',
                        k: '',
                        isFocused: false,
                
                        filtered() {
                            if (!this.q) return Object.entries(this.options);
                            return Object.entries(this.options)
                                .filter(([_, v]) =>
                                    v.toLowerCase().includes(this.q.toLowerCase())
                                );
                        },
                
                        choose(key, val) {
                            this.k = key;
                            this.q = val;
                            this.isFocused = false;
                        },
                
                        blurHandler() {
                            setTimeout(() => this.isFocused = false, 150);
                        }
                    }"
                    class="select-search"
                >
            @endif
            
                <!-- Input text (label) -->
                <input
                    type="text"
                    x-model="q"
                    @focus="isFocused = true"
                    @input="isFocused = true"
                    @blur="blurHandler"
                    placeholder="{{ $placeholder }}"
                    class="{{ $class }}"
                >
            
                <!-- Input hidden (ID) -->
                <input
                    type="hidden"
                    x-model="k"
                    name="{{ $name }}"
                >
            
                <ul x-show="isFocused && filtered().length" x-transition>
                    <template x-for="[key, val] in filtered()" :key="key">
                        <li @mousedown.prevent="choose(key, val)" x-text="val"></li>
                    </template>
                </ul>
            </div>
            @break
        @case('select-search-multiple')
            @if(isset($__livewire))
                <div
                    x-data="{
                        options: @js($options),
                        q: '',
                        isFocused: false,
            
                        selected: @entangle($wire.'.value'),
                        selectedKeys: @entangle($wire.'.key'),
            
                        filtered() {
                            return Object.entries(this.options)
                                .filter(([k, v]) =>
                                    !this.selectedKeys.includes(k) &&
                                    v.toLowerCase().includes(this.q.toLowerCase())
                                );
                        },
            
                        choose(key, val) {
                            this.selected[key] = val;
                            this.selectedKeys.push(key);
                            this.q = '';
                            this.isFocused = false;
            
                            $wire.set('{{ $wire }}.key', this.selectedKeys);
                            $wire.set('{{ $wire }}.value', this.selected);
                        },
            
                        remove(key) {
                            delete this.selected[key];
                            this.selectedKeys = this.selectedKeys.filter(k => k !== key);
            
                            $wire.set('{{ $wire }}.key', this.selectedKeys);
                            $wire.set('{{ $wire }}.value', this.selected);
                        },
            
                        blurHandler() {
                            setTimeout(() => {
                                let match = Object.values(this.options)
                                    .some(v => v.toLowerCase() === this.q.toLowerCase());
            
                                if (!match) this.q = '';
                                this.isFocused = false;
                            }, 150);
                        }
                    }"
                    class="select-search-multiple"
                >
            @else
                <div
                    x-data="{
                        options: @js($options),
                        q: '',
                        isFocused: false,
            
                        selected: {},
                        selectedKeys: [],
            
                        filtered() {
                            return Object.entries(this.options)
                                .filter(([k, v]) =>
                                    !this.selectedKeys.includes(k) &&
                                    v.toLowerCase().includes(this.q.toLowerCase())
                                );
                        },
            
                        choose(key, val) {
                            this.selected[key] = val;
                            this.selectedKeys.push(key);
                            this.q = '';
                            this.isFocused = false;
                        },
            
                        remove(key) {
                            delete this.selected[key];
                            this.selectedKeys = this.selectedKeys.filter(k => k !== key);
                        },
            
                        blurHandler() {
                            setTimeout(() => {
                                let match = Object.values(this.options)
                                    .some(v => v.toLowerCase() === this.q.toLowerCase());
            
                                if (!match) this.q = '';
                                this.isFocused = false;
                            }, 150);
                        }
                    }"
                    class="select-search-multiple"
                >
            @endif
            
                <input
                    type="text"
                    x-model="q"
                    @focus="isFocused = true"
                    @input="isFocused = true"
                    @blur="blurHandler"
                    placeholder="{{ $placeholder }}"
                    class="{{ $class }}"
                >
            
                <div class="selected-wrapper">
                    <template x-for="(val, key) in selected" :key="key">
                        <span class="chip">
                            <span x-text="val"></span>
                            <button type="button" @click="remove(key)">×</button>
                        </span>
                    </template>
                </div>
            
                <template x-for="key in selectedKeys" :key="key">
                    <input type="hidden" name="{{ $name }}[]" :value="key">
                </template>
            
                <ul x-show="isFocused && filtered().length" x-transition>
                    <template x-for="[key, val] in filtered()" :key="key">
                        <li @mousedown.prevent="choose(key, val)" x-text="val"></li>
                    </template>
                </ul>
            
            </div>
            @break
        @case('switch')
            <label class="switch">
                <input 
                    type="checkbox"
                    value="{{ old($name, $value) }}"
                    id="{{ $id }}"
                    @if($wire) wire:model.live="{{ $wire }}" @endif
                    @if($name) name="{{ $name }}" @endif
                    @if($placeholder) placeholder="{{ $placeholder }}" @endif
                    @required($required)
                    >
                <span class="slider round"></span>
            </label>
            @break
        @case('checkbox')
            <span class="checkbox {{ $class }} @error($name) error @enderror">
                <input type="hidden" name="{{ $name }}" value="">
                @forelse ($options as $key => $option)
                    <label for="{{ $id }}-{{ $key }}-{{ $uniqid }}">
                        <input
                            type="checkbox"
                            id="{{ $id }}-{{ $key }}-{{ $uniqid }}" 
                            name="{{ $name }}[{{ $key }}]"
                            value="{{ $key }}"
                            @if($wire) wire:model.live="{{ $wire }}.{{ $key }}" @endif
                            @checked(in_array($key, (array) old($name, json_decode($value ?? '[]', true))))
                            {{ $attributes }}
                        >
                        {{ $option }}
                    </label>
                @empty
                    <small class="empty" style="text-align: center">No content available</small>
                @endforelse
            </span>
            @break
        @case('radio')
            <span class="radio {{ $class }} @error($name) error @enderror">
                <input type="hidden" name="{{ $name }}" value="">
                @foreach ($options as $key => $option)
                    <label for="{{ $id }}-{{ $key }}-{{ $uniqid }}">
                        <input
                            type="radio"
                            id="{{ $id }}-{{ $key }}-{{ $uniqid }}" 
                            name="{{ $name }}"
                            value="{{ $key }}"
                            @if($wire) wire:model.live="{{ $wire }}" @endif
                            @checked(in_array($key, (array) old($name, json_decode($value ?? '[]', true))))
                            {{ $attributes }}
                        >
                        {{ $option }}
                    </label>
                @endforeach
            </span>
            @break
        @case('textarea')
            <textarea 
                id="{{ $id }}" 
                @if($name) name="{{ $name }}" @endif
                @if($placeholder) placeholder="{{ $placeholder }}" @endif
                @required($required)
                autocomplete="off"
                autofocus
                style="height: {{ $height }}"
                {{ $attributes }}
                >{!! old($name, $value) !!}</textarea>
            @break
        @case('editor')
            <div class="editor">
                <textarea  
                    id="editor-{{ $id }}" 
                    class="editor-input"
                    name="{{ $name }}"
                    @if($wire) wire:model="{{ $wire }}" @endif
                    data-toolbar="{{ $toolbar }}"
                    >{!! old($name, $value) !!}</textarea>
            </div>
            @break
        @case('image')
            @if (!empty($wire))
                <div class="image {{ $class }}">
                    <div class="image__preview {{ !empty($this->{$wire}) ? 'has-image' : 'is-empty' }}">
                        @php
                            $file = $this->{$wire} ?? null;

                            if (is_array($file)) {
                                $file = $file[0] ?? null;
                            }
                        @endphp

                        @if ($file && method_exists($file, 'temporaryUrl'))
                            <img
                                src="{{ $file->temporaryUrl() }}"
                                alt="Preview"
                                class="image__value"
                            >
                        @elseif (is_string($file))
                            <img
                                src="{{ asset('storage/'.$file) }}"
                                alt="Preview"
                                class="image__value"
                            >
                        @else
                            <small class="image__empty">
                                <i class="fa-regular fa-image"></i>
                            </small>
                        @endif
                    </div>
                    <input
                        type="file"
                        id="{{ $id }}"
                        name="{{ $name }}"
                        wire:model.live="{{ $wire }}"
                        accept="image/*"
                        @required($required)
                        class="image__input @error($name) error @enderror"
                        {{ $attributes }}
                    >
                </div>
            @else
                <div class="image">
                    <div class="image__preview {{ $value ? 'has-image' : 'is-empty' }}">
                        <img
                            src="{{ $value ? asset('storage/'.$value) : '' }}"
                            alt="Preview"
                            class="image__value"
                        >
                        <small class="image__empty">
                            <i class="fa-regular fa-image"></i>
                        </small>
                    </div>
            
                    <input
                        type="file"
                        id="{{ $id }}"
                        name="{{ $name }}"
                        accept="image/*"
                        data-image-preview
                        @required($required)
                        class="image__input @error($name) error @enderror"
                        {{ $attributes }}
                    >
                </div>
            @endif
            @break
            @case('file')
                <div class="file__upload" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true; $dispatch('disable-actions', true)" x-on:livewire-upload-finish="uploading = false; progress = 0; $dispatch('disable-actions', false)" x-on:livewire-upload-error="uploading = false; $dispatch('disable-actions', false)" x-on:livewire-upload-progress="progress = $event.detail.progress" style="margin-bottom: 15px;">
                    <input 
                        type="file"
                        id="{{ $id }}"
                        @if($wire) wire:model="{{ $wire }}" @endif
                        @if($name) name="{{ $name }}" @endif
                        class="@error($name) error @enderror"
                        {{ $attributes }}
                    >
                    <div x-show="uploading" style="display: none;">
                        <div style="width: 100%; background: #e9ecef; height: 10px; border-radius: 5px; overflow: hidden; margin-bottom: .3em;">
                            <div style="background: #007bff; height: 100%; transition: width 0.3s;" :style="`width: ${progress}%`"></div>
                        </div>
                        <small class="text-muted" style="font-size: .8em; opacity: 50% !important;">Upload: <span x-text="progress"></span>%</small>
                    </div>
                </div>
                @break
        @default
            <input 
                type="{{ $type }}"
                value="{{ old($name, $value) }}"
                id="{{ $id }}"
                @if($wire) wire:model.live="{{ $wire }}" @endif
                @if($name) name="{{ $name }}" @endif
                @if($placeholder) placeholder="{{ $placeholder }}" @endif
                @required($required)
                autocomplete="off"
                class="@error($name) error @enderror"
                autofocus
                {{ $attributes }}
                >
    @endswitch
    
    {{-- Error --}}
    @if ($errors->has($name) || $errors->has($name . '.key'))
        <small class="input__error">
            {{ $errors->first($name) ?: $errors->first($name . '.key') }}
        </small>
    @endif
    
</div>    
