function btnclick(_url){
  $.ajax({
      url : _url,
      type : 'post',
      success: function(data) {
       $('#main').html(data);
      },
      error: function() {
       $('#main').text('An error occurred');
      }
  });
}