<x-layout.app class="dashboard">
    
    {{-- Sidebar --}}
    <section class="dashboard__sidebar">
        <div class="sidebar__container">
            <div class="sidebar__menu">
                <a href="{{ route('dashboard.sambutan.index') }}" class="menu__item">Sambutan</a>
                <a href="{{ route('dashboard.visi-misi.index') }}" class="menu__item">Visi Misi</a>
                <a href="{{ route('dashboard.sejarah.index') }}" class="menu__item">Sejarah Singkat</a>
                <a href="{{ route('dashboard.struktur-organisasi.index') }}" class="menu__item">Struktur Organisasi dan Personalia</a>
                <a href="{{ route('dashboard.tugas-fungsi.index') }}" class="menu__item">Tugas dan Fungsi</a>
                <hr class="menu__line">
                <a href="{{ route('dashboard.tenaga-pengelola.index') }}" class="menu__item">Tenaga Pengelola</a>
                <a href="{{ route('dashboard.pusat.index') }}" class="menu__item">Pusat</a>
                <hr class="menu__line">
                @if($pusats->count() > 0) <a href="{{ route('dashboard.pusat.portal.index', ['pusat' => $pusats->first()]) }}" class="menu__item">Portal</a> @endif
            </div>
        </div>
    </section>
    
    {{-- Content --}}
    <section class="dashboard__content">
        <div class="content__container {{ $class }}">
            {{ $slot }}
        </div>
    </section>
    
    {{-- CKEditor --}}
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            
                window.ckeditors = window.ckeditors || {};
            
                document.querySelectorAll('.ckeditor').forEach(el => {
            
                    // Hindari double init
                    if (el.dataset.initialized) return;
                    el.dataset.initialized = true;
            
                    CKEDITOR.ClassicEditor
                        .create(el, {
                            licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Njk0NzE5OTksImp0aSI6ImM2ZjIwZjJlLWYxZDQtNDVlYy05NTBjLWUwNThmNTVlYWVjYyIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjI3YmE3Y2U1In0.wL_5UcYq4c4Zr45dyQaUNF44PHJGDaA4SpWlF-bv5XY9C7DI4QWK1E7ecenhfH0C1FVorYbxJPeHKhlMSFM1yQ',
            
                            plugins: [
                                CKEDITOR.Essentials,
                                CKEDITOR.Paragraph,
                                CKEDITOR.Bold,
                                CKEDITOR.Italic,
                                CKEDITOR.Font,
            
                                CKEDITOR.Table,
                                CKEDITOR.TableToolbar,
                                CKEDITOR.TableProperties,
            
                                CKEDITOR.Image,
                                CKEDITOR.ImageToolbar,
                                CKEDITOR.ImageCaption,
                                CKEDITOR.ImageStyle,
                                CKEDITOR.ImageResize,
                                CKEDITOR.ImageUpload,
            
                                CKEDITOR.SimpleUploadAdapter
                            ],
            
                            toolbar: [
                                'undo', 'redo', '|',
                                'bold', 'italic', '|',
                                'fontFamily', 'fontSize',
                                'fontColor', 'fontBackgroundColor', '|',
                                'insertTable', '|',
                                'uploadImage'
                            ],
            
                            table: {
                                contentToolbar: [
                                    'tableColumn',
                                    'tableRow',
                                    'mergeTableCells',
                                    'tableProperties'
                                ]
                            },
            
                            image: {
                                toolbar: [
                                    'imageStyle:inline',
                                    'imageStyle:block',
                                    'imageStyle:side',
                                    '|',
                                    'toggleImageCaption',
                                    'imageTextAlternative'
                                ]
                            },
            
                            // 🔥 INI YANG PALING PENTING 🔥
                            simpleUpload: {
                                uploadUrl: '/ckeditor/upload',
                                headers: {
                                    'X-CSRF-TOKEN': document
                                        .querySelector('meta[name="csrf-token"]')
                                        .getAttribute('content')
                                }
                            }
            
                        })
                        .then(editor => {
                            window.ckeditors[el.id] = editor;
                        })
                        .catch(error => {
                            console.error('CKEditor init error:', error);
                        });
                });
            });
        </script>   
    @endpush
    
</x-layout.app>