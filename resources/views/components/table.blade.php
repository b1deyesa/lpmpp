    {{-- Content --}}
    <div class="table">
        <table class="{{ $class ?? '' }}">
            @isset($head)
                <thead>
                    <tr>
                        {{ $head }}
                    </tr>
                </thead>
            @endisset
    
            @isset($body)
                <tbody>
                    {{ $body }}
                </tbody>
            @endisset
        </table>
    </div>
    
</div>
