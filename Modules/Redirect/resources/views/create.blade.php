@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
        <div class="grow">
            <h5 class="text-16">Yeni Redirect Əlavə Et</h5>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-10">
        <div class="card col-span-2">
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{ route('redirect.store') }}">
                    @csrf

                    <!-- Köhnə URL -->
                    <div class="mb-3">
                        <label for="old_url" class="inline-block mb-2 text-base font-medium">Köhnə URL<span class="text-red-500">*</span></label>
                        <input type="text" id="old_url" name="old_url" value="{{ old('old_url') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>

                    <!-- Yeni URL -->
                    <div class="mb-3">
                        <label for="new_url" class="inline-block mb-2 text-base font-medium">Yeni URL<span class="text-red-500">*</span></label>
                        <input type="text" id="new_url" name="new_url" value="{{ old('new_url') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>

                    <!-- Status Code -->
                    <div class="mb-3">
                        <label for="status_code" class="inline-block mb-2 text-base font-medium">Status Kodu</label>
                        <select name="status_code" id="status_code" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                            <option value="301" {{ old('status_code') == 301 ? 'selected' : '' }}>301 - Mütləq Yönləndirmə (Permanent Redirect)</option>
                            <option value="302" {{ old('status_code') == 302 ? 'selected' : '' }}>302 - Müvəqqəti Yönləndirmə (Temporary Redirect)</option>
                            <option value="307" {{ old('status_code') == 307 ? 'selected' : '' }}>307 - Müvəqqəti Yönləndirmə (HTTP 1.1)</option>
                            <option value="308" {{ old('status_code') == 308 ? 'selected' : '' }}>308 - Mütləq Yönləndirmə (HTTP 1.1)</option>
                        </select>
                    </div>


                    <!-- Submit Düyməsi -->
                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                        Əlavə Et
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
