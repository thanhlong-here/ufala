<?php

namespace App\Http\Controllers\Web\Landingpage;

use App\Classes\Journey;
use App\Http\Controllers\Controller;
use App\Models\LandingPage;
use App\Models\LandingPagesTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController;

class BuilderController extends BaseController
{
    //

    public function __invoke(Request $request,$path=0,$dv='m')
    {

        $user_id = Auth::user()->id ?? 0;
        $token = Journey::current()->tracking->code ?? 0;
        if(!empty($request->prefix)){
            $ldp = LandingPage::wherePrefix($request->prefix)->find($path);
            if(!empty($ldp)){
                $search = (object)[
                    'token' => $token,
                    'landingpage_id' => 0,
    //                'user_id' => $user_id
                ];
                $landingpage_temp = LandingPagesTemp::search($search)->first();
                if(empty($landingpage_temp)){
                    //            thêm mới
                    $landingpage = LandingPagesTemp::create(
                        [
                            'width' => !empty($ldp->width) ? $ldp->width : 0,
                            'height' => !empty($ldp->height) ? $ldp->height : 0,
                            'name' => '',
                            'token' => $token,
                            'user_id' => $user_id
                        ]
                    );
                    if($dv == 'd'){
                        #desktop
                        $landingpage['content_desktop'] = !empty($ldp->content_desktop) ? $ldp->content_desktop : null; 
                    }else{
                        #mobile
                        $landingpage['content'] = !empty($ldp->content) ? $ldp->content : null;
    
                    }
    
                    return view('builder.work',['landingpage'=>$landingpage]);
                }
                return view('builder.work',['landingpage'=>$ldp]);
            }else{
                return view('web.pagenotfound');
            }
        }
        if(!empty($path) && Auth::check()){
            $search = (object)[
                'id' => $path,
                'created_by' => $user_id
            ];
            $ldp = LandingPage::search($search)->first();
            if(empty($ldp)){
                return view('web.pagenotfound');
            }

            $search->token = $token;
            $search->landingpage_id = $ldp->id ?? 0;
            $landingpage_temp = LandingPagesTemp::search($search)->first();
            if(empty($landingpage_temp)){
                //            thêm mới
                $landingpage = LandingPagesTemp::create(
                    [
                        'width' => !empty($ldp->width) ? $ldp->width : 0,
                        'height' => !empty($ldp->height) ? $ldp->height : 0,
                        'name' => !empty($ldp->name) ? $ldp->name : '',
                        'token' => $token,
                        'user_id' => $user_id,
                        'landingpage_id' => !empty($ldp->id) ? $ldp->id : 0
                    ]
                );
                if($dv == 'd'){
                    #desktop
                    $landingpage['content_desktop'] = !empty($ldp->content_desktop) ? $ldp->content_desktop : null; 
                }else{
                    #mobile
                    $landingpage['content'] = !empty($ldp->content) ? $ldp->content : null;

                }
                if(!empty($ldp))
                $landingpage->landingpage_id = $ldp->id;

                return view('builder.work',['landingpage'=>$landingpage]);
            }
            if(!empty($ldp)){
                $ldp->landingpage_id = $ldp->id;
                return view('builder.work',['landingpage'=>$ldp]);
            }

            return view('builder.work',['landingpage'=>$landingpage_temp]);

        }else{
            // check token required landingpage
            $search = (object)[
                'token' => $token,
                'landingpage_id' => 0,
//                'user_id' => $user_id
            ];
            $landingpage_temp = LandingPagesTemp::search($search)->first();
            if(empty($landingpage_temp)){
                //            thêm mới
                $landingpage = LandingPagesTemp::create(
                    [
                        'token' => $token,
                        'user_id' => $user_id
                    ]
                );
                return view('builder.work',['landingpage'=>$landingpage]);
            }
            return view('builder.work',['landingpage'=>$landingpage_temp]);
        }

    }

