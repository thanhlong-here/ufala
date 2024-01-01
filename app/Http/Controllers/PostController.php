<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Classes\Search;

class PostController extends Controller
{
    
    public function page()
    {
        return $this->index('page');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($prefix = null)
    {

        //s$search = (new search($prefix))->get();
        //$search->is =  $prefix;
        $query  =  Post::wherePrefix($prefix);
        $list = $query->paginate();
        
        $xlink = (object)[
            'create'      => route("posts.create", ['prefix' => $prefix]),
            'categories'  => route("categories.index"),
        ];
        return view(
            'admin.post.index',
            compact(
                'query',
                'prefix',
                'list',
                'xlink',
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->category) {
            $categories = Category::whereParentId($request->category)->arrange();
            return view('admin.post.create', compact('categories'));
        }
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->data = $request->input(); 
        $Post = Post::create($this->data);
        return redirect()->route('posts.edit', $Post)->with('toastr', [
            'status' => 'success', 'message' => __('Bài viết đã được tạo')        
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function show(Post $Post)
    {
        return empty($Post->category) ?
            view('page.post.static', compact('Post')) :
            view('page.post.detail', compact('Post'))->with(['category' => $Post->category]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $Post, Request $request)
    {
        $categories = Category::whereParentId($request->category)->arrange();
        return view('dev.post.edit', compact('Post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function update(Post $Post, Request $request)
    {
        $this->data = $request->input();
        //if($this->validator()->fails()) return $this->backErr();
        $Post->update($this->data);
        if ($request->hasFile('avatar')) {
            $Post->storeAvatar($request->avatar);
        }
        return redirect()->back()->with('toastr', [
            'status' => 'success', 'message' => __('Cập nhật bài viết thành công')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $Page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $Post)
    {
        $Post->delete();
        return redirect()->back()->with('toastr', [
            'status' => 'success', 'message' => __('Đã xóa bài viết')
        ]);
    }
}
