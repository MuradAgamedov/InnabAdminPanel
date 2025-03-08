@extends('layouts.app')

@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16"> Redirectlər </h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div id="alternativePagination_wrapper" class="dataTables_wrapper dt-tailwindcss">
                    <div class="grid grid-cols-12 lg:grid-cols-12 gap-3">
                        <div class="self-center col-span-12 lg:col-span-6">
                            <div style="display: flex; column-gap: 10px">
                                <a href="{{ route('redirect.create') }}" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                                    Yeni Redirect Əlavə Et
                                </a>
                                <a data-link="{{ route('api.redirect.delete_selected_items') }}" class="delete-all px-4 py-3 text-sm text-purple-500 border border-purple-200 rounded-md bg-purple-50 cursor-pointer">
                                    Seçilənləri Sil
                                </a>
                            </div>
                        </div>

                        <!-- Axtarış Formu -->
                        <div class="self-center col-span-12 lg:col-span-6 lg:place-self-end">
                            <form action="{{ route('redirect.index') }}" method="GET">
                                <label>Axtar:</label>
                                <input name="q" type="search" value="{{ request('q') }}" class="form-input border-slate-200 focus:outline-none focus:border-custom-500 inline-block w-auto ml-2">
                            </form>
                        </div>

                        <div class="my-2 col-span-12 overflow-x-auto">
                            <table id="alternativePagination" class="display dataTable w-full text-sm align-middle whitespace-nowrap">
                                <thead class="border-b border-slate-200">
                                <tr>
                                    <th class="p-3">Seç</th>
                                    <th class="p-3">Köhnə URL</th>
                                    <th class="p-3">Yeni URL</th>
                                    <th class="p-3">Status Kodu</th>
                                    <th class="p-3">Əməliyyatlar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $redirect)
                                    <tr class="group-[.stripe]:even:bg-slate-50 transition-all duration-150">
                                        <td class="p-3">
                                            <input data-id="{{ $redirect->id }}" class="select-lang border rounded-full size-4 cursor-pointer" type="checkbox">
                                        </td>
                                        <td class="p-3">{{ $redirect->old_url }}</td>
                                        <td class="p-3">{{ $redirect->new_url }}</td>
                                        <td class="p-3">
                                        <span class="px-3 py-1 text-white rounded-md {{ $redirect->status_code == 301 ? 'bg-green-500' : 'bg-blue-500' }}">
                                            {{ $redirect->status_code }}
                                        </span>
                                        </td>
                                        <td class="p-3">
                                            <a href="{{ route('redirect.edit', $redirect->id) }}" class="btn btn-success me-1">
                                                Redaktə Et
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="pagination mt-4">
                                {{ $items->appends(['q' => request()->input('q')])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end card-->
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let selectedItems = [];

            // Seçim üçün checkbox funksiyası
            document.querySelectorAll('.select-lang').forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    const id = this.getAttribute('data-id');
                    if (this.checked) {
                        if (!selectedItems.includes(id)) {
                            selectedItems.push(id);
                        }
                    } else {
                        selectedItems = selectedItems.filter(item => item !== id);
                    }
                });
            });

            // Seçilənləri silmək
            document.querySelector('.delete-all').addEventListener('click', function (e) {
                e.preventDefault();
                const url = this.getAttribute('data-link');

                if (selectedItems.length > 0) {
                    Swal.fire({
                        title: "Seçilmiş redirectləri silmək istəyirsiniz?",
                        showCancelButton: true,
                        confirmButtonText: "Bəli",
                        cancelButtonText: "Xeyr",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            fetch(url, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({ ids: selectedItems })
                            }).then(response => response.json())
                                .then(data => {
                                    Swal.fire(data.message, "", "success").then(() => location.reload());
                                }).catch(error => {
                                Swal.fire('Xəta baş verdi!', "", "error");
                            });
                        }
                    });
                } else {
                    Swal.fire("Heç bir redirect seçilməyib!", "", "info");
                }
            });

            // Tək redirect silmək

        });
    </script>
@endpush
