<section class="footer">
    
    {{-- Footer --}}
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__col">
                <h2 class="footer__title">{{ $website->jumbotron_title }}</h2>
                @if($website->address)<p>{!! nl2br(e($website->address)) !!}</p>@endif
                <ul>
                    @if($website->phone)<li><a href="https://wa.me/{{ $website->phone }}"><i class="fa-brands fa-whatsapp"></i>{{ $website->phone }}</a></li>@endif
                    @if($website->email)<li><a href="mailto:{{ $website->email }}"><i class="fa-regular fa-envelope"></i>{{ $website->email }}</a></li>@endif
                    @if($website->fax)<li><a href="tel:{{ $website->fax }}"><i class="fa-solid fa-fax"></i>{{ $website->fax }}</a></li>@endif
                </ul>
            </div>
            <div class="footer__col">
                <div class="footer__logo">
                    <img src="{{ asset('assets/img/logo-unpatti.png') }}" alt="Logo UNPATTI">
                    <img src="{{ asset('assets/img/logo-lpmpp.png') }}" alt="Logo LPMPP">
                    <img src="{{ asset('assets/img/logo-dikstis.png') }}" alt="Logo DIKSTIS">
                    <img src="{{ asset('assets/img/logo-blu.png') }}" alt="Logo BLU">
                </div>
                @if ($sambutan?->body)
                    <p>
                        @php
                            $text  = html_entity_decode($sambutan->body);
                            $clean = trim(preg_replace('/\s+/u', ' ', strip_tags($text)));
                            $words = Str::wordCount($clean);
                        @endphp
                        {{ Str::words($clean, 50) }}
                    </p>
                @endif
            </div>
        </div>
    </footer>
    
    {{-- Copyright --}}
    <footer class="copyright">
        <div class="copyright__container">
            © Hak Cipta 2026 - Lembaga Penjaminan Mutu dan Pengembangan Pembelajaran (LPMPP) - Universitas Pattimura | Konten terakhir dimutakhirkan {{ $website->created_at->translatedFormat('d F Y') }}
        </div>
    </footer>
    
</section>