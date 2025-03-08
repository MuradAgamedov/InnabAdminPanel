@extends('layouts.app')

@section('content')
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
            <div class="grow">
                <h5 class="text-16">Redirect Redaktə Et</h5>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-10">
            <div class="card col-span-2">
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="{{ route('redirect.update', $redirect->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Köhnə URL -->
                        <div class="mb-3">
                            <label for="old_url" class="inline-block mb-2 text-base font-medium">Köhnə URL<span class="text-red-500">*</span></label>
                            <input type="text" id="old_url" name="old_url" value="{{ old('old_url', $redirect->old_url) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        </div>

                        <!-- Yeni URL -->
                        <div class="mb-3">
                            <label for="new_url" class="inline-block mb-2 text-base font-medium">Yeni URL<span class="text-red-500">*</span></label>
                            <input type="text" id="new_url" name="new_url" value="{{ old('new_url', $redirect->new_url) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        </div>

                        <!-- Status Code -->
                        <div class="mb-3">
                            <label for="status_code" class="inline-block mb-2 text-base font-medium">Status Kodu</label>
                            <select name="status_code" id="status_code" class="form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500">
                                <option value="301" {{ $redirect->status_code == 301 ? 'selected' : '' }}>301 - Permanent Redirect</option>
                                <option value="302" {{ $redirect->status_code == 302 ? 'selected' : '' }}>302 - Temporary Redirect</option>
                            </select>
                        </div>

                        <!-- Submit Düyməsi -->
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600">
                            Yenilə
                        </button>

                        <!-- Silmə düyməsi -->
                        <a href="#" data-link="{{ route('redirect.destroy', $redirect->id) }}" class="btn btn-danger delete-item ml-3">
                            Sil
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelector('.delete-item').addEventListener('click', function (e) {
                e.preventDefault();
                const url = this.getAttribute('data-link');

                Swal.fire({
                    title: "Bu redirect-i silmək istəyirsiniz?",
                    showCancelButton: true,
                    confirmButtonText: "Bəli",
                    cancelButtonText: "Xeyr",
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(url, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        }).then(response => response.json())
                            .then(data => {
                                Swal.fire(data.message, "", "success").then(() => {
                                    window.location.href = "{{ route('redirect.index') }}";
                                });
                            }).catch(error => {
                            Swal.fire('Xəta baş verdi!', "", "error");
                        });
                    }
                });
            });
        });
    </script>
@endpush
