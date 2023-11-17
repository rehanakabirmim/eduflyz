<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    //Add Course Category
    public function AddCourseCategory(){
        return view('admin.course-category.addcategory');
    }

    //All Course Category
    public function AllCourseCategory(){
        $categories = CourseCategory::all();
        return view('admin.course-category.allcategory', compact('categories'));
    }

    //Store Course Category
    public function StoreCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:course_categories',
        ]);

        CourseCategory::insert([
            'category_name' => $request->category_name,
            'slug'  => strtolower(str_replace(array( ' ','\'','"',',' , ';', '<', '>','/','%' ), '-', $request->category_name)),
            
        ]);

        return redirect()->route('allcourse.category')->with('message', 'Category added successfully!');

    }

    //Edit Course Category
    public function EditCourseCategory($id){
        $category = CourseCategory::findOrFail($id);
        return view('admin.course-category.editcategory', compact('category'));
    }

    //Update Course Category
    public function UpdateCategory(Request $request){
        $request->validate([
            'category_name' => 'required|unique:course_categories',
        ]);

        $id = $request->category_id;

        CourseCategory::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'slug'  => strtolower(str_replace(array( ' ','\'','"',',' , ';', '<', '>','/','%' ), '-', $request->category_name)),
            
        ]);

        return redirect()->route('allcourse.category')->with('message', 'Category upadted successfully!');

    }

    //Delete Course Category
    public function DelCourseCategory($id){
        CourseCategory::findOrFail($id)->delete();

        return redirect()->route('allcourse.category')->with('message', 'Category Deleted Successfully!');
    }
}
