@extends('admin.layouts.app')

@section('title', "add Sub Category")

@section('showForm')
<section class="container bg-white dark:bg-gray-900 px-4 py-8 mx-auto ">
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Add Sub Category</h2>
        <a href="" class="inline-flex items-center text-blue-600 dark:text-blue-500 hover:underline font-medium">
            Sub Category List
            <svg class="w-4 h-4 ml-2 rtl:rotate-180" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>

    <form class="addSubCategory" enctype="multipart/form-data">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Sub Category Name -->
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub Category Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    placeholder="Enter sub category name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>

            <!-- Slug -->
            <div>
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                    placeholder="Enter slug (optional)"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>

            <!-- Category Dropdown -->
            <div>
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                <select id="category" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Meta Title -->
            <div>
                <label for="meta_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title') }}"
                    placeholder="Enter meta title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            </div>

            <!-- Meta Description -->
            <div>
                <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Description</label>
                <input type="text" name="meta_description" id="meta_description" value="{{ old('meta_description') }}"
                    placeholder="Enter meta description"
                    class="block w-full px-4 py-2 text-sm rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
            </div>

            <!-- Meta Keywords -->
            <div>
                <label for="meta_keywords" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords') }}"
                    placeholder="Enter meta keywords (comma-separated)"
                    class="block w-full px-4 py-2 text-sm rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
            </div>

            <!-- Image Upload -->
            <div class="sm:col-span-2">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 ">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, WEBP</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" name="image" />
                    </label>
                </div>
            </div>

            <!-- Description -->
            <div class="sm:col-span-2">
                <label for="ckeditor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <textarea id="ckeditor" name="description" rows="6"
                    placeholder="Write description here..."
                    class="block w-full px-4 py-2 text-sm rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">{{ old('description') }}</textarea>
            </div>
        </div>

        <button type="submit"
            class="mt-6 inline-block px-6 py-2 text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg shadow-sm transition">Add Sub Category</button>
    </form>
</section>


@endsection



@section('javascript')
<script type="module">
    CKEDITOR.replace('ckeditor');

    $('.addSubCategory').on('submit', (e) => {
        e.preventDefault();
        $('.container').hide();
        $('.loaderBtn').show();
        let form = e.currentTarget;
        let formData = new FormData(form);
        let discription = CKEDITOR.instances.ckeditor.getData();
        formData.append('description', discription);
        $.ajax({
            url: url.add_SubCategory,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                let title = response.status;
                let message = response.message
                if (response.status == 'Success') {
                    $('#messageTitle').text(title).addClass('text-green-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');

                }
                $('.container').show();
                $('.loaderBtn').hide();
                form.reset();

            },
            error: function(err) {
                let error = err.responseJSON.errors;

                $.each(error, (field, message) => {
                    $('#messageTitle').text(field).addClass('text-red-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                })
                $('.container').show();
                $('.loaderBtn').hide();
            }
        });


    });

    let url = {
        add_SubCategory: "{{ route('add_SubCategory') }}",

    }
</script>

@endsection