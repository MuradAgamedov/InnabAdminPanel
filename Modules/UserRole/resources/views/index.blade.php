@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Rollar</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="alternativePagination_wrapper" class="dataTables_wrapper dt-tailwindcss">
                    <div class="grid grid-cols-12 lg:grid-cols-12 gap-3">
                        <div class="self-center col-span-12 lg:col-span-6">
                            @sessionMessages
                            <div style="display: flex; column-gap: 10px" class="dataTables_length" id="alternativePagination_length">
                                @if(\App\Helpers\PermissionHelper::hasPermission(6, 2))
                                    <a href="{{route('userrole.create')}}" style="display: flex; justify-content: center; align-items: center; cursor: pointer" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Əlavə et</a>
                                @endif
                                @if(\App\Helpers\PermissionHelper::hasPermission(6, 4))
                                    <a data-link="{{route('api.userrole.delete_selected_items')}}" style="cursor: pointer" type="button" class="delete-all px-4 py-3 text-sm text-purple-500 border border-purple-200 rounded-md bg-purple-50 dark:bg-purple-400/20 dark:border-purple-500/50">
                                        Seçilənləri sil
                                    </a>
                                @endif
                                <label>
                                </label>
                            </div>
                        </div>
                        <div class="self-center col-span-12 lg:col-span-6 lg:place-self-end">
                            <div id="alternativePagination_filter" class="dataTables_filter">

                                <form action="">
                                    <label>Axtar
                                        :

                                    </label>
                                    <input name="q" type="search" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 inline-block w-auto ml-2" placeholder="" value="{{$q}}" aria-controls="alternativePagination">
                                </form>
                            </div>
                        </div>
                        <div class="my-2 col-span-12 overflow-x-auto lg:col-span-12">
                            <table id="alternativePagination" class="display dataTable w-full text-sm align-middle whitespace-nowrap" style="width:100%" aria-describedby="alternativePagination_info">
                                <thead class="border-b border-slate-200 dark:border-zink-500">
                                    <tr>
                                        <th class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting px-3 py-4 text-slate-900 bg-slate-200/50 font-semibold text-left dark:text-zink-50 dark:bg-zink-600 dark:group-[.bordered]:border-zink-500 sorting_asc" tabindex="0" aria-controls="alternativePagination" rowspan="1" colspan="1" style="width: 270.867px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Seçim et
                                        </th>
                                        <th class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting px-3 py-4 text-slate-900 bg-slate-200/50 font-semibold text-left dark:text-zink-50 dark:bg-zink-600 dark:group-[.bordered]:border-zink-500" tabindex="0" aria-controls="alternativePagination" rowspan="1" colspan="1" style="width: 415.15px;" aria-label="Position: activate to sort column ascending">Ad
                                        </th>
                                        <th class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting px-3 py-4 text-slate-900 bg-slate-200/50 font-semibold text-left dark:text-zink-50 dark:bg-zink-600 dark:group-[.bordered]:border-zink-500" tabindex="0" aria-controls="alternativePagination" rowspan="1" colspan="1" style="width: 415.15px;" aria-label="Position: activate to sort column ascending">Əməliyyatlar
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($items as $item)
                                    <tr class="group-[.stripe]:even:bg-slate-50 group-[.stripe]:dark:even:bg-zink-600 transition-all duration-150 ease-linear group-[.hover]:hover:bg-slate-50 dark:group-[.hover]:hover:bg-zink-600 [&amp;.selected]:bg-custom-500 dark:[&amp;.selected]:bg-custom-500 [&amp;.selected]:text-custom-50 dark:[&amp;.selected]:text-custom-50">

                                            <td class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting_1">

                                                    <input data-id='{{$item->id}}' id="checkboxCircle2" class="select-item border rounded-full appearance-none cursor-pointer size-4 bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-green-500 checked:border-green-500 dark:checked:bg-green-500 dark:checked:border-green-500 checked:disabled:bg-green-400 checked:disabled:border-green-400" type="checkbox" value="">

                                            </td>

                                        <td class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting_1">
                                            {{ $item->name }}
                                        </td>

                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('userrole.edit', $item->id)}}" class="btn btn-phoenix-success me-1 mb-1" type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-pen">
                                                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                        <path d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                                                    </svg>
                                                </a>
                                                @if($item->id != 1)
                                                    <a href="{{route('permission.list', $item->id)}}" class="btn btn-phoenix-success me-1 mb-1" type="button">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="12" cy="7" r="5" fill="black" />
                                                            <path d="M2 22C2 17.5817 5.58172 14 10 14H14C18.4183 14 22 17.5817 22 22H2Z" fill="black" />
                                                            <path d="M20.74 8.45L19.34 8.79C19.12 8.16 18.77 7.58 18.34 7.07L18.76 5.68C18.81 5.53 18.76 5.36 18.64 5.28L17.33 4.44C17.2 4.35 17.03 4.4 16.97 4.55L16.55 5.94C16.09 5.67 15.58 5.47 15.05 5.36L14.84 4.05C14.82 3.92 14.7 3.83 14.56 3.83H12.44C12.3 3.83 12.18 3.92 12.16 4.05L11.95 5.36C11.42 5.47 10.91 5.67 10.45 5.94L10.03 4.55C9.97 4.4 9.8 4.35 9.67 4.44L8.36 5.28C8.24 5.36 8.19 5.53 8.24 5.68L8.66 7.07C8.23 7.58 7.88 8.16 7.66 8.79L6.26 8.45C6.12 8.42 5.98 8.52 5.96 8.66L5.74 10.34C5.73 10.48 5.83 10.62 5.97 10.66L7.36 11.03C7.41 11.58 7.53 12.11 7.73 12.6L6.76 13.55C6.66 13.65 6.65 13.82 6.74 13.95L7.57 15.27C7.66 15.4 7.83 15.44 7.96 15.35L9.21 14.58C9.69 14.92 10.24 15.18 10.83 15.33L11.05 16.64C11.07 16.77 11.18 16.87 11.32 16.87H13.44C13.58 16.87 13.7 16.77 13.72 16.64L13.94 15.33C14.53 15.18 15.08 14.92 15.56 14.58L16.81 15.35C16.94 15.44 17.11 15.4 17.2 15.27L18.03 13.95C18.12 13.82 18.11 13.65 18.01 13.55L17.04 12.6C17.24 12.11 17.36 11.58 17.41 11.03L18.8 10.66C18.94 10.62 19.04 10.48 19.03 10.34L18.81 8.66C18.79 8.52 18.65 8.42 18.51 8.45L20.74 8.45Z" fill="black" />
                                                        </svg>
                                                    </a>
                                                @endif

                                            </div>
                        </div>
                        </td>
                        </tr>
                        @endforeach

                        </tbody>

                        </table>
                    </div>
                    <div class="self-center col-span-12 lg:place-self-end lg:col-span-12">
                        {{ $items->appends(['q' => request()->query('q')])->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div><!--end card-->
</div>
<!-- container-fluid -->
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

<script>
    let selectedItems = [];
    document.querySelectorAll('.select-item').forEach(checkbox => {
        checkbox.addEventListener('change', (e) => {
            const id = e.target.getAttribute('data-id');
            if (e.target.checked) {

                if (!selectedItems.includes(id)) {
                    selectedItems.push(id);
                }
            } else {
                const index = selectedItems.indexOf(id);
                if (index > -1) {
                    selectedItems.splice(index, 1);
                }
            }
        });
    });

    document.querySelector('.delete-all').addEventListener('click', (e) => {
        e.preventDefault();

        const url = e.target.getAttribute('data-link');
        if (selectedItems.length > 0) {
            Swal.fire({
                title: 'Məlumatları silmək istəyirsiz?',
                showCancelButton: true,
                confirmButtonText: 'bəli',
                cancelButtonText: 'xeyr',
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                ids: selectedItems
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            Swal.fire(data.message, "", "success").then(() => {
                                location.reload();
                            });
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            Swal.fire('Error', "", "error");
                        });
                }
            });
        } else {
            Swal.fire('Heç bir məlumat seçilməyib', "", "info");
        }
    });
</script>


@endpush
