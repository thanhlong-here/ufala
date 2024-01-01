<?php

namespace App\Http\Controllers\Auth;

use App\Classes\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Link;
use App\Models\Order;
use App\Models\Transaction;

class DropshipController extends Controller
{
    function publish(Product $dropship)
    {
        $ref    = Auth::id();
        return Link::ManyOf($dropship)->whereAuthId($ref)
            ->firstOr(
                function () use ($dropship, $ref) {
                    return $dropship->pushlish(uniqid(), 'dropship', $ref);
                }
            );
    }

    public function dashboard()
    {
        $query  = Link::has('belong')->wherePrefix('dropship')->whereAuthId(Auth::id());
        $list   = $query->paginate();

        $collect =  $list->getCollection()->transform(function ($item) {
            $item->productName = $item->belong->name;

            $item->totalClick  = $item->points->where('status', 'open')->count();
            
            $item->totalOrder  = $item->orders->count();
            $item->percent     = $item->totalOrder ? $item->totalOrder / $item->totalClick * 100 : 0;
            $item->totalOrderFinish  = $item->orders->where('status', 'finished')->count();
            $item->revenuePending = $item->orders->where('status', '<>', 'finished')->sum('ref_commission');
            $item->revenue        = $item->orders->where('status', 'finished')->sum('ref_commission');
            return $item;
        });
        session()->flash('menu-active','#menu-dashboard');
        return view(
            'auth.dropship.dashboard',
            compact(
                'query',
                'list',
                'collect',
            )
        );
    }

    public function index()
    {
        $query  =  Product::root()->wherePrefix('dropship')->inventory();
        $list   = $query->paginate();
        session()->flash('menu-active','#menu-dropship');
        return view(
            'auth.dropship.index',
            compact(
                'query',
                'list',
            )
        );
    }

    public function order()
    {
        $search = (new Search("dropship_order"))->get();
        $query  =  Order::has('item')->whereRefId(Auth::id())->wherePrefix('dropship')->search($search);
        $list = $query->paginate();
        session()->flash('menu-active','#menu-order');
        return view(
            'auth.dropship.order',
            compact(
                'query',
                'list',
            )
        );
    }

    public function camp()
    {
        $query  = Link::has('belong')->wherePrefix('dropship')->whereAuthId(Auth::id());
        $list   = $query->paginate();

        $collect =  $list->getCollection()->transform(function ($item) {
            $item->productName = $item->belong->name;

            $item->totalClick  = $item->points->where('status', 'open')->count();
            
            $item->totalOrder  = $item->orders->count();
            $item->percent     = $item->totalOrder ? $item->totalOrder / $item->totalClick * 100 : 0;
            $item->totalOrderFinish  = $item->orders->where('status', 'finished')->count();
            $item->revenuePending = $item->orders->where('status', '<>', 'finished')->sum('ref_commission');
            $item->revenue        = $item->orders->where('status', 'finished')->sum('ref_commission');
            return $item;
        });
        session()->flash('menu-active','#menu-camp');
        return view(
            'auth.dropship.camp',
            compact(
                'query',
                'list',
                'collect',
            )
        );
    }

    public function withdraw(Request $request)
    {
        $data   =   $request->input();
        $user   =   Auth::user();
        $total  =   $user->wallet();
        $contact = $user->contact;
        if ($contact) {
            $contact->update($data);
        } else {
            $contact = Contact::create(array_merge($data, ['account_id' =>  $user->id]));
        }
        if ($request->total > $total) {
            return redirect()->back()->with([
                'status' => 'failed', 
                'message' => __('Số tiền rút vượt quá số dư trong tài khoản!')
            ]);
        }
        $user->withdraw($request->total,'Rút tiền về tài khoản cá nhân' ,'dropship');
        return redirect()->back()->with([
            'status' => 'success', 
            'message' => __('Hệ thống đã nhận được yêu cầu!')
        ]);
    }


    public function transaction()
    {
        $user   = Auth::user();
        $total  = $user->wallet();
        $query  = Transaction::wherePrefix('dropship');
        $list   = $query->paginate();

        session()->flash('menu-active','#menu-transaction');
        return view(
            'auth.dropship.transaction',
            compact(
                'query',
                'list',
                'total'
            )
        );
    }

    public function share(Product $dropship)
    {
        $link =  $this->getLink($dropship);
        return view(
            'auth.dropship.share',
            compact(
                'link',
            )
        );
    }

    public function getLink(Product $dropship)
    {
        $ref    = Auth::id();
        return Link::ManyOf($dropship)->whereAuthId($ref)
            ->firstOr(
                function () use ($dropship, $ref) {
                    return $dropship->pushlish(uniqid(), 'dropship', $ref);
                }
            );
    }
}
