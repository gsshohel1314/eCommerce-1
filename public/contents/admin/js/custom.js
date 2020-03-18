$(function(){
  $(document).on('click','.delete', function(){
    var url=$(this).data('url');
    $('#delete-form').attr('action',url);
  });
});
