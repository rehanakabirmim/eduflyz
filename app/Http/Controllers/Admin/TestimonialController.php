<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //All Testimonial
    public function AllTestimonial(){
        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonial.alltestimonial', compact('testimonials'));
    }

    //Add Testimonial
    public function AddTestimonial(){
        return view('admin.testimonial.addtestimonial');
    }

    //Store Testimonial
    public function StoreTestimonial(Request $request){
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'comment' => 'required',
            'tm_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('tm_img');
        $img_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $image->move(public_path('upload'), $img_name);
        $img_url = 'upload/'. $img_name;

        Testimonial::insert([
            'name' => $request->name,
            'title' => $request->title,
            'comment' => $request->comment,
            'tm_img' => $img_url,
        ]);

        return redirect()->route('all.testimonial')->with('message', 'Testimonial Stored Successfully');

    }

    //Edit Testimonial
    public function EditTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edittestimonial', compact('testimonial'));
    }

    //Update Testimonial
    public function UpTestimonial(Request $request){
        $id = $request->tm_id;

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'comment' => 'required',
        ]);

        Testimonial::findOrFail($id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'comment' => $request->comment,
        ]);

        return redirect()->route('all.testimonial')->with('message', 'Testimonial Updated Successfully');

    }

    //Delete Testimonial
    public function DelTestimonial($id){
        Testimonial::findOrFail($id)->delete();
        return redirect()->route('all.testimonial')->with('message', 'Testimonial Deleted Successfully');

    }
}
