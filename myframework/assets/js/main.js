$(function () {
  $('[data-toggle="popover"]').popover();
});

function AjaxSubmit(e){
  //e.preventDefault();

  console.log("Got Here");
  var passwordF = $("#inputPasswordAjax").val();
  var emailF = $("#inputEmailAjax").val();

  $.ajax({
    method: "POST",
    url: "/login/recieve",
    data: {type: "ajax", email: emailF, password: passwordF},
    success: function(data){
      if(data == "good"){
        window.document.location.href="/login?msg=Login Success";
      } else {
        window.document.location.href="/login?msg=Login Failed";
      }
    }
  });
}
