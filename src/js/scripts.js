$(document).ready(function(){

  // login and sign up form animation
  $("#loginBtn").click(function(){
    $("#loginContainer").show();
    $("#signUpContainer").hide();
    return false;
  });

  $("#signUpBtn").click(function(){
    $("#signUpContainer").show();
    $("#loginContainer").hide();
    return false;
  });

  $("#loginForm input, #signUpForm input").focus(function(){

    var $this = $(this);

    $this.parent().find("label").animate({
      top: -14,
      left: 0
    }, 300);

    $this.parent().find("span").css({
      transform: "scaleX(1)",
      background: "#3498db"
    });

  });

  $("#loginForm input, #signUpForm input").blur(function(){

    var $this = $(this);

    if ($this.val() == "") {
      $this.parent().find("label").animate({
        top: "50%",
        left: 14
      }, 300);
    }

    $this.parent().find("span").css({
      transform: "scaleX(0)"
    });

  });



  // login and sign up form ajax calls
  $(".ajaxForm").submit(function(){

    var $this = $(this),
        url = $this.attr("action"),
        method = $this.attr("method"),
        data = $this.serialize();

    $.ajax({
      url: url,
      method: method,
      data: data,
      dataType: "json",
      beforeSend: function() {
        // preloader
        console.log("Loading...");
      },
      success: function(res) {
        $.each(res, function(i, error) {

          var field = $this.find("input[name="+ i +"]");

          if (error != null) {
            field.addClass("error");
            field.removeClass("success");
          } else {
            field.addClass("success");
            field.removeClass("error");
          }

        });
      }
    });

    return false;
  });
})
