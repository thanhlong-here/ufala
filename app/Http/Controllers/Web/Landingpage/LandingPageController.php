<?php

namespace App\Http\Controllers\Web\Landingpage;

use App\Classes\Journey;
use App\Http\Controllers\Api\BaseController;
use App\Models\LandingPage;
use App\Models\LandingPagesTemp;
use App\Models\Link;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

class LandingPageController extends BaseController
{
    protected $journey;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $ldp = LandingPage::where('user_id','=', Auth::user()->id)->orderBy('id','DESC')->paginate(config('pagination.pagination.per_page'));
        return $this->sendResponse(LandingPage::paginate(10),'get list Landing page success');
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
        if(!empty($request['prefix']) && $request['prefix'] == 'template')
            $ldpTemp = LandingPagesTemp::where('token', '=',$token)->first();
        else
            $ldpTemp = LandingPagesTemp::whereId($request['id'] ?? 0)->where('token', '=',$token)->first();
        if(!empty($ldpTemp)){
            $ldp = [
                'width' => !empty($ldpTemp->width)?$ldpTemp->width:0,
                'height' => !empty($ldpTemp->height)?$ldpTemp->height:0,
                'content' => $ldpTemp->content,
                'content_desktop' => $ldpTemp->content_desktop,
                'name' => !empty($request['name'])?$request['name']:'',
                'token' => $token,
                'created_by' => Auth::user()->id
            ];
//                tạo landingpage
                $ldp = LandingPage::create($ldp);
//            }
            $base64String = $request['avatar'] ?? '';
            $ldp->storeAvatarBase64($base64String,'mobile');
            $url = $ldp->pushlish(
                uniqid(),'landingpage',Auth::id()

            );
            return $this->sendResponse(['ldp' => $ldp, 'short' => $url], 'create successfully');
        }else{
            return $this->sendError('The given data was invalid.', 'landingpage is not found','404');
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
        $ldp = LandingPage::find($id);
        if(empty($ldp)){
            return  $this->sendError('Landing page not found','Id not found',404);
        }
        $search = (object)[
            'token' => Journey::current()->tracking->code,
            'landingpage_id' => $id
        ];
        $ldpTemp = LandingPagesTemp::search($search)->first();
        if (!empty($ldpTemp))
        {
                $ldp->width = !empty($ldpTemp->width)?$ldpTemp->width:0;
                $ldp->height = !empty($ldpTemp->height)?$ldpTemp->height:0;
                $ldp->name = !empty($request->name)?$request->name:'';
                $ldp->token = Journey::current()->tracking->code;
                $ldp->created_by = Auth::user()->id;
                $device = !empty($request->device) ? $request->device : 'm';
                if($device == 'm'){
                    $ldp->content = $ldpTemp->content;
                    $ldp->dropmedia('mobile');
                    $base64String = $request->avatar ?? '';
                    $ldp->storeAvatarBase64($base64String,'mobile');
                }else{
                    $ldp->content_desktop = $ldpTemp->content_desktop;
                    $ldp->dropmedia('desktop');
                    $base64String = $request->avatar ?? '';
                    $ldp->storeAvatarBase64($base64String,'desktop');
                }
        }
        $ldp->save();
        $url = Link::where('belong_id','=',$ldp->id)->first();
        if(!empty($request->utm_id)){
            $url->updateConversionCode($request->utm_id);
        }
        return $this->sendResponse(['ldp' => $ldp, 'short' => $url], 'update successfully');

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
        return redirect(route('landingpage.report'));
    }

    public function report(){
        $ldp = LandingPage::with('link')->wherePrefix('landingpage')->where('created_by','=', Auth::user()->id)->orderBy('id','DESC')->paginate(config('pagination.pagination.per_page'));
        return view('web.landingpage.report',['landingpages' => $ldp]);
    }

    public function recycle(){

        $ldp = LandingPage::where('created_by','=', Auth::user()->id)->orderBy('id','DESC')->onlyTrashed()->paginate(config('pagination.pagination.per_page'));
        return view('web.landingpage.recycle',['landingpages' => $ldp]);

    }
    public function publish($short){

        $link = Link::whereShort($short)->first();
        $ldp = $link->belong()->first();
        $agent = new Agent();
        if(!empty($ldp)){
            if($agent->isDesktop() && !empty($ldp->content_desktop)){
                return view('builder.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content_desktop,true),'publish'=>true]);
            }
            return view('builder.preview',['landingpage'=> $ldp, 'content'=>json_decode($ldp->content,true),'publish'=>true]);
        }
        return view('builder.preview');
    }
    public function widgetLinks()
    {
        $query  = Product::root()->wherePrefix('dropship')->inventory();
        $list   = $query->paginate();

        return view(
            'web.landing.widget.links',
            compact(
                'query',
                'list',
            )
        );
    }

}
