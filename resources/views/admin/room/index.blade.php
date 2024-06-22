@extends('admin.master')
@section('title')
    Quản lý danh mục
@endsection
@section('main-content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Add, Edit & Remove</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn"
                                                    data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i
                                                        class="ri-add-line align-bottom me-1"></i> <a
                                                        href="{{ route('room.create') }}">Add</a></button>
                                                <a href="#" class="btn btn-soft-danger"><i
                                                        class="ri-delete-bin-2-line"></i></a>
                                            </div>
                                            @if (session('msg'))
                                                <h5 class="text-info">{{ session('msg') }}</h5>
                                            @endif
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <form action="#" method="GET">
                                                        <div class="search-box ms-2">
                                                            <input type="text" class="form-control search"
                                                                placeholder="Search..." value="{{request('keyword')}}" name="keyword">
                                                            <i class="ri-search-line search-icon"></i>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="checkAll"
                                                                value="option">
                                                        </div>
                                                    </th>
                                                    <th class="sort" data-sort="customer_name">Mã phòng</th>
                                                    <th class="sort" data-sort="email">Tên phòng</th>
                                                    <th class="sort" data-sort="email">Số lượng ghế</th>

                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a
                                                                href="javascript:void(0);"
                                                                class="fw-medium link-primary"></a>
                                                        </td>
                                                        <td class="customer_name">{{ $item->id }}</td>
                                                        <td class="customer_name">{{ $item->name }}</td>
                                                        <td class="customer_name">{{ $item->seat_count }}</td>
                                                        {{-- <td class="status"><span
                                                    class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                                    </td> --}}
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a href="{{ route('room.edit',$item->id) }}"
                                                                        class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                                                </div>
                                                                <form action="{{ route('room.destroy', $item->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="remove">
                                                                        <button
                                                                            class="btn btn-sm btn-danger remove-item-btn"
                                                                            onclick="return confirm('Are you sure?')"
                                                                            value="">Remove</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        {{-- <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a"
                                                    style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                                    find any
                                                    orders for you search.</p>
                                            </div>
                                        </div> --}}
                                    </div>

                                    {{-- <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="javascript:void(0);">
                                    Next
                                </a>
                            </div>
                        </div> --}}
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
@endsection
