@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Linki yeniləyin</h5>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-10">
            <div class="card col-span-2">
                <div class="card-body">
                    <form method="post" action="{{route('adminmenulinks.update', $menuLink->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-2">
                            <div class="mb-3">
                                <label for="inputText1" class="inline-block mb-2 text-base font-medium">Link adı<span class="text-red-500">*</span></label>
                                <input type="text" id="inputText1" name="name" value="{{old('name', $menuLink->name)}}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            </div>
                        </div>
                        @error('title')
                        <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-2">
                            <div class="mb-3">
                                <label for="inputText1" class="inline-block mb-2 text-base font-medium">Slug<span class="text-red-500">*</span></label>
                                <input type="text" id="inputText1" name="slug" value="{{old('slug', $menuLink->slug)}}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            </div>
                        </div>
                        @error('slug')
                        <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-2">
                            <div class="mb-3">
                                <label for="inputText1" class="inline-block mb-2 text-base font-medium">Səhifə kodu (eyni kateqoriayaya aid səhifələrdə eyni kod olmalıdır)<span class="text-red-500">*</span></label>
                                <input type="text" id="inputText1" name="code" value="{{old('code', $menuLink->code)}}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                            </div>
                        </div>
                        @error('code')

                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            yenilə
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection
