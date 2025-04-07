@extends('layouts.app')

@push('styles')
<style>
    .form {
        width: 600px;
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

    .file-label {
        display: inline-block;
        padding: 8px 15px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        margin-bottom: 10px;
    }

    .file-label:hover {
        background-color: #45a049;
    }

    #file-name {
        font-style: italic;
        color: #555;
        margin-bottom: 15px;
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
<div class="form-container">
    <div class="form">
        <form method="post" action="{{ route('redirect_excel.store') }}" enctype="multipart/form-data" class="max-w-lg mx-auto">
            @csrf

            <!-- Validation Error -->
            @if ($errors->has('file'))
            <div style="color: red; margin-bottom: 10px;">
                {{ $errors->first('file') }}
            </div>
            @endif

            <!-- File Upload -->
            <label for="file-upload" class="file-label">Choose File</label>
            <input type="file" id="file-upload" name="file" accept=".xls,.xlsx" style="display:none;">
            <div id="file-name">No file selected.</div>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fileInput = document.getElementById("file-upload");
        const fileNameDiv = document.getElementById("file-name");
        const fileLabel = document.querySelector(".file-label");

        fileLabel.addEventListener("click", function() {
            fileInput.click();
        });

        fileInput.addEventListener("change", function() {
            if (fileInput.files.length > 0) {
                fileNameDiv.textContent = "Selected file: " + fileInput.files[0].name;
            } else {
                fileNameDiv.textContent = "No file selected.";
            }
        });
    });
</script>
@endpush
