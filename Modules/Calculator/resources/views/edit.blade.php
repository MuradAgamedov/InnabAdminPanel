@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Calculator məlumatlarını redaktə et</h5>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-10">
            <div class="card col-span-2">
                <div class="card-body">
                    <div>
                        <form enctype="multipart/form-data" method="post" action="{{route('calculator.update', $model->id)}}">
                            @csrf
                            @method('PATCH')

                            <div style="border: 1px solid black; padding: 30px" class="mt-5 mb-4 tab-content ">
                                <div class="mt-5 tab-content ">

                                    <div class="mb-3">
                                        <label for="where" class="inline-block mb-2 text-base font-medium">Innabda təhsil əmsalı</label>
                                        <input type="text" name="where_innab" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="where_innab" value="{{ old('where_innab', $model->where_innab) }}">
                                    </div>

                                 

                                    <div class="mb-3">
                                        <label for="where_own" class="inline-block mb-2 text-base font-medium">Öz təhsil əmsalı</label>
                                        <input type="text" name="where_own" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="where_own" value="{{ old('where_own', $model->where_own) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="where_other" class="inline-block mb-2 text-base font-medium">Digər müəssisələrdə təhsil əmsalı</label>
                                        <input type="text" name="where_other" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="where_other" value="{{ old('where_other', $model->where_other) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="english_elementry" class="inline-block mb-2 text-base font-medium">İngilis dili (Elementar) əmsalı</label>
                                        <input type="text" name="english_elementry" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="english_elementry" value="{{ old('english_elementry', $model->english_elementry) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="english_medium" class="inline-block mb-2 text-base font-medium">İngilis dili (Orta) əmsalı</label>
                                        <input type="text" name="english_medium" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="english_medium" value="{{ old('english_medium', $model->english_medium) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="english_hard" class="inline-block mb-2 text-base font-medium">İngilis dili (Yüksək) əmsalı</label>
                                        <input type="text" name="english_hard" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="english_hard" value="{{ old('english_hard', $model->english_hard) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="comp_elementry" class="inline-block mb-2 text-base font-medium">Kompüter bacarıqları (Elementar) əmsalı</label>
                                        <input type="text" name="comp_elementry" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="comp_elementry" value="{{ old('comp_elementry', $model->comp_elementry) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="comp_medium" class="inline-block mb-2 text-base font-medium">Kompüter bacarıqları (Orta) əmsalı</label>
                                        <input type="text" name="comp_medium" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="comp_medium" value="{{ old('comp_medium', $model->comp_medium) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="comp_hard" class="inline-block mb-2 text-base font-medium">Kompüter bacarıqları (Yüksək) əmsalı</label>
                                        <input type="text" name="comp_hard" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="comp_hard" value="{{ old('comp_hard', $model->comp_hard) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="experience_0" class="inline-block mb-2 text-base font-medium">Təcrübə (0 il) əmsalı</label>
                                        <input type="text" name="experience_0" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="experience_0" value="{{ old('experience_0', $model->experience_0) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="experience_0_1" class="inline-block mb-2 text-base font-medium">Təcrübə (0-1 il) əmsalı</label>
                                        <input type="text" name="experience_0_1" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="experience_0_1" value="{{ old('experience_0_1', $model->experience_0_1) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="experience_1_3" class="inline-block mb-2 text-base font-medium">Təcrübə (1-3 il) əmsalı</label>
                                        <input type="text" name="experience_1_3" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="experience_1_3" value="{{ old('experience_1_3', $model->experience_1_3) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="experience_3_5" class="inline-block mb-2 text-base font-medium">Təcrübə (3-5 il) əmsalı</label>
                                        <input type="text" name="experience_3_5" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="experience_3_5" value="{{ old('experience_3_5', $model->experience_3_5) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="experience_5_10" class="inline-block mb-2 text-base font-medium">Təcrübə (5-10 il) əmsalı</label>
                                        <input type="text" name="experience_5_10" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="experience_5_10" value="{{ old('experience_5_10', $model->experience_5_10) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="experience_10_plus" class="inline-block mb-2 text-base font-medium">Təcrübə (10+ il) əmsalı</label>
                                        <input type="text" name="experience_10_plus" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500" id="experience_10_plus" value="{{ old('experience_10_plus', $model->experience_10_plus) }}">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Yenilə
                            </button>
                       
                        </form>
                             <div class="mt-5">
                            <h5 class="text-lg font-bold mb-3">Sadə Cədvəl</h5>
                            <table class="min-w-full table-auto border-collapse border border-gray-300">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="border border-gray-300 px-4 py-2 text-left">Sahə adı</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Aid olduğu sahə</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Əmsal</th>
                                        <th class="border border-gray-300 px-4 py-2 text-left">Əməliyyat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($areas as $area)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{$area->area_name}}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{$area->parent_area ? $area->parent_area->area_name : "Müstəqil sahədir"}}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{$area->count}}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <a onClick="return confirm('Sahəni silmək istədiyinizdən əminsinizmi')" href="{{route("calculator.delete", $area->id)}}">sil</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                      <form enctype="multipart/form-data" method="post" action="{{ route('calculator.add_area') }}">
                        @csrf
                        <div class="mb-3 mt-5">
                            <label for="area_type" class="inline-block mb-2 text-base font-medium">Sahə Tipi<span class="text-red-500">*</span></label>
                            <select id="area_type" name="parent_id" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                <option value="">Müstəqil sahədir</option>
                                @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->area_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <ul class="flex flex-wrap mt-5 w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                            @php
                            $isFirst = true;
                            @endphp
                            @foreach($languages as $language)
                            <li class="group {{ $isFirst ? 'active' : ''}}">
                                <a href="javascript:void(0);" data-tab-toggle="" data-target="{{ $language->code }}" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">
                                    {{ $language->name }}
                                </a>
                            </li>
                            @php
                            $isFirst = false;
                            @endphp
                            @endforeach
                        </ul>

                        <div style="border: 1px solid black; padding: 30px" class="mt-5 mb-4 tab-content ">
                            <div class="mt-5 tab-content ">
                                @php
                                $isFirst = true;
                                @endphp
                                @foreach($languages as $language)
                                <div class="block tab-pane {{ $isFirst ? 'block' : 'hidden'}}" id="{{ $language->code }}">
                                    <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-2">
                                        <div class="mb-3">
                                            <label for="inputText1" class="inline-block mb-2 text-base font-medium">Sahə adı ({{ $language->code }})<span class="text-red-500">*</span></label>
                                            <input type="text" id="inputText1" name="professions[{{ $language->code }}]" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        </div>
                                    </div>
                                </div>
                                @php
                                $isFirst = false;
                                @endphp
                                @endforeach
                            </div>
                        </div>
                            <div class="" id="{{ $language->code }}">
                                    <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-2">
                                        <div class="mb-3">
                                            <label for="inputText1" class="inline-block mb-2 text-base font-medium">Sahə əmsalı <span class="text-red-500">*</span></label>
                                            <input type="text" id="inputText1" name="count" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                                        </div>
                                    </div>
                                </div>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            Sahə əlavə et
                        </button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.querySelectorAll('.delete_image').forEach((button) => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const href = this.getAttribute('href');
            Swal.fire({
                title: 'Əminsiniz?',
                text: "Bu şəkli silmək istədiyinizdən əminsiniz?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Bəli, silin!',
                cancelButtonText: 'Xeyr, ləğv et!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = href;
                }
            });
        });
    });
        document.querySelectorAll('[data-tab-toggle]').forEach((tab) => {
        tab.addEventListener('click', function() {
            let target = this.getAttribute('data-target');
            document.querySelectorAll('.tab-pane').forEach((pane) => {
                pane.classList.remove('block');
                pane.classList.add('hidden');
            });
            document.getElementById(target).classList.add('block');
            document.getElementById(target).classList.remove('hidden');
            document.querySelectorAll('.group').forEach((group) => {
                group.classList.remove('active');
            });
            this.parentNode.classList.add('active');
        });
    });
</script>
@endpush
