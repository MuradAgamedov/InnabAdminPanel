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
                                <td class="px-6 py-4">{{ $form->formType }}</td>
                                <td class="px-6 py-4 text-right">
                                    <!-- Oxu Düyməsi -->
                                    <button
                                        onclick="openModal(this)"
                                        class="text-blue-500 hover:text-blue-700 mr-4"
                                        data-name="{{ $form->name }}"
                                        data-form_type="{{ $form->formType }}"
                                        data-phone="{{ $form->phone }}"
                                        data-address="{{ $form->address }}"
                                        data-created_at="{{ $form->created_at }}">
                                        Oxu
                                    </button>

                                    <!-- Sil Düyməsi -->
                                    <button onclick="confirmDelete({{ $form->id }})" class="text-red-500 hover:text-red-700">
                                        Sil
                                    </button>
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

    <!-- Modal -->
    <div id="formModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg w-1/2 sm:w-3/4 md:w-1/3 lg:w-1/4">
            <h3 class="text-xl font-semibold mb-4">Müraciət Məlumatları</h3>
            <p><strong>Ad Soyad:</strong> <span id="modalName" class="text-lg"></span></p>
            <p><strong>Form Tipi:</strong> <span id="modalFormType" class="text-lg"></span></p>
            <p><strong>Telefon:</strong> <span id="modalPhone" class="text-lg"></span></p>
            <p><strong>Ünvan:</strong> <span id="modalAddress" class="text-lg"></span></p>
            <p><strong>Müraciət Tarixi:</strong> <span id="modalCreatedAt" class="text-lg"></span></p>
            <div class="mt-4 text-right">
                <button onclick="closeModal()" class="px-4 py-2 bg-red-500 text-white rounded">Bağla</button>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    function openModal(button) {
        // Düymənin data atributlarından məlumatları alırıq
        document.getElementById('modalName').textContent = button.getAttribute('data-name');
        document.getElementById('modalFormType').textContent = button.getAttribute('data-form_type');
        document.getElementById('modalPhone').textContent = button.getAttribute('data-phone');
        document.getElementById('modalAddress').textContent = button.getAttribute('data-address');

        // Müraciət tarixini Azərbaycan vaxtı ilə göstəririk
        let createdAt = new Date(button.getAttribute('data-created_at'));
        let options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            timeZone: 'Asia/Baku', // Azerbaijan timezone
            timeZoneName: 'short'
        };
        document.getElementById('modalCreatedAt').textContent = createdAt.toLocaleString('en-US', options);

        // Modalı açırıq
        document.getElementById('formModal').classList.remove('hidden');
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
