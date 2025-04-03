@extends('layouts.app')
@push('styles')

@endpush
@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16"> Müraciətlər </h5>
            </div>

        </div>

        <div class="card">
            <div class="card-body">
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="w-full table-auto border-collapse">
                        <thead class="bg-gray-200 text-gray-600 uppercase text-sm">
                            <tr>
                                <th class="px-6 py-3 text-left">Ad Soyad</th>
                                <th class="px-6 py-3 text-left">Form Tipi</th>
                                <th class="px-6 py-3 text-right">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @foreach($forms as $form)
                            <tr class="border-b">
                                <td class="px-6 py-4">{{ $form->name }}</td>
                                <td class="px-6 py-4">{{ $form->form_type }}</td>
                                <td class="px-6 py-4 text-right">
                                    <!-- Oxu Düyməsi -->
                                    <button onclick="openModal({{ $form->id }})" class="text-blue-500 hover:text-blue-700 mr-4">Oxu</button>

                                    <!-- Sil Düyməsi -->
                                    <button onclick="confirmDelete({{ $form->id }})" class="text-red-500 hover:text-red-700">Sil</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end card-->
    </div>
    <!-- container-fluid -->
</div>
@endsection

@push('scripts')
<script>
    function openModal(id) {
        fetch(`/contact-forms/${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('modalName').textContent = data.name;
                document.getElementById('modalFormType').textContent = data.form_type;
                document.getElementById('modalPhone').textContent = data.phone;
                document.getElementById('modalAddress').textContent = data.address;
                document.getElementById('formModal').classList.remove('hidden');
            });
    }

    function closeModal() {
        document.getElementById('formModal').classList.add('hidden');
    }

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
                window.location.href = `/contact-forms/${id}/delete`;
            }
        });
    }
</script>
@endpush
