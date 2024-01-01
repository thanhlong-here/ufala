<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Classes\Search;
use App\Models\LocationCity;
use Facade\FlareClient\Flare;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($prefix = null)
    {

        $search = (new search($prefix))->get();
        $query  =  Contact::wherePrefix($prefix)->search($search);
        $list = $query->paginate();

        $xlink = (object)[
            'create'      => $prefix ? route("contacts.prefix.create", $prefix) : route("contacts.create"),
            'categories'  => route("categories.prefix", $prefix),
        ];

        return view(
            'admin.contact.index',
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
    public function create($prefix = null)
    {

        if (session('status', null) == 'success') {
            echo "<script>parent.location.reload();</script>";
            exit;
        }

        $cities  = LocationCity::whereCountry('VN')->get();

        return view(
            'admin.contact.create',
            compact(
                'cities',
                'prefix',
            )
        );
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
        Contact::create($data);
        return redirect()->back()->with(['status' => 'success', 'message' => __('Thông tin liên hệ đã được tạo')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {


        if (session('status', null) == 'success') {
            echo "<script>parent.location.reload();</script>";
            exit;
        }

        $cities  = LocationCity::whereCountry('VN')->get();

        return view(
            'admin.contact.edit',
            compact(
                'cities',
                'contact',
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->input();
        $contact->update($data);
        return redirect()->back()->with(['status' => 'success', 'message' => __('Thông tin liên hệ đã cập nhật')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with(['status' => 'success', 'message' => __('Thông tin liên hệ đã xóa')]);
    }
}
