<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use App\Mail\BookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index($id)
    {
        $tour = Tour::find($id);

        return view('pages.booking', compact('tour'));
    }
    public function show()
    {
        return view('pages.booking');
    }
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'tour_id' => 'required|exists:tours,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Tạo mới booking trong database
        $booking = Booking::create($validated);

        // Gửi email thông báo
        Mail::to('ttpthanh1301@gmail.com')->send(new BookingNotification($booking));

        // Chuyển hướng với thông báo thành công
        return redirect()->route('booking', ['id' => $request->tour_id])
            ->with('success', 'Your booking has been successfully placed!');
    }
}
