@extends('admin.layouts.master')
@section('title', 'Brands')

@section('content')
<section>
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="table" id="dataTable">
                <thead>
                    <tr>
                        <th class="not_include"></th>
                        <th>Sr #</th>
                        <th>Brand Name</th>
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
                    <h5 class="modal-title" id="modelHeading">Add Brand</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('brands.store') }}" method="POST" class="ajax-form">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col-12">
                                <label class="form-label" for="brand">Brand Name<b class="text-danger">*</b></label>
                                <input type="text" id="brand" name="brand" class="form-control" placeholder="Enter brand name" required />
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
        const brandTable = new GenericDataTable({
            tableId: '#dataTable',
            ajaxUrl: "{{ route('brands.index') }}",
            createModal: '#addModal',
            title: 'Brands',
            columns: [
                { data: 'id' },
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'brand' },
                { data: 'action' }
            ],
            actionRenderer: function(data, type, full, meta) {
                return `
                    <div class="d-inline-block">
                        <a href="javascript:;" class="btn btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="icon-base ti tabler-dots-vertical"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end m-0">
                            <li><a href="javascript:;" class="dropdown-item editBrand" data-id="${full.id}">Edit</a></li>
                <li><a href="javascript:;" class="dropdown-item deleteBrand" data-id="${full.id}">Delete</a></li>
                        </ul>
                    </div>
                `;
            },
        });

        $('body').on('click', '.editBrand', function () {
            blockUI();
            var brand_id = $(this).data('id');
            $.get("{{ url('brands') }}" +'/' + brand_id +'/edit', function (data) {
                unblockUI();
                $('#modelHeading').text("Edit Brand");
                $('#addModal').modal('show');
                $('form').attr('action', "{{ url('brands') }}" + '/' + brand_id);
                $('form').append('<input type="hidden" name="_method" value="PUT">');
                $('#brand').val(data.brand.brand);
            })
        });

// Delete Brand with SweetAlert2
        $(document).on('click', '.deleteBrand', function () {
            var brandId = $(this).data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: "This brand will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ url('brands') }}/" + brandId,
                        type: "POST",
                        data: {
                            _method: 'DELETE',
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
                                'Failed to delete brand.',
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
