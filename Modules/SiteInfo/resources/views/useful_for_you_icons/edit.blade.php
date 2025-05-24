@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">İkonu Redaktə Et</h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('useful-for-you-icons.update', $icon->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-5">
                        <div class="mb-3">
                            <label for="type" class="inline-block mb-2 text-base font-medium">Tip</label>
                            <select name="type" id="type" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                @foreach(\Modules\SiteInfo\Models\UsefulForYouIcon::TYPES as $key => $value)
                                    <option value="{{ $key }}" {{ $icon->type == $key ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="icon" class="inline-block mb-2 text-base font-medium">İkon</label>
                            <div id="current-icon" class="mb-2 {{ !$icon->icon ? 'hidden' : '' }}">
                                <div class="flex items-center justify-center p-4 bg-slate-50 dark:bg-zink-600 rounded-lg">
                                    <img src="{{ asset($icon->icon) }}" alt="Current Icon" class="w-24 h-24 object-contain">
                                </div>
                            </div>
                            <input type="file" name="icon" id="icon" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" accept="image/*">
                            <div id="icon-preview" class="mt-2 hidden">
                                <div class="flex items-center justify-center p-4 bg-slate-50 dark:bg-zink-600 rounded-lg">
                                    <img src="" alt="Preview" class="w-24 h-24 object-contain">
                                </div>
                            </div>
                            <small class="text-muted">Yeni ikon yükləmək istəyirsinizsə, fayl seçin. Əks halda, mövcud ikon saxlanılacaq.</small>
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-4">
                        <a href="{{ route('useful-for-you-icons.index') }}" class="btn bg-slate-500 text-white">Ləğv et</a>
                        <button type="submit" class="btn bg-custom-500 text-white">Yadda saxla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.getElementById('icon').addEventListener('change', function(e) {
        const preview = document.getElementById('icon-preview');
        const currentIcon = document.getElementById('current-icon');
        const previewImg = preview.querySelector('img');
        
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                preview.classList.remove('hidden');
                currentIcon.classList.add('hidden');
            }
            
            reader.readAsDataURL(this.files[0]);
        } else {
            preview.classList.add('hidden');
            currentIcon.classList.remove('hidden');
        }
    });
</script>
@endpush 