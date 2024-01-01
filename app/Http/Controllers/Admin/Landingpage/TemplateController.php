<?php

namespace App\Http\Controllers\Admin\Landingpage;

use App\Classes\Journey;
use App\Http\Controllers\Api\BaseController;
use App\Models\LandingPage;
use App\Models\LandingPagesTemp;
use App\Models\LandingpageTemplates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TemplateController extends BaseController
{
    protected $journey;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $ldp = LandingPage::wherePrefix('template')->orderBy('id','DESC')
            ->with(
                ['medias' => function($query){
                $query->wherePrefix('mobile');
                },
                'user_create','user_update' ]
            )
            ->paginate(config('pagination.pagination.per_page'));
        if ($request->ajax()) {
             return View('admin.landingpage.template.content', compact('ldp'))->render();
        }
        return view('admin.landingpage.template.index',compact('ldp'));
    }
    public function getListTemplate(Request $request)
    {
        $cate = '';
        if ($request->ajax()) {
            if(!empty($request->category_id)){
                $cate = $request->category_id;
                $ldp = Landingpage::wherePrefix('template')->whereCategoryId($request->category_id)->orderBy('id','DESC')
                        ->with(['medias' => function($query){
                            $query->wherePrefix('mobile');
                        }, 'user_create','user_update' ])
                        ->paginate(config('pagination.pagination.per_page'));
                    }
            else
                $ldp =  Landingpage::wherePrefix('template')->orderBy('id','DESC')
                        ->with(['medias' => function($query){
                            $query->wherePrefix('mobile');
                        }, 'user_create','user_update' ])
                        ->paginate(config('pagination.pagination.per_page'));
            return view('admin.landingpage.template.content', compact(['ldp','cate']))->render();
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $request->all();
        if(!Auth::check()) return $this->sendResponse('The given data was invalid.', 'No access, please login to take action');
        $token = Journey::current()->tracking->code;
        $ldpTemp = LandingPagesTemp::where('id', '=', $request['id'] ?? 0)->where('token', '=', $token)->first();
        if(!empty($ldpTemp)){
            $ldp = [
                'width' => !empty($ldpTemp->width)?$ldpTemp->width:0,
                'height' => !empty($ldpTemp->height)?$ldpTemp->height:0,
                'name' => !empty($request['name']) ? $request['name'] : '',
                'category_id' => !empty($request['category_id']) ? $request['category_id'] : 0,
                'token' => $token,
                'prefix' => 'template',
                'created_by' => Auth::user()->id
            ];
            if(!empty($request['device']) && $request['device'] == 'm'){
                $ldp['content'] = $ldpTemp->content;
            }elseif(!empty($request['device']) && $request['device'] == 'd'){
                $ldp['content_desktop'] = $ldpTemp->content;
            }else
                return redirect()->route('admin.ldp-builder')->with('toastr', [
                    'status' => 'landingpage is not found', 'message' => 'The given data was invalid.'
                ]);

//                tạo landingpage
            $base64String = $request['avatar'] ?? '';
            $ldp = Landingpage::create($ldp);
            $ldp->storeAvatarBase64($base64String, $request['device'] != 'd' ? 'mobile':'desktop');

            return redirect()->route('admin.ldp-builder')->with('toastr', [
                'status' => 'success', 'message' => 'Record created!'
            ]);
        }else{

            return redirect()->route('admin.ldp-builder')->with('toastr', [
                'status' => 'landingpage is not found', 'message' => 'The given data was invalid.'
            ]);
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
        $ldp = LandingPage::find($id);
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

        $request = $request->all();
        if(!Auth::check()) return $this->sendResponse('The given data was invalid.', 'No access, please login to take action');

        $token = Journey::current()->tracking->code;
        $search = (object)[
            'token' => $token,
            'landingpage_id' => !empty($request['id']) ? $request['id'] : 0
        ];
        $ldpTemp = LandingPagesTemp::search($search)->first();
        if(!empty($ldpTemp) && !empty($request['id'])){
//                thực hiện update  template
                $landingpage = Landingpage::find($request['id']);
                if(empty($landingpage)) return $this->sendError('The given data was invalid.', 'tempalte is not found','404');
                $landingpage->width = !empty($ldpTemp->width)?$ldpTemp->width:0;
                $landingpage->height = !empty($ldpTemp->height)?$ldpTemp->height:0;
                $landingpage->name = !empty($request['name']) ? $request['name'] : '';
                $landingpage->category_id = !empty($request['category_id']) ? $request['category_id'] : 0;
                $landingpage->token = $token;
                $landingpage->updated_by = Auth::user()->id;
                if($request['device'] == 'm'){
                    $landingpage->content = $ldpTemp->content;
                    $landingpage->dropmedia('mobile');
                    $base64String = $request['avatar'] ?? '';
                    $landingpage->storeAvatarBase64($base64String,'mobile');
                }else{
                    $landingpage->content_desktop = $ldpTemp->content_desktop;
                    $landingpage->dropmedia('desktop');
                    $base64String = $request['avatar'] ?? '';
                    $landingpage->storeAvatarBase64($base64String,'desktop');
                }
                $landingpage->save();
                return redirect()->back();
        }else{
            return redirect()->route('admin.ldp-builder')->with('toastr', [
                'status' => 'landingpage is not found', 'message' => 'The given data was invalid.'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LandingPage::where('id',$id)->delete();
        return $this->sendResponse('done', 'update successfully');
    }

    public function report(){

        $ldp = LandingPage::where('user_id','=', Auth::user()->id)->orderBy('id','DESC')->paginate(3);
        return view('web.landingpage.report',['landingpages' => $ldp]);
    }

}
