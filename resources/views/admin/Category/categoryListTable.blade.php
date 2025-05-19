@extends('admin.layouts.app')

@section('title' , "Product List" )

@section('showForm')
<section class="container bg-white dark:bg-gray-900">
    <div class="py-2 px-4 mx-auto  lg:py-2">
        <div class="flex justify-between items-center">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Category List</h2>

            <p class="text-gray-500 dark:text-gray-400"> <a href="{{route('add-category')}}" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                   Add Category
                    <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a></p>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Slug</th>
                        <th class="px-6 py-3">Image</th>
                        <th class="px-6 py-3">Meta Title</th>
                        <th class="px-6 py-3">Meta Description</th>
                        <th class="px-6 py-3">Meta Keywords</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3 text-right">Edit</th>
                        <th class="px-6 py-3 text-right">Status</th>
                    </tr>
                </thead>
                <tbody id="category-table-body">
                    @include('admin.partials.categoryRows')
                </tbody>
            </table>

            <div class="text-center mt-4">
                <button id="load-more-btn" class="px-4 py-2 bg-blue-600 text-white rounded">Show More</button>
                <p class="mt-2 text-gray-500">Total Categories: {{ $totalCategories }}</p>
            </div>
        </div>
    </div>
</section>
@endsection


@section('javascript')
<script type="module">
    let page = 1;
    let totalLoaded = "{{ $categories->count() }}";
    let totalCategories = " {{ $totalCategories }}";

    $('#load-more-btn').on('click', function() {
        page++;
        $.ajax({
            url: `?page=${page}`,
            type: 'GET',
            dataType: 'html',
            success: function(data) {
                if ($.trim(data) === '') {
                    $('#load-more-btn').text('No More Categories').prop('disabled', true);
                    return;
                }
                $('#category-table-body').append(data);
                totalLoaded += 10;
                if (totalLoaded >= totalCategories) {
                    $('#load-more-btn').text('No More Categories').prop('disabled', true);
                }
            },
            error: function() {
                alert('Failed to load more categories.');
            }
        });
    });
    const url = {
        // addCategory: "{{route('add-category')}}"
    }
</script>
@endsection