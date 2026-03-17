@extends('admin.layouts.master')
@section('title', 'Banners')
@section('content')
<section>
    <div class="card">
        <div class="d-flex justify-content-between align-items-center p-3">
            <h5 class="mb-0">Banners</h5>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table class="table" id="bannersTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Is Slide</th>
                        <th>Page</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- DataTable will populate this -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Add / Edit Modal -->
    <div class="modal fade" id="bannerModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="bannerForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="bannerId" name="id">
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col-12">
                                <label class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" id="title" name="title" class="form-control" placeholder="Enter title" required />
                                <div class="invalid-feedback" id="titleError"></div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                                <div class="invalid-feedback" id="descriptionError"></div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image <span class="text-danger" id="imageRequired">*</span></label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                                <div class="invalid-feedback" id="imageError"></div>
                                <div id="imagePreview" class="mt-2"></div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Is Slide?</label>
                                <div class="form-check">
                                    <input type="checkbox" id="is_slide" name="is_slide" class="form-check-input" value="1">
                                    <label for="is_slide" class="form-check-label">Yes</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">Page</label>
                                <select name="page" id="page" class="form-control">
                                    <option value="">-- Select Page --</option>
                                    <option value="New Arrival">New Arrival</option>
                                    <option value="Dresses">Dresses</option>
                                    <option value="Summer Collection">Summer Collection</option>
                                    <option value="Winter Collection">Winter Collection</option>
                                </select>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveBtn">Save changes</button>
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
    // CSRF token setup for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Initialize DataTable
    const bannersTable = new GenericDataTable({
        tableId: '#bannersTable',
        ajaxUrl: "{{ route('banners.index') }}",
        createModal: '#bannerModal',
        title: 'Banners',
        columns: [
            { data: 'id' },
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'title', name: 'title' },
            { data: 'description', name: 'description' },
            { 
                data: 'image', 
                name: 'image', 
                orderable: false, 
                searchable: false,
                render: function(data) {
                    return data ? `<img src="${data}" width="100" height="60" class="img-thumbnail">` : 'No Image';
                }
            },
            { data: 'is_slide', name: 'is_slide', render: d => d == 1 ? "Yes" : "No" },
            { data: 'page', name: 'page' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ],
        actionRenderer: function(data, type, full, meta) {
            return `
                <div class="d-inline-block">
                    <a href="javascript:;" class="btn btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="icon-base ti tabler-dots-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end m-0">
                        <li><a href="javascript:;" class="dropdown-item editBanner" data-id="${full.id}">Edit</a></li>
                        <li><a href="javascript:;" class="dropdown-item deleteBanner" data-id="${full.id}">Delete</a></li>
                    </ul>
                </div>`;
        },
    });

    // Create banner button click
    $('#bannerModal').on('show.bs.modal', function (e) {
        $('#modalTitle').text('Add Banner');
        $('#bannerForm')[0].reset();
        $('#imageRequired').show();
        $('#imagePreview').html('');
        $('#bannerId').val('');
        $('#is_slide').prop('checked', false); // Reset is_slide checkbox
        $('#page').val(''); // Reset page select
        // Remove validation classes
        $('.form-control').removeClass('is-invalid');
        $('.invalid-feedback').text('');
    });

    // Edit banner
    $(document).on('click', '.editBanner', function () {
        var banner_id = $(this).data('id');
        $.ajax({
            url: "{{ url('banners') }}/" + banner_id + "/edit",
            type: "GET",
            success: function (data) {
                $('#modalTitle').text('Edit Banner');
                $('#bannerId').val(data.banner.id);
                $('#title').val(data.banner.title);
                $('#description').val(data.banner.description);
                $('#is_slide').prop('checked', data.banner.is_slide == 1); // Set is_slide checkbox
                $('#page').val(data.banner.page); // Set page select
                $('#imageRequired').hide();
                
                // Show current image if exists
                if (data.banner.image_url) {
                    $('#imagePreview').html(`<img src="${data.banner.image_url}" width="100" class="img-thumbnail">`);
                } else {
                    $('#imagePreview').html('');
                }
                
                $('#bannerModal').modal('show');
            },
            error: function (xhr) {
                Toast.fire({ icon: 'error', title: 'Failed to fetch banner data.' });
            }
        });
    });

    // Form submission
    $('#bannerForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var id = $('#bannerId').val();
        var url = id ? "{{ url('banners') }}/" + id : "{{ route('banners.store') }}";
        var method = id ? 'POST' : 'POST';
        
        // For update, we need to spoof PUT method
        if (id) {
            formData.append('_method', 'PUT');
        }
        
        $.ajax({
            url: url,
            type: method,
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('#saveBtn').prop('disabled', true).html('Saving...');
            },
            success: function(response) {
                $('#bannerModal').modal('hide');
                bannersTable.getDataTable().ajax.reload();
                Toast.fire({ icon: 'success', title: response.message });
            },
            error: function(xhr) {
                $('#saveBtn').prop('disabled', false).html('Save changes');
                
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('#' + key + 'Error').text(value[0]);
                        $('#' + key).addClass('is-invalid');
                    });
                } else {
                    Toast.fire({ icon: 'error', title: 'An error occurred. Please try again.' });
                }
            },
            complete: function() {
                $('#saveBtn').prop('disabled', false).html('Save changes');
            }
        });
    });

    // Delete banner
    $(document).on('click', '.deleteBanner', function () {
        var banner_id = $(this).data('id');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ url('banners') }}/" + banner_id,
                    type: "DELETE",
                    success: function (response) {
                        bannersTable.getDataTable().ajax.reload();
                        Swal.fire(
                            'Deleted!',
                            response.message,
                            'success'
                        );
                    },
                    error: function (xhr) {
                        Swal.fire(
                            'Error!',
                            'Failed to delete banner.',
                            'error'
                        );
                    }
                });
            }
        });
    });

    // $('#image').on('change', function() {
    //     var file = this.files[0];
    //     if (file) {
    //         var reader = new FileReader();
    //         reader.onload = function(e) {
    //             $('#imagePreview').html('<img src="' + e.target.result + '" width="100" class="img-thumbnail">');
    //         }
    //         reader.readAsDataURL(file);
    //     }
    // });
});
</script>
@endsection