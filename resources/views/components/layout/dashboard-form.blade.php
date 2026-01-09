<x-layout.dashboard class="dashboard-form {{ $class }}">
    
    {{-- Header --}}
    <div class="form__header">
        <h1 class="header__title">{{ $title }}</h1>
    </div>
    
    {{-- Slot --}}
    {{ $slot }}
    
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
                            licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3ODAxODU1OTksImp0aSI6IjE5NGRkNGVkLWM2NmItNDFmOS04NTQ1LWQyNmM0MGQ3ZWFjOCIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiXSwiZmVhdHVyZXMiOlsiRFJVUCIsIkUyUCIsIkUyVyJdLCJ2YyI6IjZiYTI1NTlmIn0.hIpAWJuNdH0DdaBXQeQwKKZIB-Z-yJ4F3cdfbiHYux4dqA-g59oZKLRfErjioUDrUe3CQ7oOqsmujVZzn3NJXQ',
            
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
    
</x-layout.dashboard>