@extends('admin.layouts.app')

@section('title', "Edit Category")

@section('showForm')
<section class="container bg-white dark:bg-gray-900">
    <div class="py-2 px-4 mx-auto lg:py-2">
        <div class="flex justify-between items-center">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Category</h2>
            <p class="text-gray-500 dark:text-gray-400">
                <a href="{{ route('category-list') }}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Category List
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </p>
        </div>

        <form action="#" class="editCategory" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">

            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                    <input type="text" name="name" id="name" value="{{ $category->name }}" required class="form-input">
                </div>
                <div class="w-full">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ $category->slug }}" class="form-input">
                </div>
                <div class="w-full">
                    <label for="meta_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" value="{{ $category->meta_title }}" class="form-input">
                </div>
                <div class="w-full">
                    <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Description</label>
                    <input type="text" name="meta_description" id="meta_description" value="{{ $category->meta_description }}" class="form-input">
                </div>
                <div class="w-full">
                    <label for="meta_keywords" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Keyword</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" value="{{ $category->meta_keywords }}" class="form-input">
                </div>
                <div class="sm:col-span-2">
                    <label for="dropzone-file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" name="image" id="dropzone-file" class="form-input">
                    @if($category->image)
                        <img src="{{ asset( $category->image ) }}" alt="Current Image" class="mt-2 w-32 rounded">
                    @endif
                </div>

                <div class="sm:col-span-2">
                    <label for="ckeditor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="ckeditor" name="description" rows="8" class="form-textarea">{{ $category->description }}</textarea>
                </div>
            </div>

            <button type="submit" class="mt-3 btn-primary">Update Category</button>
        </form>
    </div>
</section>
@endsection

@section('javascript')
<script type="module">
    CKEDITOR.replace('ckeditor');

    $('.editCategory').on('submit', function(e) {
        e.preventDefault();
        $('.container').hide();
        $('.loaderBtn').show();

        let form = this;
        let formData = new FormData(form);
        let description = CKEDITOR.instances.ckeditor.getData();
        formData.set('description', description);

        $.ajax({
            url: url.updateCategory,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.status === 'Success') {
                    $('#messageTitle').text('Success').addClass('text-green-600');
                    $('#messageContent').text(response.message);
                    $('#messageModal').removeClass('hidden');
                    window.location = "{{ route('category-list') }}";
                }
                $('.container').show();
                $('.loaderBtn').hide();
            },
            error: function(err) {
                let error = err.responseJSON.errors;
                $.each(error, (field, message) => {
                    $('#messageTitle').text(field).addClass('text-red-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                });
                $('.container').show();
                $('.loaderBtn').hide();
            }
        });
    });

    const url = {
        updateCategory: "{{ route('update-category', $category->id) }}"
    }
</script>
@endsection
