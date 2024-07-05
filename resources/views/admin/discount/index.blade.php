@extends('admin.master')
@section('title')
    Danh sách giảm giá
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
                                {{-- @dd($data) --}}
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="listjs-table" id="customerList">
                                    <div class="row g-4 mb-3">
                                        <div class="col-sm-auto">
                                            <div>
                                                <button type="button" class="btn btn-success add-btn"
                                                    data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i
                                                        class="ri-add-line align-bottom me-1"></i> <a
                                                        href="{{ route('discount.create') }}">Add</a></button>
                                                <a href="#" class="btn btn-soft-danger"><i
                                                        class="ri-delete-bin-2-line"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="d-flex justify-content-sm-end">
                                                <div class="search-box ms-2">
                                                    <form action="#" method="GET">
                                                        <div class="search-box ms-2">
                                                            <input type="text" class="form-control search"
                                                                placeholder="Search..." name="keyword">
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
                                                    <th class="sort" data-sort="customer_name">Mã code</th>
                                                    <th class="sort" data-sort="email">Giá trị</th>
                                                    <th class="sort" data-sort="email">Loại giảm giá</th>
                                                    <th class="sort" data-sort="email">ngày kết thúc</th>
                                                    <th class="sort" data-sort="email">số lượng tối đa</th>




                                                    <th class="sort" data-sort="email">Trang thái</th>
                                                    <th class="sort" data-sort="email">Ngày tạo</th>
                                                    <th class="sort" data-sort="email">ngày cập nhật</th>


                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach ($data as $item)
                                                    <tr>

                                                        {{-- @dd($item) --}}

                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td>{{ $item->code }}</td>
                                                        <td>{{ $item->value }}</td>
                                                        <td>{{ $item->discount_type }}</td>
                                                        <td>{{ $item->expiry_date }}</td>
                                                        <td>{{ $item->usage_limit }}</td>
                                                        <td>{{ $item->status == 1 ? 'hoạt động' : 'không hoạt động' }}</td>
                                                        <td>{{ $item->created_at }}</td>
                                                        <td>{{ $item->updated_at }}</td>


                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <a href="{{ route('discount.edit', [$item->id]) }}"
                                                                        class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                                                </div>
                                                                <form action="{{ route('discount.destroy', [$item->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <div class="remove">
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-danger remove-item-btn"
                                                                            onclick="return confirm('bạn chắc chắn muốn xóa')">Remove</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>


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
