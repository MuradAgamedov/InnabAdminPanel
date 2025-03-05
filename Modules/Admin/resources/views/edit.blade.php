@extends('layouts.app')

@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">{{$user->name}} adlı istifadəçinin rolunu yeniləyin</h5>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-10">
                <div class="card col-span-2">
                    <div class="card-body">
                        <!-- Əsas form -->
                        <form method="post" action="{{route('admin.admin.update', $user->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3 flex-1 min-w-[150px]">
                                <label for="name" class="inline-block mb-2 text-base font-medium">Ad<span class="text-red-500">*</span></label>
                                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" class="w-full py-3 pl-5 pr-8 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15" required>
                            </div>
                            <div class="mb-3 flex-1 min-w-[150px]">
                                <label for="email" class="inline-block mb-2 text-base font-medium">Email<span class="text-red-500">*</span></label>
                                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" class="w-full py-3 pl-5 pr-8 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15" required>
                            </div>
                            <div class="mb-3 flex-1 min-w-[150px]">
                                <label for="user_type" class="inline-block mb-2 text-base font-medium">Rolu seç<span class="text-red-500">*</span></label>
                                <select id="admin_type" name="user_type" class="w-full py-3 pl-5 pr-8 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15">
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}" @selected($role->id == old('user_type', $user->user_type))>{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Yenilə
                            </button>
                        </form>

                        <form method="post" action="{{route('admin.admin.updatePassword', $user->id)}}" class="mt-5">
                            @method('PATCH')
                            @csrf
                            <div class="mb-3 flex-1 min-w-[150px]">
                                <label for="password" class="inline-block mb-2 text-base font-medium">Yeni Şifrə</label>
                                <input id="password" name="password" type="password" class="w-full py-3 pl-5 pr-8 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15">
                            </div>
                            <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                Şifrəni Yenilə
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection
