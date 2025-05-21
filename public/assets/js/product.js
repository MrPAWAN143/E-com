$(document).ready(function () {

    $('#selectcategory').on('change', function () {
        let categoryId = $(this).val();

        if (categoryId) {
            $.ajax({
                url: '/get-subcategories/' + categoryId,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    $('#sub_category').empty().append('<option value="">Select Sub Category</option>');
                    $.each(data, function (key, value) {
                        $('#sub_category').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching subcategories:', error);
                }
            });
        } else {
            $('#sub_category').empty().append('<option value="">Select Sub Category</option>');
        }
    });
});

CKEDITOR.replace('ckeditor');

$(document).ready(function () {

    $('#addProduct').on('submit', function (e) {
        e.preventDefault()
        $('.container').hide();
        $('.loaderBtn').show();
        let form = $(this)
        let formData = new FormData(this)
        let description = CKEDITOR.instances.ckeditor.getData()
        formData.append('description', description)
        formData.append('images[]', $('#dropzone-file')[0].files)
        formData.append('category_id', $('#selectcategory').val())
        formData.append('sub_category_id', $('#sub_category').val())
        formData.append('price', Number($('#price').val().replace('₹', '')));
        formData.append('discount_price', $('#discount_price').val().replace('%', ''))

        $.ajax({
            url: window.url.addProduct,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                let title = response.status;
                let message = response.message
                if (response.status == 'Success') {
                    $('#messageTitle').text(title).addClass('text-green-600').removeClass('text-red-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                    form[0].reset();
                    $('#ckeditor').val('');
                } else if (response.status == 'Error') {
                    $('#messageTitle').text(title).addClass('text-red-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                }
                $('.container').show();
                $('.loaderBtn').hide();


            },
            error: function (err) {
                let error = err.responseJSON.errors;

                $.each(error, (field, message) => {
                    $('#messageTitle').text(field).addClass('text-red-600');
                    $('#messageContent').text(message);
                    $('#messageModal').removeClass('hidden');
                });
                $('.container').show();
                $('.loaderBtn').hide();

            }
        })



    })
})

$('#price').on('input', function () {
    let input = $(this).val();
    let numericValue = input.replace(/[^0-9.]/g, '');
    if (numericValue.length > 0) {
        $(this).val(`₹ ${numericValue}`);
    } else {
        $(this).val('');
    }
});

$('#discount_price').on('input', function () {
    let input = $(this).val();
    let numericValue = input.replace(/[^0-9.]/g, '');
    if (numericValue.length > 0) {
        $(this).val(`${numericValue}%`);
    } else {
        $(this).val('');
    }
});

let url = {
    add_Product: "{{ route('admin.addProduct') }}",
}





