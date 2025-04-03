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
