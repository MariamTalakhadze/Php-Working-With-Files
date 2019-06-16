<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.blog.create");
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            "body"  => "required",
            "sub_title" => "required"
        ], [
            "title.required"    => "სათაურის შეყვანა სავალდებულოა",
            "body.required"    => "აღწერის შეყვანა სავალდებულოა",
            "sub_title.required"    => "ქვე სათაურის შეყვანა სავალდებულოა"
        ]);        

        $inputs = $request->all();        
        $inputs["author"] = Auth::user()->name;

        $blog = Blog::create([
            "title" => $inputs["title"],
            "sub_title" => $inputs["sub_title"],
            "body"  => $inputs["body"],
            "is_published"  => array_key_exists("is_published",$inputs) ? $inputs["is_published"] : 2,
            "author"    => $inputs["author"]
        ]);

        return redirect()->back();
    }




    public function manage(){
        $blogs= Blog::all()->where("is_published", "<", "3");

        return View("admin.blog.all", compact("blogs"));
    }


    public function confirm($id){
        $blog= Blog::find($id);
        $blog->is_published=1;
        $blog->save();
        return redirect("admin/blog/manage");

    }

    public function delete($id){
        $blog= Blog::find($id);
        $blog->delete();
        $blog->save();
        return redirect("admin/blog/manage");
    }

    public function edit( $id)
    {
        dd("edit");
    }
    public function deleted(){
        $blogs= Blog::onlyTrashed()->get();
        return View("admin.blog.delete", compact("blogs"));
    }
    public function confirmFromAdmin($id){
        $blog= Blog::withTrashed()->find($id)->restore();
        $blog2= Blog::find($id);
        $blog2->is_published=2;
        $blog2->save();
        return redirect("admin/blog/manage/deleted");

    }
    public function returnToAdmin($id){
        $blog= Blog::withTrashed()->find($id)->restore();
        $blog2= Blog::find($id);
        $blog2->is_published=1;
        $blog2->save();
        return redirect("admin/blog/manage/deleted");
    }
    public function destory($id){
        $blog= Blog::onlyTrashed($id)->forceDelete();
        return redirect("admin/blog/manage/deleted");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
