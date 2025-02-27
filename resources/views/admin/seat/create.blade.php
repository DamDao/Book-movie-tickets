@extends('admin.master')
@section('title')
    Thêm ghế
@endsection
@section('main-content')
    <div class="main-content">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <form id="createproduct-form" autocomplete="off" class="needs-validation" novalidate method="POST"
                        action="{{ route('seat.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-3">
                                            <a href="{{ route('seat.store') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                                    height="20" width="17.5"
                                                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                                                </svg></a>
                                            <div class="mb-3">
                                                <label class="form-label" for="seat_code">
                                                    Mã ghế</label>
                                                {{-- <input type="hidden" class="form-control" id="formAction" name="formAction"
                                                    value="add"> --}}
                                                {{-- <input type="text" class="form-control d-none" id="product-id-input"> --}}
                                                <input type="text" class="form-control" name="seat_code" id="seat_code"
                                                    value="" placeholder="Enter product title" required>

                                                {{-- <div class="invalid-feedback">Please Enter a product title.</div> --}}
                                            </div>
                                            <div class="form-group">
                                                <label for="room_id" name="room_id">Phòng</label>
                                                <select class="form-control" name="room_id" id="">
                                                    <option disabled>Lựa chọn</option>
                                                    @foreach ($data as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Chọn trạng thái</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="status"id="input" value="0"
                                                            checked>Chưa đặt
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="status" id="input"
                                                            value="1">Đã đặt
                                                    </label>
                                                </div>
                                            </div>
                                            <div>
                                                <label>Product Description</label>

                                                <div id="ckeditor-classic">
                                                    <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton.
                                                        Material
                                                        composition is
                                                        100% organic cotton. This is one of the world’s leading designer
                                                        lifestyle
                                                        brands and is
                                                        internationally recognized for celebrating the essence of classic
                                                        American
                                                        cool style,
                                                        featuring preppy with a twist designs.</p>
                                                    <ul>
                                                        <li>Full Sleeve</li>
                                                        <li>Cotton</li>
                                                        <li>All Sizes available</li>
                                                        <li>4 Different Color</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text-end mb-3">
                                                <button type="submit" class="btn btn-success w-sm">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end card -->
@endsection
