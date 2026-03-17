@extends('admin.layouts.master')
@section('title', 'Category')
@section('content')
<section>
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th class="not_include"></th>
                        <th>Sr #</th>
                        <th>Heading</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Stock</th>
                        <th>Brand</th>
                        <th>Page</th>
                        <th class="not_include">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Add/Edit Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelHeading">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('Category.store') }}" method="POST" class="ajax-form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col-12">
                                <label class="form-label" for="heading">Heading<b class="text-danger">*</b></label>
                                <input type="text" id="heading" name="heading" class="form-control" placeholder="Enter heading" required />
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="price">Price<b class="text-danger">*</b></label>
                                <input type="number" id="price" name="price" class="form-control" required />
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="discount">Discount</label>
                                <input type="number" id="discount" name="discount" class="form-control" value="0" />
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="stock">Stock<b class="text-danger">*</b></label>
                                <input type="number" id="stock" name="stock" class="form-control" required />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="brand">Brand</label>
                                <select id="brand" name="brand" class="form-control">
                                    <option value="">-- Select Brand --</option>
                                    @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="delivery_description">Delivery Description</label>
                                <textarea id="delivery_description" name="delivery_description" class="form-control"></textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="ship_charges">Shipping Charges</label>
                                <input type="number" id="ship_charges" name="ship_charges" class="form-control" />
                            </div>

                             <div class="col-6">
                                <label class="form-label" for="page">Page</label>
                                <select id="page" name="page" class="form-control">
                                    <option value="">-- Select Page --</option>
                                    <option value="New Arrivals (Trending Products)">New Arrivals (Trending Products)</option>
                                    <option value="New Arrivals">New Arrivals</option>
                                    <option value="Dresses">Dresses</option>
                                    <option value="Summer Collection">Summer Collection</option>
                                    <option value="Winter Collection">Winter Collection</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label class="form-label" for="thumbnail">Thumbnail</label>
                                <input type="file" id="thumbnail" name="thumbnail" class="form-control" />
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="images">Images</label>
                                <input type="file" id="images" name="images[]" class="form-control" multiple />
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page-js')
<script>
$(document).ready(function() {
    const CategoryTable = new GenericDataTable({
        tableId: '#dataTable',
        ajaxUrl: "{{ route('Category.index') }}",
        createModal: '#addModal',
        title: 'Category',
        columns: [
            { data: 'id' },
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'heading' },
            { data: 'price' },
            { data: 'discount' },
            { data: 'stock' },
            { data: 'brand' },
            { data: 'page' },
            { data: 'action' }
        ],
        actionRenderer: function(data, type, full, meta) {
            return `
                <div class="d-inline-block">
                    <a href="javascript:;" class="btn btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="icon-base ti tabler-dots-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end m-0">
                        <li><a href="javascript:;" class="dropdown-item editCategory" data-id="${full.id}">Edit</a></li>
                <li><a href="javascript:;" class="dropdown-item deleteCategory" data-id="${full.id}">Delete</a></li>
                    </ul>
                </div>`;
        },
    });

$('body').on('click', '.editCategory', function () {
    blockUI();
    var category_id = $(this).data('id');
    $.get("{{ url('Category') }}/" + category_id + "/edit", function (data) {
        unblockUI();

        $('#modelHeading').text("Edit Category");
        $('#addModal').modal('show');

        // set form action + method
        $('form').attr('action', "{{ url('Category') }}/" + category_id);
        $('form').find('input[name="_method"]').remove();
        $('form').append('<input type="hidden" name="_method" value="PUT">');

        // fill inputs
        $('#heading').val(data.category.heading);
        $('#price').val(data.category.price);
        $('#discount').val(data.category.discount);
        $('#stock').val(data.category.stock);
        $('#brand').val(data.category.brand);
        $('#delivery_description').val(data.category.delivery_description);
        $('#ship_charges').val(data.category.ship_charges);
        $('#page').val(data.category.page);


        // show thumbnails / images preview (optional)
        // if (data.category.thumbnail) {
        //     $('#thumbnail').after('<img src="/' + data.category.thumbnail + '" width="80" class="mt-2 thumb-preview">');
        // }
        // if (data.category.images) {
        //     let imgs = data.category.images.split(',');
        //     let previewHtml = imgs.map(img => `<img src="/${img}" width="80" class="me-2 mb-2">`).join('');
        //     $('#images').after('<div class="images-preview mt-2">'+previewHtml+'</div>');
        // }
    });
});



    // Delete category
        $(document).on('click', '.deleteCategory', function () {
            var category_id = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "This will permanently delete the category!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('Category') }}/" + category_id,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (response) {
                            $('#dataTable').DataTable().ajax.reload();
                            Swal.fire(
                                'Deleted!',
                                response.message,
                                'success'
                            );
                        },
                        error: function (xhr) {
                            Swal.fire(
                                'Error!',
                                'Failed to delete category.',
                                'error'
                            );
                        }
                    });
                }
            });
        });


});
</script>
@endsection
