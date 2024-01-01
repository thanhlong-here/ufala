<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LandingPage as landingpages;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(Auth::user());
        return $this->sendResponse(LandingPages::paginate(10),'get list Landing page success');
    }

    public function getListTemplate(Request $request)
    {
        $cate = '';
            if(!empty($request->category_id)){
                $cate = $request->category_id;
                $ldp = Landingpages::wherePrefix('template')->whereCategoryId($request->category_id)->orderBy('id','DESC')
                        ->with(['medias' => function($query){
                            $query->wherePrefix('mobile');
                        }, 'user_create','user_update' ])
                        ->paginate(config('pagination.pagination.per_page'));
                    }
            else
                $ldp =  Landingpages::wherePrefix('template')->orderBy('id','DESC')
                        ->with(['medias' => function($query){
                            $query->wherePrefix('mobile');
                        }, 'user_create','user_update' ])
                        ->paginate(config('pagination.pagination.per_page'));
            return $this->sendResponse($ldp, 'get list success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(!empty($request->landingpage)){
            $page =  $request->landingpage;
            $ldp = [
                'width' => !empty($page['width'])?$page['width']:0,
                'height' => !empty($page['height'])?$page['height']:0,
                'content' => json_encode($page),
                'name' => 'test',
            ];

            $ldp = LandingPages::create($ldp);

            return $this->sendResponse($ldp, 'create successfully');
        }else{
            return $this->sendError('The given data was invalid.', 'landingpage field is not required','404');
        }
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
        $ldp = LandingPages::find($id);
        if(empty($ldp)){
            return  $this->sendError('Landing page not found','Id not found',404);
        }
        return $this->sendResponse($ldp, 'Get details LandingPage successfully');
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
        $rule = [
            'landingpage' => 'required'
        ];

        $message = [
            'landingpage.required' => 'landingpage field is not required',
        ];
        $validate = Validator::make($request->all(), $rule, $message);
        if($validate->fails()){
            echo $validate->fails();
            return  $this->sendError('The given data was invalid.',$validate->errors()->first(),404);
        }
        $ldp = LandingPages::find($id);
        if(empty($ldp)){
            return  $this->sendError('Landing page not found','Id not found',404);
        }
        $page =  $request->landingpage;
        $ldp->width = !empty($page['width'])  ? $page['width'] : 0;
        $ldp->height = !empty($page['height']) ? $page['height'] : 0;
        $ldp->content = json_encode($page);
        $ldp->save();
        return $this->sendResponse([], 'update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LandingPages::where('id',$id)->delete();
        return $this->sendResponse('done', 'update successfully');
    }
}
