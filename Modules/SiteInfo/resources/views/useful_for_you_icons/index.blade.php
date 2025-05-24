@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">İkonlar</h5>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('useful-for-you-icons.create') }}" class="btn bg-custom-500 text-white">
                    <i class="ri-add-line align-bottom me-1"></i> Yeni İkon
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table-striped table-bordered table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tip</th>
                                <th>İkon</th>
                                <th>Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($icons as $icon)
                                <tr>
                                    <td>{{ $icon->id }}</td>
                                    <td>{{ $icon->type_text }}</td>
                                    <td>
                                        @if($icon->icon)
                                            <img src="{{ asset('storage/icons/' . $icon->icon) }}" alt="{{ $icon->type_text }}" class="w-24 h-24 object-contain">
                                        @else
                                            <div class="text-center text-slate-500 dark:text-zink-200">
                                                <i class="ri-image-line text-4xl mb-2"></i>
                                                <p>İkon yoxdur</p>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('useful-for-you-icons.edit', $icon->id) }}" class="btn btn-sm bg-custom-500 text-white">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <form action="{{ route('useful-for-you-icons.destroy', $icon->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm bg-danger text-white" onclick="return confirm('Silmək istədiyinizə əminsiniz?')">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Məlumat tapılmadı</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
