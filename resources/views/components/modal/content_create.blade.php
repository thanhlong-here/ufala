
<x-modal id="modal-content-create" class=" bg-white">
  <x-form action="{{route('content.store')}}">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group">
          <textarea name="content" rows="5" class="form-control"></textarea>
        </div>
        <div id="content-title" class="form-group pb-1 line-b none">
          <div class="row ">
            <fieldset class="col-xs-11 position-relative has-icon-left">
              <input type="text" name="title" class="form-control" placeholder="{{__('Enter title')}}">
              <div class="form-control-position">
                <i class=" icon-pencil"></i>
              </div>
            </fieldset>
            <div class="col-xs-1"><button class="btn pull-right close" type="button"><i class="ft ft-x"></i></button></div>
            
          </div>
        </div>
        <div id="content-url" class="form-group pb-1 line-b none">
          
          <div class="row ">
            <fieldset class="col-xs-11 position-relative has-icon-left">
              <input type="text" name="title" class="form-control" placeholder="{{__('Enter url')}}">
              <div class="form-control-position">
                <i class=" icon-link"></i>
              </div>
            </fieldset>
            <div class="col-xs-1"><button class="btn pull-right close" type="button"><i class="ft ft-x"></i></button></div>
            
          </div>
        </div>
        <div id="content-gallery" class="form-group none">

        </div>
        <div id="content-tags" class="form-group pb-1 line-b none">
          
          <div class="row ">
            <fieldset class="col-xs-11 position-relative has-icon-left">
              <input type="text" name="tags" class="form-control" placeholder="{{__('Enter tags')}}">
              <div class="form-control-position">
                <i class=" icon-tag"></i>
              </div>
            </fieldset>
            <div class="col-xs-1"><button class="btn pull-right close" type="button"><i class="ft ft-x"></i></button></div>
            
          </div>
        </div>
        <div class="form-group">
          <div class="flex">
            <button id="btn_add_title" type="button" class="flex-1 mr-1 btn  round">

              <i class=" icon-pencil"></i>
              {{__('Title')}}
            </button>
            <button id="btn_add_link" type="button" class="flex-1 mr-1 btn round">
              <i class="icon-link"></i>
              {{__('Link')}}
            </button>
            <button id="btn_add_image" type="button" class="flex-1 mr-1 btn round">
              <i class="icon-picture"></i>
              {{__('Image')}}
            </button>

            <button id="btn_add_tag" type="button" class="flex-1 mr-1 btn round">
              <i class="icon-tag"></i>
              {{__('Tags')}}
            </button>
            

          </div>

        </div>
      </div>
      <div class="modal-footer">

        <div class="flex">
          <button id="btn_layout" name="action" type="submit" value="landing" class="flex-1 btn round mr-1">
            <i class="ft ft-layout"></i>
            {{__('Landing')}}</button>

          <button id="btn_question" name="action" type="submit" value="question" class="flex-1 btn  round mr-1">
            <i class="icon-question"></i> {{__('Question')}}
          </button>

          <button id="btn_product" name="action" type="submit" value="product" class="flex-1 btn  round mr-1">
            <i class="icon-social-dropbox"></i> {{__('Product')}}</button>
          <button id="btn_gig" name="action" type="submit" value="gig" class="flex-1 btn  round mr-1">
            <i class="icon-briefcase"></i> {{__('Gig')}}
          </button>
          <button type="submit" name="action" value="post" class="btn btn-primary ml-1"> <i class="icon-paper-plane"></i> {{__('Post')}} </button>
        </div>

      </div>
  </x-form>
  </div>

</x-modal>