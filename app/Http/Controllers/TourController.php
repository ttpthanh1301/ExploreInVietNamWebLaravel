<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use Illuminate\Support\Facades\DB;



class TourController extends Controller
{
    public function index(Request $request)
    {
        // Lấy các tham số tìm kiếm từ request
        $query = Tour::query();

        // Kiểm tra xem có yêu cầu sắp xếp không
        if ($request->has('sortBy')) {
            $sortBy = $request->get('sortBy');

            // Xử lý sắp xếp
            switch ($sortBy) {
                case 'price_max':
                    $query->orderBy('price', 'desc');
                    break;
                case 'price_min':
                    $query->orderBy('price', 'asc');
                    break;
                case 'created_at_desc':
                    $query->orderBy('created_at', 'desc');
                    break;
                default:
                    // Mặc định không sắp xếp
                    break;
            }
        }

        // Lấy các tour đã sắp xếp
        $tours = $query->get();

        // Nếu yêu cầu AJAX, trả về chỉ phần danh sách tour
        if ($request->ajax()) {
            return view('pages.tours', compact('tours')); // Trả về lại cùng view 'tours.blade.php'
        }

        // Trả về toàn bộ trang khi không phải AJAX
        return view('pages.tours', compact('tours'));
    }


    // public function search(Request $request)
    // {
    //     // Lấy dữ liệu từ request
    //     $category = $request->input('category');
    //     $location = $request->input('location');

    //     // Khởi tạo query
    //     $query = Tour::query();
    //     // Tìm kiếm theo category hoặc location
    //     if ($category) {
    //         $query->where('category', 'like', '%' . strtolower(trim($category)) . '%');
    //     } else if ($location) {
    //         $query->where('location', 'like', '%' . strtolower(trim($location)) . '%');
    //     }

    //     // Lấy danh sách tour tìm được
    //     $tours = $query->get();
    //     // Trả về kết quả
    //     return view('pages.tours', compact('tours'));
    // }
    public function search(Request $request)
    {
        // Lấy dữ liệu từ request
        $category = $request->input('category');
        $location = $request->input('location');
        $search = $request->query('search'); // Lấy từ khóa tìm kiếm nếu có

        // Khởi tạo query
        $query = Tour::query();

        // Tìm kiếm theo category, location hoặc search keyword
        if ($category) {
            $query->where('category', 'like', '%' . strtolower(trim($category)) . '%');
        }
        if ($location) {
            $query->where('location', 'like', '%' . strtolower(trim($location)) . '%');
        }
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . strtolower(trim($search)) . '%')
                    ->orWhere('description', 'like', '%' . strtolower(trim($search)) . '%')
                    ->orWhere('location', 'like', '%' . strtolower(trim($search)) . '%')
                    ->orWhere('category', 'like', '%' . strtolower(trim($search)) . '%')
                    ->orWhere('price', 'like', '%' . strtolower(trim($search)) . '%')
                    ->orWhere('schedule', 'like', '%' . strtolower(trim($search)) . '%')
                    ->orWhere('period', 'like', '%' . strtolower(trim($search)) . '%');
            });
        }

        // Lấy danh sách tour tìm được
        $tours = $query->get();

        // Trả về kết quả
        return view('pages.tours', compact('tours'));
    }
    /*************  ✨ Codeium Command ⭐  *************/
    /**
     * Display the details of a tour by its ID.
     *
     * @param int $id The ID of the tour to display.
     * @return \Illuminate\View\View The view displaying the tour details.
     */
    /******  8d7d2457-afe5-4f31-8db9-41315c17da4e  *******/
    public function show($id)
    {

        $tour = Tour::find($id); // Lấy thông tin tour theo ID
        $description = $tour->description;

        // Lấy nội dung từng phần
        $included = preg_match('/TOUR INCLUDED:(.*?)TOUR EXCLUDED:/s', $description, $matches) ? trim($matches[1]) : '';
        $excluded = preg_match('/TOUR EXCLUDED:(.*)/s', $description, $matches) ? trim($matches[1]) : '';

        // Gửi dữ liệu đến view
        $viewData = [
            'tour' => $tour,
            'included' => $included,
            'excluded' => $excluded,
        ];
        return view('pages.tour-detail', $viewData);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tourData = $request->only(['title', 'location', 'price', 'description', 'period', 'schedule', 'category']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/tours', 'public');
            $tourData['image'] = $imagePath;
        }

        $tour = Tour::create($tourData);

        return redirect()->route('pages.tours');
    }
}
