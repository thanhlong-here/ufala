$.element = {
    ui: function (data) {
        out = '<div class="element place-' + data.type + '" ';
        $.each(data, function (key, val) {
            out += ' data-' + key;
            out += '="' + val + '" ';
        });
        out += '><div class="display hw-100"></div><div class="edit"></div></div>';
        return out;
    },
    place: function (obj) {
        type = $(obj).data('type');
        if (type == 'image') {
            return $.place_image.init(obj);
        }
        if (type == 'content') {
            return $.place_content.init(obj);
        }
    }
}
$.builder = {

    init: function (obj) {
        this.obj = $(obj);
        this.wp  = this.obj.find(".wp");
        this.tool = this.obj.find(".tool-bar");
        this.materials = this.obj.find(".material");
        this.materials.click(function (event) {
            event.preventDefault();
            data = $(this).data();
            $.builder.add(data);
        });
        this.toolbar();
        this.resize();
        this.render();
    },
 
    resize: function () {
        this.wp.find(".screen").height($(window).height());
    },
    render: function () {
        this.elements = this.wp.find(".element");
        this.elements.each(function (index) {
            $(this).attr('data-id', index);
            $.element.place(this);
        });

        this.elements.draggable();
        this.elements.resizable();
       

    },
    toolbar: function () {
        $.place_image.toolbar(this.tool);
        $.place_content.toolbar(this.tool);

        trash   = this.tool.find('.trash');
    
        trash.click(function () {
           if(selected) {
                $.builder.remove(selected.id);
           }
        })
    },
    selected: function (obj) {
        this.tool.find('.place-tool').children().hide();
        this.wp.children().removeClass("selected");

        selected = {
            id : $(obj).data('id'),
            type : $(obj).data('type')
        };
        this.tool.find('.control .id').text("#"+selected.id);
        $('#bar-' + selected.type).show();
        $(obj).addClass("selected");
    },
  
    add: function (data) {
        this.wp.append($.element.ui(data));
        this.render();
    },
    remove: function (id) {
        this.elements.each(function(){
            if(id== $(this).data('id')){
                this.remove();
            }
        });
        selected = null;
        this.render();
    }


}

$.builder.init("#builder");
