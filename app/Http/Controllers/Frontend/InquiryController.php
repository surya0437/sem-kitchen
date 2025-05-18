<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function inquiryStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:15',
            'subject' => 'required|max:15',
            'message' => 'required',
        ]);

        Inquiry::create($data);
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
