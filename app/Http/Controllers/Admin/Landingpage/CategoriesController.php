<?php

namespace App\Http\Controllers\Admin\Landingpage;

use App\Classes\Search;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = (new Search('category_'))->get();

        $categories = Category::search($search)->wherePrefix(!empty($request->prefix)?$request->prefix:'landingpage')->with(['landingpages','users','parentCategory'])->paginate(config('pagination.pagination.per_page'));
        return view(
            'admin.landingpage.categories.index',
            compact(
                'categories'
            )
        );
    }
    public function getListCategories(Request $request)
    {
        //
        $search = (new Search('category_'))->get();

        $categories = Category::search($search)->wherePrefix('landingpage')->with(['landingpages','users','parentCategory'])->paginate(config('pagination.pagination.per_page'));
        if($request->ajax()){
            return view('admin.landingpage.categories.inc.content',compact(
                    'categories'
                )
            )->render();
        }
        return view(
            'admin.landingpage.categories.index',
            compact(
                'categories'
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
        //
        return view('admin.landingpage.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
