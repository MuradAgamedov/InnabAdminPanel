@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
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
                    <td class="px-6 py-4">{{ \Carbon\Carbon::parse($form->date)->format('d.m.Y') }}</td>
                    <td class="px-6 py-4 text-right">
                        <button
                            onclick="openModal(this)"
                            class="text-blue-500 hover:text-blue-700 mr-4"
                            @foreach([ 'name' , 'phone' , 'fin' , 'date' , 'project' , 'project_other' , 'education' , 'education_other' , 'student_status' , 'student_status_other' , 'work_status' , 'work_status_other' , 'voen' , 'address' , 'cv_path'
                            ] as $field)
                            data-{{ str_replace('_', '-', $field) }}="{{ $form->$field }}"
                            @endforeach>
                            Oxu
                        </button>
                        <button onclick="confirmDelete({{ $form->id }})" class="text-red-500 hover:text-red-700">
                            Sil
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="formModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-xl shadow-xl w-full max-w-2xl mx-4 p-6 relative">
            <h3 class="text-xl font-bold text-indigo-600 border-b pb-2 mb-4">📝 Müraciət Məlumatları</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-3 text-sm text-gray-800">
                <p><strong>Ad Soyad:</strong> <span id="modalName" class="font-medium"></span></p>
                <p><strong>FIN:</strong> <span id="modalFin" class="font-medium"></span></p>
                <p><strong>Telefon:</strong> <span id="modalPhone" class="font-medium"></span></p>
                <p><strong>Tarix:</strong> <span id="modalDate" class="font-medium"></span></p>
                <p><strong>Layihə:</strong> <span id="modalProject" class="font-medium"></span></p>
                <p><strong>Təhsil:</strong> <span id="modalEducation" class="font-medium"></span></p>
                <p><strong>Tələbə Statusu:</strong> <span id="modalStudentStatus" class="font-medium"></span></p>
                <p><strong>İş Statusu:</strong> <span id="modalWorkStatus" class="font-medium"></span></p>
                <p><strong>VOEN:</strong> <span id="modalVoen" class="font-medium"></span></p>
                <p><strong>Ünvan:</strong> <span id="modalAddress" class="font-medium"></span></p>
                <p class="md:col-span-2"><strong>CV:</strong> <a id="modalCv" href="#" target="_blank" class="text-blue-600 underline">Bax</a></p>
            </div>

            <div class="mt-6 text-right">
                <button onclick="closeModal()" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-lg">Bağla</button>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    function openModal(button) {
        const getValue = (main, other) => {
            const otherVal = button.getAttribute('data-' + other.replace(/_/g, '-'));
            const mainVal = button.getAttribute('data-' + main.replace(/_/g, '-'));
            return otherVal && otherVal.trim() !== '' ? otherVal : (mainVal || '-');
        };

        document.getElementById('modalName').textContent = button.getAttribute('data-name') || '-';
        document.getElementById('modalPhone').textContent = button.getAttribute('data-phone') || '-';
        document.getElementById('modalFin').textContent = button.getAttribute('data-fin') || '-';
        document.getElementById('modalDate').textContent = button.getAttribute('data-date') || '-';

        document.getElementById('modalProject').textContent = getValue('project', 'project_other');
        document.getElementById('modalEducation').textContent = getValue('education', 'education_other');
        document.getElementById('modalStudentStatus').textContent = getValue('student_status', 'student_status_other');
        document.getElementById('modalWorkStatus').textContent = getValue('work_status', 'work_status_other');

        document.getElementById('modalVoen').textContent = button.getAttribute('data-voen') || '-';
        document.getElementById('modalAddress').textContent = button.getAttribute('data-address') || '-';
        const cvFile = button.getAttribute('data-cv-path');
        document.getElementById('modalCv').href = cvFile ? `/storage/${cvFile}` : '#';


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
                window.location.href = `/carrier-scholarship-forms/${id}/delete`;
            }
        });
    }
</script>
@endpush