    public function preview(Request $request,$id=0){
        // $user_id = Auth::user()->id ?? 0;
        $token = Journey::current()->tracking->code ?? 0;
        $device = $request->device ?? 'm';
        $search = (object)[
            'token' => $token,
            'landingpage_id' => $id,
//            'user_id' => $user_id
        ];
        $ldp = LandingPagesTemp::search($search)->first();
        if(!empty($ldp)){
            if($device == 'd')
                return view('builder.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content_desktop,true)]);

            return view('builder.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content,true)]);
        }
        return view('builder.preview');
    }

    public function cloneLanding($path){
        $user_id = Auth::user()->id ?? 0;
        $token = Journey::current()->tracking->code ?? 0;
        if(!empty($path) && Auth::check()){
            $search = (object)[
                'id' => $path,
                'created_by' => $user_id
            ];
            $ldp = LandingPage::search($search)->first();
            if(empty($ldp)){
                return view('web.pagenotfound');
            }

            $search->token = $token;
            $search->landingpage_id = 0;
            $landingpage_temp = LandingPagesTemp::search($search)->first();
            if(empty($landingpage_temp)){
                //            thêm mới
                $landingpage = LandingPagesTemp::create(
                    [
                        'width' => !empty($ldp->width) ? $ldp->width : 0,
                        'height' => !empty($ldp->height) ? $ldp->height : 0,
                        'name' => !empty($ldp->name) ? $ldp->name . "_clone" : '',
                        'token' => $token,
                        'user_id' => $user_id,
                        'landingpage_id' => 0,
                        'content_desktop' => !empty($ldp->content_desktop) ? $ldp->content_desktop : null,
                        'content' => !empty($ldp->content) ? $ldp->content : null,
                    ]
                );
                return redirect(route('landingpage.work'));
            }
            $landingpage_temp->width = !empty($ldp->width) ? $ldp->width : 0;
            $landingpage_temp->height = !empty($ldp->height) ? $ldp->height : 0;
            $landingpage_temp->name = !empty($ldp->name) ? $ldp->name . "_clone" : '';
            $landingpage_temp->token = $token;
            $landingpage_temp->user_id = $user_id;
            $landingpage_temp->landingpage_id = 0;
            $landingpage_temp->content_desktop = !empty($ldp->content_desktop) ? $ldp->content_desktop : null;
            $landingpage_temp->content = !empty($ldp->content) ? $ldp->content : null;
            $landingpage_temp->save();
            return redirect(route('landingpage.work'));

        }
        return view('web.pagenotfound');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // make landingpage with token ;

        $landingpage = LandingPagesTemp::where('token','=',$this->token)->get()->first();

        if(empty($landingpage)){
            $landingpage = LandingPagesTemp::create(
                [
                    'token' => $this->token
                ]
            );
        }
        return redirect()->route('landingpage.builder', $this->token)->with('landingpage',$landingpage);
    }

    public function update(Request $request){
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
        $page =  $request->landingpage;
        if(!empty($page['pages'])){
            foreach ($page['pages'] as &$pages){
                foreach ($pages['children'] as $key=>$child){
                    $child = array_map(function ($array_item){
                        return is_null($array_item) ? "" : $array_item;
                    }, $child);
                    $child = array_map(function ($array_item){
                        return is_array($array_item) ? (object)$array_item : $array_item;
                    }, $child);
                    $pages['children'][$key] = $child;
                }
            }
        }
        $search = (object)[
            'token' => Journey::current()->tracking->code ?? 0,
            'landingpage_id' => $request->landingpage_id ?? 0,
            'created_by' =>  Auth::user()->id ?? 0
        ];
        $ldp = LandingPagesTemp::search($search)->first();
        if(empty($ldp)){
            return  $this->sendError('Landing page not found','token not found or expired',404);
        }
        $ldp->width = !empty($page['width'])  ? $page['width'] : 0;
        $ldp->height = !empty($page['height']) ? $page['height'] : 0;
        #check device
        if($request->device == 'd'){
            $ldp->content_desktop = json_encode($page);
        }else{
            $ldp->content = json_encode($page);
        }
        $ldp->save();
        return $this->sendResponse([], 'update successfully');

    }
    public function getDetailLandingpageTemp()
    {
        $token = Journey::current()->tracking->code ?? 0;
        $landingpage_temp = LandingPagesTemp::where('token','=',$token)->first();
        if(empty($landingpage_temp)){
            return  $this->sendError('Landing page not found','landingpage not found',404);
        }
        return $this->sendResponse($landingpage_temp, 'get detail landingpage success');
    }
}
