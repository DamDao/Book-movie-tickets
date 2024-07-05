<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    const PATH='admin.discount.';
    public function index()
    {
        
        // Xử lý để lấy danh sách sản phẩm và hiển thị ra view
        $data=Discount::query()->latest('id')->get();
    //    dd($data);
        return view(self::PATH.__FUNCTION__,compact('data'));
    }

    public function create()
    {
        // Hiển thị form để tạo sản phẩm mới
        return view(self::PATH.__FUNCTION__);

    }

    public function store(Request $request)
    {
    // dd($request->all());
        // Xử lý lưu sản phẩm mới từ form create vào cơ sở dữ liệu
        $data=$request->except(['_token']);
        $data['status']=isset( $data['status'])?1:0;

        // dd($data);
        Discount::query()->create($data);
        return redirect()->route('discount.index');
    }

    public function show($id)
    {
        // Hiển thị thông tin chi tiết của sản phẩm có id là $id
        return view(self::PATH.__FUNCTION__);

    }

    public function edit($id)
    {
        // Hiển thị form để chỉnh sửa thông tin sản phẩm có id là $id
        $edit=Discount::query()->where('id',$id)->first();
        return view(self::PATH.__FUNCTION__,compact('edit'));

    }

    public function update(Request $request, $id)

    {
        // dd($request->all());

        $data=$request->except(['_token','_method']);
        $data['status']=isset( $data['status'])?1:0;

        // dd($data);
        // Discount::query()->
        Discount::query()->where('id',$id)->update($data);
        return redirect()->route('discount.index');
        // Xử lý cập nhật thông tin sản phẩm có id là $id từ form edit
    }

    public function destroy($id)
    { 
        Discount::query()->where('id',$id)->delete();
        return redirect()->route('discount.index');

        // Xử lý xóa sản phẩm có id là $id
    }
}
