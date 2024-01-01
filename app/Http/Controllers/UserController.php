<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $reg  = [
          'name' => ['required', 'string', 'max:191'],
          'email' => ['required', 'string', 'email', 'max:191'],
      ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

      switch (request('is')) {
        case 'admin':
              $list = User::Where('is_admin',true)->paginate();
          break;
        default:
            $list = User::paginate();
          break;
      }

      return view('admin.user.index',[
          'list'  => $list,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.user.create');
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
        
        $data['password'] = Hash::make($request->password);
        $user  =  User::create($data);
        return redirect()->back()->with('toastr',[
          'status'=>'success','message'=>'Account created!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        return view('admin.user.create',compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        $data = $request->input();
       
        $User->update($data);
        return redirect()->back()->with('toastr',[
          'status'=>'success','message'=>'Record updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        $User->delete();
        return redirect()->back()->with('toastr',[
          'status'=>'success','message'=>'Record deleted!'
        ]);
    }

}
