@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid mx-auto px-4 py-6">
        <h2 class="text-xl font-bold mb-4">Karyera və Təqaüd Müraciətləri</h2>

        @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full table-auto border-collapse">
                <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 text-left">Ad Soyad</th>
                        <th class="px-6 py-3 text-left">Telefon</th>
                        <th class="px-6 py-3 text-left">FIN</th>
                        <th class="px-6 py-3 text-left">Təhsil</th>
                        <th class="px-6 py-3 text-left">Layihə</th>
                        <th class="px-6 py-3 text-left">Tarix</th>
                        <th class="px-6 py-3 text-right">Əməliyyatlar</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach($forms as $form)
                    <tr class="border-b">
                        <td class="px-6 py-4">{{ $form->name }}</td>
                        <td class="px-6 py-4">{{ $form->phone }}</td>
                        <td class="px-6 py-4">{{ $form->fin }}</td>
                        <td class="px-6 py-4">{{ $form->education ?? $form->education_other ?? '-' }}</td>
                        <td class="px-6 py-4">{{ $form->project ?? $form->project_other ?? '-' }}</td>
                        <td class="px-6 py-4">{{ \Carbon\Carbon::parse($form->date)->format('d.m.Y') }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ asset('storage/'.$form->cv_path) }}" class="text-green-600 hover:underline mr-3" target="_blank">CV</a>
                            <button onclick="confirmDelete({{ $form->id }})" class="text-red-500 hover:text-red-700">Sil</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "Əminsiniz?",
            text: "Bu müraciət silinəcək!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Bəli, sil!",
            cancelButtonText: "Xeyr, ləğv et"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `/carrier-scholarship-forms/${id}/delete`;
            }
        });
    }
</script>
@endpush
