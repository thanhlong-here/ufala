<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($prefix = null,$id = 0)
    {
        //$id     =   request('id', 0);
        $query  =   Category::wherePrefix($prefix)->whereParentId($id);
        $list   =   $query->paginate(8);
        $item   =   Category::find($id);
        $path   =   empty($prefix) ? "categories.index" :"categories.prefix";

        return view(
            'admin.category.index',
            compact(
                'list',
                'id',
                'item',
                'prefix',
                'path'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        //if($this->validator()->fails()) return $this->backErr();
        $category = Category::create($data);

        if ($category) {

            if ($request->hasFile('avatar')) {
                $category->storeAvatar($request->avatar);
            }
            return redirect()->back()->with(['status' => 'success', 'message' => 'Record created!']);
        }


        return redirect()->back()->with(['status' => 'failed', 'message' => 'Error!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
       return $this->index($category->prefix,$category->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->data = $request->input();
        //if($this->validator()->fails()) return $this->backErr();
        if ($request->hasFile('avatar')) {
            $category->storeAvatar($request->avatar);
        }
        $category->update($this->data);
        return redirect()->back()->with(['status' => 'success', 'message' => 'Record updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with(['status' => 'success', 'message' => 'Record deleted!']);
    }
}
