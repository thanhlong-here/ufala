function oTop(obj) {
    href = $(obj).attr('href');
    offset = $(href).offset();
    return offset.top;
}

function addRemove() {
    $('.up .item .remove').click(function () {
        item = $(this).parent();
        data = new FormData();
        data.append("_token", _token);
        $.ajax({
            data: data,
            type: "POST",
            url: _remove + $(this).data('id'),
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                item.remove();
            },
            error: function (xhr, status, error) {
                console.log(status + ': ' + error);
            }
        });
    });

}

function jump() {
    $('.jump').click(function (e) {
        e.preventDefault();
        move = oTop(this) - 100;
        $([document.documentElement, document.body]).animate({
            scrollTop: move
        }, 300);
    })
}

function scroll() {
    tabs = $('.tabs .jump');
    last = tabs.length - 1;
    $(window).scroll(function () {
        scrollTop = $(this).scrollTop() + 200;
        tabs.removeClass('to');
        tabs.each(function (i, obj) {
            min = oTop(obj);
            if (min < scrollTop) {
                if (i < last) {
                    max = oTop(tabs[i + 1]);
                    if (scrollTop < max) {

                        $(obj).addClass('to');
                    }
                } else {
                    $(obj).addClass('to');
                }
            }
        });
    });
}

function upload() {

    thumb = $('.up .thumb');
    $('.up .action input[type=file]').change(function () {
        data = new FormData();
        $.each($(this).prop('files'), function (i, file) {
            data.append("media[]", file);
        });
        data.append("_token", _token);
        $.ajax({
            data: data,
            type: "POST",
            url: _upload,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                $.each(res, function (i, media) {
                    thumb.append(
                        `<div class='item'>
              <img class="img-thumb" src="` + media.path + `" />
              <button type="button" data-id="` + media.id + `" class="remove btn-sm round"> <i class='ft-x'> </i> </button>
            </div>`
                    );
                });
                addRemove();
            },
            error: function (xhr, status, error) {
                console.log(status + ': ' + error);
            }
        });
    });
}
