<?php

namespace App\Http\Controllers\Admin\Landingpage;

use App\Classes\Journey;
use App\Models\LandingPage;
use App\Models\LandingPagesTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController;

class BuilderController extends BaseController
{
    //

    public function __invoke(Request $request,$path=0, $dv='m')
    {
        $user_id = Auth::user()->id ?? 0;
        $token = Journey::current()->tracking->code ?? 0;
        if(!empty($path) && Auth::check()){
            $ldp = Landingpage::wherePrefix('template')->whereId($path)->first();
            if($ldp){
                # kiểm tra đã có landingpage temp hay chưa . nếu chưa có thì tạo
                $search = (object)[
                    'token' => $token,
                    'landingpage_id' => $ldp->id
                ];
                $ldp_temp = LandingPagesTemp::Search($search)->first();
                if(empty($ldp_temp))
                    LandingPagesTemp::create(
                        [
                            'token' => $token,
                            'user_id' => $user_id,
                            'landingpage_id' => $ldp->id,
                        ]
                    );
                    $ldp->landingpage_id = $ldp->id;
                return view('admin.landingpage.work',['landingpage'=>$ldp,'mode'=>'edit']);
            }
            else
                return view('admin.landingpage.work');
        }else{
            // check token required landingpage
            $search = (object)[
                'token' => $token,
                'landingpage_id' => 0
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
                return view('admin.landingpage.work',['landingpage'=>$landingpage]);
            }
            return view('admin.landingpage.work',['landingpage'=>$landingpage_temp]);
        }

    }

    public function preview(Request $request,$id=0){
        $token = Journey::current()->tracking->code ?? 0;
        $device = $request->dv ?? 'm';
        $search = (object)[
            'token' => $token,
            'landingpage_id' => $id,
        ];
        $ldp = LandingPagesTemp::search($search)->first();
        if(!empty($ldp)){
            if($device == 'd')
                return view('admin.landingpage.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content_desktop,true)]);

            return view('admin.landingpage.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content,true)]);
        }
        return view('admin.landingpage.preview');
    }

    public function homePreview(Request $request,$prefix=null,$id=0){
        if(!empty($prefix)){
            
            $device = $request->dv ?? 'm';
            $ldp = LandingPage::wherePrefix($prefix)->find($id);
            if(!empty($ldp)){
                if($device == 'd')
                    return view('admin.landingpage.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content_desktop,true)]);
    
                return view('admin.landingpage.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content,true)]);
            }
            return view('web.pagenotfound');
        }
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
        if($request->device == 'm')
            $ldp->content = json_encode($page);
        else
            $ldp->content_desktop = json_encode($page);
        $ldp->save();
        return $this->sendResponse($ldp, 'update successfully');

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
