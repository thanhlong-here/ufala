$.place_content ={   
    init : function(obj){
        this.obj = $(obj);
        this.content = $(obj).data('content');
        this.id      = $(obj).data('id');
        this.render();
        this.obj.click(function(){
            $.builder.selected(obj);
        });
       
    },
    render : function(){
        this.obj.find(".display").html(this.content);
    },
   
    toolbar : function(bar){
        bar.find('.place-tool').append( '<div id="bar-content" class="edit"> Content </div>' );
    }
}