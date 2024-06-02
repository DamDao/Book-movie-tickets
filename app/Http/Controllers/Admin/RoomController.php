<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATCH_VIEW = 'admin/room.';
    public function index(Request $request)
    {
        //
        $keyword = $request->input('keyword');
       $data= Room::where('name', 'like', '%'.$keyword.'%')->get();

        // $data = Room::all();
        // dd($data);
        //    return view('admin.room.index',compact('data'));
        return view(self::PATCH_VIEW . __FUNCTION__, compact('data','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(self::PATCH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        Room::create($request->all());
        return redirect()->route('room.index')->with('msg', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $room = Room::find($id);
        return view(self::PATCH_VIEW . __FUNCTION__, compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the room
        $room = Room::find($id);

        $room->update($request->all());
        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $rom = Room::find($id);
        $rom->delete();
        return back()->with('msg', 'Xóa thành công');
    }
}
