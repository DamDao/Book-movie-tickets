@extends('admin.master')
@section('title')
    Thêm mã giảm giá
@endsection
@section('main-content')
    
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <form action="{{route('discount.store')}}" method="POST" class="row g-3">
@csrf
                        <div class="col-md-12">
                            <label for="fullnameInput" class="form-label">mã code</label>
                            <input type="text" name="code" class="form-control" id="fullnameInput">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">giảm giá</label>
                            <input type="text" name="value" class="form-control" id="inputEmail4" >
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">loại giảm giá</label>
                            <input type="text" name="discount_type" class="form-control" id="inputPassword4" >
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">ngày hết hạn</label>
                            <input type="date" name="expiry_date" class="form-control" id="inputAddress" >
                        </div>
                        <div class="col-md-6">
                            <label for="inputAddress2" class="form-label">số lần được sử dụng</label>
                            <input type="number" name="usage_limit" class="form-control" id="inputAddress2" >
                        </div>
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="SwitchCheck1">trạng thái hoạt động</label>

                            <input class="form-check-input" name="status" type="checkbox" role="switch" id="SwitchCheck1" checked>
                        </div>
                       
                        <div class="col-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Thêm mã giảm giá</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
   
    <!-- end card -->
@endsection
