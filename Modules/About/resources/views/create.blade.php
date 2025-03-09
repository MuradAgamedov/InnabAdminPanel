@extends('layouts.app')

@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Haqqımızda bölməsi əlavə et</h5>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-10">
                <div class="card col-span-2">
                    <div class="card-body">
                        <div>
                            <form enctype="multipart/form-data" method="post" action="{{route('about.store')}}">
                                @csrf
                                <ul class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                                    @php
                                        $isFirst = true;
                                    @endphp
                                    @foreach($languages as $language)
                                        <li class="group {{ $isFirst ? 'active' : ''}}">
                                            <a href="javascript:void(0);" data-tab-toggle="" data-target="{{$language->code}}" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">{{$language->name}}</a>
                                        </li>
                                        @php
                                            $isFirst = false;
                                        @endphp
                                    @endforeach
                                </ul>

                                <div style="border: 1px solid black; padding: 30px" class="mt-5 mb-4 tab-content ">
                                    @php
                                        $isFirst = true;
                                    @endphp
                                    @foreach($languages as $language)
                                        <div class="block tab-pane {{ $isFirst ? 'block' : 'hidden'}}" id="{{$language->code}}">
                                            <div class="mb-3">
                                                <label for="description_{{$language->code}}" class="inline-block mb-2 text-base font-medium">Qısa təsvir ({{$language->code}})</label>
                                                <textarea name="description[{{ $language->code }}]" id="description_{{$language->code}}" class="form-input">{{ old('description.' . $language->code) }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="icon_alt_{{$language->code}}" class="inline-block mb-2 text-base font-medium">İkon üçün Alt mətni ({{$language->code}})</label>
                                                <input type="text" name="icon_alt[{{ $language->code }}]" id="icon_alt_{{$language->code}}" class="form-input" value="{{ old('icon_alt.' . $language->code) }}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image_alt_{{$language->code}}" class="inline-block mb-2 text-base font-medium">Şəkil üçün Alt mətni ({{$language->code}})</label>
                                                <input type="text" name="image_alt[{{ $language->code }}]" id="image_alt_{{$language->code}}" class="form-input" value="{{ old('image_alt.' . $language->code) }}">
                                            </div>
                                        </div>
                                        @php
                                            $isFirst = false;
                                        @endphp
                                    @endforeach
                                </div>

                                <div class="mb-3">
                                    <label for="date" class="inline-block mb-2 text-base font-medium">Tarix<span class="text-red-500">*</span></label>
                                    <input type="text" id="date" name="date" value="{{ old('date' ) }}" class="form-input">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="inline-block mb-2 text-base font-medium">Şəkil</label>
                                    <input name="image" type="file" id="image" class="form-file">
                                </div>
                                <div class="mb-3">
                                    <label for="icon" class="inline-block mb-2 text-base font-medium">İkon</label>
                                    <input name="icon" type="file" id="icon" class="form-file">
                                </div>
                                <button type="submit" class="text-white btn bg-custom-500">
                                    Əlavə et
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('scripts')
            <script>
                document.querySelectorAll('.ckeditortext').forEach((textarea) => {
                    CKEDITOR.replace(textarea);
                });
            </script>
    @endpush
