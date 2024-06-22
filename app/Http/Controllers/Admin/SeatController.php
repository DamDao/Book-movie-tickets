<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Room;
use App\Models\Admin\Seat;
use App\Models\Admin\SeatStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATCH_VIEW = 'admin/seat.';

    public function index(Request $request)
    {
        //
        $keyword = $request->input('keyword');
        $data = Seat::with('seatStatus', 'room')->where('seat_code', 'like', '%' . $keyword . '%')->get();
        // dd($data->seatStatus);

        return view(self::PATCH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = Room::all();
        return view(self::PATCH_VIEW . __FUNCTION__, compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('status');
        // $data = $request->all();
        // dd($data);
        $seat = Seat::create([
            'room_id' => $request->input('room_id'),
            'seat_code' => $request->input('seat_code')
        ]);

        if ($request->has('status')) {
            SeatStatus::create([
                'seat_id' => $seat->id,
                'showtime_id' => $seat->room_id,
                'status' => $request->input('status')
            ]);
        }
        // dd($seat);
        return redirect()->route('seat.index');
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
        $seat = Seat::with('seatStatus', 'room')->findOrFail($id);
        $rooms = Room::all();
        $status = SeatStatus::where('seat_id', $seat->id);
        // dd($seat->seatStatus);

        return view('admin.seat.edit', compact('seat', 'rooms', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $seat = Seat::findOrFail($id);
        $data = $request->all();
        // dd($data);
      
        $seat->update([
            'room_id' => $request->input('room_id'),
            'seat_code' => $request->input('seat_code')
        ]);


        if ($request->has('status')) {
            $seatStatus = DB::table('seat_statuses')
                ->where('seat_id', $seat->id)
                ->where('showtime_id', $seat->room_id)
                ->update(['status' => $request->input('status')]);
            // dd($seatStatus);
        }

        return redirect()->route('seat.index')->with('success', 'Seat updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seat = Seat::findOrFail($id);
        $seat->seatStatus()->delete();
        $seat->delete();
        return redirect()->route('seat.index')->with('success', 'Seat deleted successfully');
    }
}
