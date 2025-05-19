@extends('admin.layouts.app')

@section('title' , "Product List" )

@section('showForm')
<section class="container bg-white dark:bg-gray-900">
    <div class="py-2 px-4 mx-auto  lg:py-2">
        <div class="flex justify-between items-center">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Category</h2>

            <p class="text-gray-500 dark:text-gray-400"> <a href="{{route('category-list')}}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                    Category List
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </p>
        </div>
        <form class="addCategory" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                </div>
                <div class="w-full">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                    <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Slug">
                </div>
                <div class="w-full">
                    <label for="meta_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Meta Title">
                </div>
                <div class="w-full">
                    <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Description</label>
                    <input type="text" name="meta_description" id="meta_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Meta Decription">
                </div>
                <div class="w-full">
                    <label for="meta_keywords" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Keyword</label>
                    <input type="text" name="meta_keywords" id="meta_keywords" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Meta Decription">
                </div>
                <div class="sm:col-span-2">
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG, WEBP</p>
                            </div>
                            <input id="dropzone-file" name="image" type="file" class="hidden" />
                        </label>
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="ckeditor" name="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here"></textarea>
                </div>
            </div>
            <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Add Category
            </button>
        </form>
    </div>
</section>




@endsection


@section('javascript')
<script type="module">
    CKEDITOR.replace('ckeditor');



    $('.addCategory').on('submit', function(e) {
        e.preventDefault()
        $('.container').hide();
        $('.loaderBtn').show();
        let form = this

        let formData = new FormData(this)
        let description = CKEDITOR.instances.ckeditor.getData();
        formData.append('description', description)
        $.ajax({
            url: url.addCategory,
            type: 'post',
            contentType: false, // Do not set content-type
            processData: false, // Do not process data
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            success: function(response) {

                let status = response.status;
                let message = response.message
                if (status == 'Success') {
                    $('#messageTitle').text(status).addClass('text-green-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                }
                $('.container').show();
                $('.loaderBtn').hide();
                form.reset();

                window.location = "{{ route('category-list') }}";


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



        })



    })

    const url = {
        addCategory: "{{route('add-category')}}"
    }
</script>
@endsection