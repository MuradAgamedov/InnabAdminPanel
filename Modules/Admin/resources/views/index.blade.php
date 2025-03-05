@extends('layouts.app')

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Adminlər </h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div id="alternativePagination_wrapper" class="dataTables_wrapper dt-tailwindcss">
                    <div class="grid grid-cols-12 lg:grid-cols-12 gap-3">
                        <div class="self-center col-span-12 lg:col-span-6">
                            @sessionMessages
                            <div style="display: flex; column-gap: 10px" class="dataTables_length" id="alternativePagination_length">
                                @if(\App\Helpers\PermissionHelper::hasPermission(5, 2))
                                    <a  href="{{route('admin.admin.create')}}" type="button" class="px-4 py-3 text-sm text-purple-500 border border-purple-200 rounded-md bg-purple-50 dark:bg-purple-400/20 dark:border-purple-500/50">
                                        Yeni admin əlavə et
                                    </a>
                                @endif
                                    @if(\App\Helpers\PermissionHelper::hasPermission(5, 2))
                                        <a data-link="/api/admin/delete_selected_items" style="cursor: pointer" type="button" class="delete-all px-4 py-3 text-sm text-purple-500 border border-purple-200 rounded-md bg-purple-50 dark:bg-purple-400/20 dark:border-purple-500/50">
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
                                        <th class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting px-3 py-4 text-slate-900 bg-slate-200/50 font-semibold text-left dark:text-zink-50 dark:bg-zink-600 dark:group-[.bordered]:border-zink-500" tabindex="0" aria-controls="alternativePagination" rowspan="1" colspan="1" style="width: 415.15px;" aria-label="Position: activate to sort column ascending">Email
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
                                        <td class="p-3 group-[.bordered]:border group-[.bordered]:border-slate-200 group-[.bordered]:dark:border-zink-500 sorting_1">
                                            {{ $item->email }}
                                        </td>
                                        <td>
                                            <div class="d-flex">

                                                   @if(auth()->user()->id != $item->id)
                                                    <a href="{{route('admin.edit', $item->id)}}" class="btn btn-phoenix-success me-1 mb-1" type="button">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M12 12C15.31 12 18 9.31 18 6C18 2.69 15.31 0 12 0C8.69 0 6 2.69 6 6C6 9.31 8.69 12 12 12ZM12 14C8.67 14 0 15.67 0 19V22H24V19C24 15.67 15.33 14 12 14ZM19 15.5H21V20.5H19V18H16V20.5H14V15.5H16V17.5H19V15.5ZM21 11H23V7H21V9H18V7H16V11H18V9H21V11Z" fill="#000000" />
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
