$(document).ready(function(){
    $('#toggle').click(function(){
        $('nav').slideToggle();
    });
})

$(document).ready(function(){
    $("#arlert").hide();
    setTimeout(function(){
      $("#myModal").modal('show');
    }, 800);
  });