@section('content')
<form id="formEdit-{{$block->id}}"
  action="{{ route('block.update',$block) }}"
  enctype="multipart/form-data"
  method="post">

     <div class="form-body">
       <div class="col-md-8">
         <div class="card">
           <div class="card-header">
             <h4 class="card-title">Edit Block</h4>
           </div>

           <div class="card-block">
             <div class="form-group pb-2" style="height:150px">
             
               <x-temp src = "{{empty($block->avatar) ? null :$block->avatar->src}}" />
             </div>
             <div class="form-group">
               <div class="input-group ">
                 <span class="input-group-addon" >Link</span>
                 <input type="text"
                 name="link" placeholder="link" class="form-control" value="{{ $block->link }}" aria-describedby="basic-addon1">
               </div>
             </div>

             <div class="form-group">
               <input type="text" value="{{ $block->title }}"
               class="form-control" placeholder="title"  name="title" />
             </div>

             <div class="form-group pt-1">
               @include('com.summernote',['value'=>$block->content ])
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-4 sticky-header">
           <div class="card">
               <div class="card-block">

                 <div class="form-group">
                   <input type="text" value="{{ $block->type }}"
                   class="form-control"  placeholder="type"  name="type" />
                 </div>
                 
                 <div class="form-group">
                   <input type="text" value="{{ $block->code }}"
                   class="form-control"  placeholder="type"  name="type" />
                 </div>

                 <div class="form-group">
                   <div class="input-group ">
                     <span class="input-group-addon" >Priority</span>
                     <input type="number"
                     name="priority" class="form-control" value="{{ $block->priority }}" aria-describedby="basic-addon1">
                   </div>
                 </div>



               </div>
               <div class="card-footer">
                 <button type="submit" class="btn btn-outline-primary">Save</button>
                </div>
           </div>

       </div>
     </div>
     @method('PUT')
     @csrf
 </form>
@endsection
<x-layout.wiget id="modal_src" />