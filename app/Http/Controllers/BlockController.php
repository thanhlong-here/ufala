<?php

namespace App\Http\Controllers;

use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Classes\Search;

class BlockController extends Controller
{

  function before(Request $request)
  {
    $this->data = $request->input();

    $this->validator  =  Validator::make($this->data, [
      'title'  => 'required|string',
    ]);
  }
  function after(Request $request, Block $block)
  {
    if ($request->hasFile('avatar')) {
      $block->storeAvatar($request->avatar);
    }
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($prefix = null)
  {
    $search = (new search("block_$prefix"))->get();
    //$prefix = request('prefix', null);
    $query = Block::whereBelongType(null);
    if($prefix){
      $query->where('prefix', 'like', "$prefix%");
    }
    else{
      $query->whereNull('prefix');
    }
    $query->search($search);
    $query->orderByDesc('priority')->orderByDesc('created_at');
    return view('admin.block.index', compact('query', 'prefix'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.block.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->before($request);
    if ($this->validator->fails()) {
      return redirect()->back()
        ->withErrors($this->validator)
        ->withInput();
    }
    
    $block = Block::create($this->data);
    $this->after($request, $block);

    return redirect()->back()->with('toastr', [
      'status' => 'success', 'message' => 'Record created!'
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Block  $block
   * @return \Illuminate\Http\Response
   */
  public function show(Block $block)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Block  $block
   * @return \Illuminate\Http\Response
   */
  public function edit(Block $block)
  {
    return view('admin.block.edit', compact('block'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Block  $block
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Block $block)
  {
    $this->before($request);
    if ($this->validator->fails()) {
      return redirect()->back()
        ->withErrors($this->validator)
        ->withInput();
    }

    $block->update($this->data);
    $this->after($request, $block);

    return redirect()->back()->with('toastr', [
      'status' => 'success', 'message' => 'Record updated!'
    ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Block  $block
   * @return \Illuminate\Http\Response
   */
  public function destroy(Block $block)
  {
    $block->delete();
    return redirect()->back()->with('toastr', [
      'status' => 'success', 'message' => 'Record deleted!'
    ]);
  }
}
