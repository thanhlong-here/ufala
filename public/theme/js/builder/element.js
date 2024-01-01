
$.element ={   
  
    init : function(obj){
        this.obj = $(obj);
        this.src = $(obj).data('src');
        this.id  = $(obj).data('id');
        this.render();

    },
    render : function(){
        this.obj.find(".display").attr(
            "style",
            "background-image:url("+this.src+");background-size: cover;background-repeat: no-repeat;");
    },
   
    toolbar : function(bar){
        bar.find('.place-tool').append( '<div id="bar-image" class="edit"> Image </div>' );
    },
    places:function(bar,wp){
        this.toolbar(bar);
        wp.find(".place-image").each(function () {
            $.place_image.init(this);   
        });
    }
  
}