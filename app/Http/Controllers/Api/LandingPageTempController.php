<?php

namespace App\Http\Controllers\Api;

use App\Models\LandingPagesTemp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Classes\Journey;
class LandingPageTempController extends BaseController
{
    protected $journey;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(Journey $journey)
    {
        $this->journey = $journey;
    }

    public function index()
    {

        return $this->sendResponse(LandingPagesTemp::paginate(10),'get list Landing page success');
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

            $ldp = LandingPagesTemp::create($ldp);

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
        $ldp = LandingPagesTemp::find($id);
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
        $ldp = LandingPagesTemp::find($id);
        if(empty($ldp)){
            return  $this->sendError('Landing page not found','Id not found',404);
        }
        $page =  $request->landingpage;
        $ldp->width = !empty($page['width'])  ? $page['width'] : 0;
        $ldp->height = !empty($page['height']) ? $page['height'] : 0;
        $ldp->content = json_encode($page);
        $ldp->save();
        return $this->sendResponse($ldp, 'update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LandingPagesTemp::where('id',$id)->delete();
        return $this->sendResponse('done', 'update successfully');
    }
}
