<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetup;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Faq;
use App\Models\OurClient;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\SellEquipment;
use App\Models\ServiceArea;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $businessDetail = BusinessSetup::first();
        View::share(['businessDetail' => $businessDetail]);
    }

    public function index()
    {
        $carousels = Carousel::where('is_active', 1)->get();
        $serviceAreas = ServiceArea::where('is_active', 1)->orderBy('name', 'asc')->get();
        $ourClients = OurClient::where('is_active', 1)->get();
        $testimonials = Testimonial::where('is_active', 1)->get();
        return view('pages.frontend.home', compact('carousels', 'serviceAreas', 'ourClients', 'testimonials'));
    }

    public function about()
    {
        $teams = OurTeam::where('is_active', 1)->get();
        return view('pages.frontend.about', compact('teams'));
    }

    public function contact()
    {
        $faqs = Faq::where('is_active', 1)->get();
        return view('pages.frontend.contact', compact('faqs'));
    }

    public function product()
    {
        $categories = Category::where('is_active', 1)->get();
        $products = Product::where('is_active', 1)
            ->whereHas('category', function ($query) {
                $query->where('is_active', 1);
            })
            ->paginate(8);

        return view('pages.frontend.product', compact('categories', 'products'));
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->where('is_active', 1)->first();
        $randomProducts = Product::where('is_active', 1)
            ->whereHas('category', function ($query) {
                $query->where('is_active', 1);
            })
            ->inRandomOrder()
            ->limit(4)
            ->get();


        // return $product;
        return view('pages.frontend.single-product', compact('product', 'randomProducts'));
    }
    public function categoryWiseProduct($slug)
    {
        $categories = Category::where('is_active', 1)->get();

        $products = Product::where('is_active', 1)
            ->whereHas('category', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->paginate(12);

        return view('pages.frontend.category-wise-product', compact('categories', 'products'));
    }
    public function sellEquipment()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('pages.frontend.sell-equipment', compact('categories'));
    }

    public function equipmentDetail($slug)
    {
        $equipment = SellEquipment::where('slug', $slug)->first();

        return view('pages.admin.view-eqipment', compact('equipment'));
    }

    public function search(Request $request)
    {
        $query = $request->SearchQuery;
        $categories = Category::where('is_active', 1)->get();
        $products = Product::where('name', 'like', '%' . $query . '%')->where('is_active', 1)->paginate(8);
        return view('pages.frontend.search', compact('products', 'categories'));
    }
}
