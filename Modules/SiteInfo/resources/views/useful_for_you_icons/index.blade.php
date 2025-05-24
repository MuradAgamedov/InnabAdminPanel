@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">İkonlar</h5>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('useful-for-you-icons.create') }}" class="btn bg-custom-500 text-white border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                    <i class="ri-add-line align-middle me-1"></i> Yeni İkon
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @forelse($icons as $icon)
                        <div class="card border border-slate-200 dark:border-zink-500">
                            <div class="card-body">
                                <div class="flex items-center justify-between mb-4">
                                    <h6 class="text-15">{{ $icon->type_text }}</h6>
                                    <div class="flex items-center gap-2">
                                        <a href="{{ route('useful-for-you-icons.edit', $icon->id) }}" class="btn btn-sm bg-custom-500 text-white border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <form action="{{ route('useful-for-you-icons.destroy', $icon->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm bg-danger text-white border-danger hover:text-white hover:bg-danger-600 hover:border-danger-600 focus:text-white focus:bg-danger-600 focus:border-danger-600 focus:ring focus:ring-danger-100 active:text-white active:bg-danger-600 active:border-danger-600 active:ring active:ring-danger-100 dark:ring-danger-400/20" onclick="return confirm('Silmək istədiyinizə əminsiniz?')">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center p-4 bg-slate-50 dark:bg-zink-600 rounded-lg">
                                @if($icon->icon)
    <img src="{{ Storage::url($icon->icon) }}" alt="{{ $icon->type_text }}" class="w-24 h-24 object-contain">
@else
    <div class="text-center text-slate-500 dark:text-zink-200">
        <i class="ri-image-line text-4xl mb-2"></i>
        <p>İkon yoxdur</p>
    </div>
@endif

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full">
                            <div class="card border border-slate-200 dark:border-zink-500">
                                <div class="card-body">
                                    <div class="text-center py-8">
                                        <i class="ri-inbox-line text-4xl text-slate-400 dark:text-zink-200 mb-3"></i>
                                        <h5 class="text-15 text-slate-500 dark:text-zink-200">Məlumat tapılmadı</h5>
                                        <p class="text-slate-400 dark:text-zink-300">İkon əlavə etmək üçün "Yeni İkon" düyməsini istifadə edin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="mt-6">
                    {{ $icons->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 