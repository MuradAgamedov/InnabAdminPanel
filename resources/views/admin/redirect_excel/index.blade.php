@extends('layouts.app')

@push('styles')
<style>
    .form {
        width: 600px;
        /* Fixed width of 600px */
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        /* Full viewport height */
    }

    input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
        cursor: pointer;
    }

    input[type="file"]:focus {
        outline: none;
        border-color: #4CAF50;
    }

    /* Optional: Style the file input label */
    .file-label {
        display: inline-block;
        padding: 8px 15px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        margin-bottom: 20px;
    }

    .file-label:hover {
        background-color: #45a049;
    }

    button[type="submit"] {
        display: block;
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
@endpush

@section('content')
<div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
    <div class="form-container">
        <div class="form">
            <form method="post" action="{{ route('redirect_excel.store') }}" enctype="multipart/form-data" class="max-w-lg mx-auto">
                @csrf

                <!-- Error message -->
                @if ($errors->has('file'))
                <div style="color: red; margin-bottom: 10px;">
                    {{ $errors->first('file') }}
                </div>
                @endif

                <!-- Custom label for file input -->
                <label for="file-upload" class="file-label">Choose File</label>
                <input type="file" id="file-upload" name="file" accept=".xls,.xlsx" style="display:none;">

                <!-- Submit Button -->
                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
