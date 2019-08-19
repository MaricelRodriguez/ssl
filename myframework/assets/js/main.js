$(function () {
  $('[data-toggle="popover"]').popover();
});

function AjaxSubmit(e){
  //e.preventDefault();
  var url = "/login?";
  var err = false;

  var emailF = $("#inputEmailAjax").val();
  var passwordF = $("#inputPasswordAjax").val();

  var emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

  if(emailF.trim() == ''){
    let errEmail = "erremail=Email cannot be blank&";
    err = true;
    url = url + errEmail;
  } else if(!emailRegex.test(emailF)){
    let errEmail = "erremail=Invalid characters used&";
    err = true;
    url = url + errEmail;
  }

  if(passwordF.trim() == ''){
    let errPass = "errpass=Password cannot be blank&";
    err = true;
    url = url + errPass;
  }

  if(err){
    window.document.location.href=url;
  } else {
    $.ajax({
      method: "POST",
      url: "/login/recieve",
      data: {type: "ajax", email: emailF, password: passwordF},
      success: function(data){
        if(data == "success"){
          window.document.location.href="/login/loginSubmit?msg=Login successful";
        } else {
          window.document.location.href="/login/loginSubmit?msg=Login failed";
        }
      }
    });

  }
}
