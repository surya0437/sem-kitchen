<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SellEquipment;
use App\Http\Controllers\Controller;

class SellEquipmentController extends Controller
{
    public function sellEquipmentStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'equipmentType' => 'required|string',
            'equipmentName' => 'required|string',
            'equipmentCondition' => 'required|string',
            'images' => 'required|array|max:5',
            'images.*' => 'required|mimes:jpg,jpeg,png|max:1024',
        ], [
            'images.*.image' => 'You must upload at least one image.',
            'images.*.mimes' => 'Only JPG, JPEG, and PNG images are allowed.',
            'images.*.max' => 'Each image must not be larger than 1MB.',
        ]);

        $uploadedImages = [];

        foreach ($request->file('images') as $image) {
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $folder = 'equipment-images';
            $image->storeAs($folder, $filename, 'public');
            $uploadedImages[] = $folder . '/' . $filename;
        }

        $requestNumber = 'req-' . Str::random(6) . '-' . now()->format('His');

        SellEquipment::create([
            'request_number' => strtoupper($requestNumber),
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'equipment_type' => $request->equipmentType,
            'equipment_name' => $request->equipmentName,
            'equipment_condition' => $request->equipmentCondition,
            'image' => $uploadedImages,
            'slug' => uniqid()
        ]);

        return redirect()->back()->with('success', 'Your equipment has been submitted successfully.');
    }
}
