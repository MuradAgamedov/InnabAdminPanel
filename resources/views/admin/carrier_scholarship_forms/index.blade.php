@extends('layouts.app')

@section('content')
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
    <div id="formModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden z-50">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full sm:w-3/4 md:w-1/2 lg:w-1/3 max-h-[90vh] overflow-y-auto">
            <h3 class="text-xl font-semibold mb-4">Müraciət Məlumatları</h3>

            <p><strong>Ad Soyad:</strong> <span id="modalName" class="text-lg"></span></p>
            <p><strong>FIN:</strong> <span id="modalFin" class="text-lg"></span></p>
            <p><strong>Telefon:</strong> <span id="modalPhone" class="text-lg"></span></p>
            <p><strong>Tarix:</strong> <span id="modalDate" class="text-lg"></span></p>
            <p><strong>Layihə:</strong> <span id="modalProject" class="text-lg"></span></p>
            <p><strong>Təhsil:</strong> <span id="modalEducation" class="text-lg"></span></p>
            <p><strong>Tələbə Statusu:</strong> <span id="modalStudentStatus" class="text-lg"></span></p>
            <p><strong>İş Statusu:</strong> <span id="modalWorkStatus" class="text-lg"></span></p>
            <p><strong>VOEN:</strong> <span id="modalVoen" class="text-lg"></span></p>
            <p><strong>Ünvan:</strong> <span id="modalAddress" class="text-lg"></span></p>
            <p><strong>CV:</strong> <a id="modalCv" href="#" target="_blank" class="text-blue-600 underline">Bax</a></p>

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
        const getValue = (main, other) => {
            const otherVal = button.getAttribute('data-' + other);
            return otherVal && otherVal.trim() !== '' ? otherVal : (button.getAttribute('data-' + main) || '-');
        };

        document.getElementById('modalName').textContent = button.getAttribute('data-name') || '-';
        document.getElementById('modalPhone').textContent = button.getAttribute('data-phone') || '-';
        document.getElementById('modalFin').textContent = button.getAttribute('data-fin') || '-';
        document.getElementById('modalDate').textContent = button.getAttribute('data-date') || '-';

        document.getElementById('modalProject').textContent = getValue('project', 'project-other');
        document.getElementById('modalEducation').textContent = getValue('education', 'education-other');
        document.getElementById('modalStudentStatus').textContent = getValue('student-status', 'student-status-other');
        document.getElementById('modalWorkStatus').textContent = getValue('work-status', 'work-status-other');

        document.getElementById('modalVoen').textContent = button.getAttribute('data-voen') || '-';
        document.getElementById('modalAddress').textContent = button.getAttribute('data-address') || '-';
        document.getElementById('modalCv').href = button.getAttribute('data-cv-path') || '#';

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
