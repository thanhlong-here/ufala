function parentClose() {
  $('#widget', window.parent.document).fadeOut(250);
  $('body', window.parent.document).removeClass('modal-open');
  $('.modal-backdrop', window.parent.document).remove();
}

function widgetOpen(w){
  wid = $("#widget");
  widdoc = $('#widget iframe');
  widdoc.attr('src', $(w).data('src'));
  wid.modal('toggle');
  wid.fadeIn('slow');
}


function parentResize(h){
  $('#widget iframe', window.parent.document).height(h);
}