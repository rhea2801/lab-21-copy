$(document).ready(function(){

     $('#uname').focusin(function(){
        $('#uname').attr('placeholder',"");
        $('#uname').removeClass('error');
     })
    $('#uname').focusout(function(){
      var user = $('#uname').val();
      if(user=="")
        {
            $('#uname').attr('placeholder',"Please enter your username");
            $('#uname').addClass('error');
        }
        else{
          $.ajax({
                    type: "POST",
                    url: "controller/controller.php",
                    data: {
                        "functionname":'checkuser',
                        "user":user

                    },
                    success: function (data) {
                        if(data == true)
                        {
                          $('#uname').val('');
                          $('#uname').attr('placeholder',"Username already taken");
                            $('#uname').addClass('error');
                        }
                        else{
                          $('#uname').removeClass('error');
                        }
                    },
                    error:function(error){
                        console.log(error);
                    }
            });
        }
    })

    function isValidEmailAddress(emailAddress) {
      var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
      return pattern.test(emailAddress);
  };

    $('#email').focusin(function(){
        $('#email').attr('placeholder',"");
        $('#email').removeClass('error');
    })
    $('#email').focusout(function(){
      var email = $('#email').val();
      if(email=="")
        {
            $('#email').attr('placeholder',"Please enter your email");
            $('#email').addClass('error');
        }
        else{
          $.ajax({
                    type: "POST",
                    url: "controller/controller.php",
                    data: {
                        "functionname":'checkemail',
                        "email":email

                    },
                    success: function (data) {

                        if(data == true)
                        {
                          $('#email').val('');
                          $('#email').attr('placeholder',"Email-id already registered");
                            $('#email').addClass('error');
                        }
                        else if(isValidEmailAddress(email)==false){
                  $('#email').val('');
                      $('#email').attr('placeholder',"Please enter a valid email id");
                            $('#email').addClass('error');
                }
                else{
                    $('#email').removeClass('error');
                }
                    },
                    error:function(error){

                        console.log("error");
                    }
            });
        }

    })

     $('#phone').focusin(function(){
        $('#phone').attr('placeholder',"");
        $('#phone').removeClass('error');
    })
    $('#phone').focusout(function(){
      var phone = $('#phone').val();
      if(phone=="")
        {
            $('#phone').attr('placeholder',"Please enter your contact number");
            $('#phone').addClass('error');
        }
      $.ajax({
                type: "POST",
                url: "controller/controller.php",
                data: {
                    "functionname":'checkContact',
                    "phone":phone

                },
                success: function (data) {

                    if(data == true && phone.length==10)
                    {
                      $('#phone').val('');
                      $('#phone').attr('placeholder',"Contact number already registered");
                      $('#phone').addClass('error');
                    }
                    else if(phone=="")
                    {
                        $('#phone').attr('placeholder',"Please enter your contact number");
                    }
                    else if(phone.length!=10)
                    {
                      $('#phone').val('');
                      $('#phone').attr('placeholder',"Invalid contact number entered");
                      $('#phone').addClass('error');
                    }
                    else{
                        $('#phone').removeClass('error');
                    }
                },
                error:function(error){

                    console.log("error");
                }
        });


    })

     $('#pass1').focusin(function(){
        $('#pass1').attr('placeholder',"");
        $('#pass1').removeClass('error');
    })
    $('#pass1').focusout(function(){
      var password = $('#pass1').val();
      if(password.length<6){
      $('#pass1').val('');
          $('#pass1').attr('placeholder',"Password must be atleast 6 characters long");
            $('#pass1').addClass('error');
      }
      else{
          $('#pass1').removeClass('error');
      }
  })

    $('#pass2').focusin(function(){
        $('#pass2').attr('placeholder',"");
        $('#pass2').addClass('error');
    });

    $('#pass2,#pass2').keyup(function(){
        var pswd = $('#pass1').val();
        var cnfpswd = $('#pass2').val();
        if(pswd==cnfpswd && cnfpswd.length>5){
            $('#pass2').removeClass('error');
            $('#pass2').addClass('cnfpswd');
        }
        else if(pswd!=cnfpswd || cnfpswd.length<6)
        {
            $('#pass2').removeClass('cnfpswd');
            $('#pass2').addClass('error');
        }
    });

  $('#uname,#email,#phone,#pass1,#pass2').keyup(function(){
    var uname = $('#uname').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var pswd = $('#pass1').val();
    var cnfpswd = $('#pass2').val();

    if(uname!="" && email!="" && phone.length==10 && pswd.length>5 && pswd == cnfpswd){
      $('#signup').removeAttr('disabled');
    }
  })

  /*--------------------------------------------------sign-up validation end---------------------------------------------------------------------*/
/*--------------------------------------------------sign-in validation start-------------------------------------------------------------------*/

$('#username').focusin(function(){
    $('#username').attr('placeholder',"");
    $('#username').removeClass('error');
})
$('#username').focusout(function(){
    var user = $('#username').val();
    $.ajax({
            type: "POST",
            url: "controller/controller.php",
            data: {
                "functionname":'checkuser',
                "user":user
            },
            success: function (data) {
                if(data ==false)
                {
                    $('#username').val('');
                    $('#username').attr('placeholder',"Unregistered username entered");
                    $('#username').addClass('error');
                }
                else if(user=="")
                {
                    $('#username').attr('placeholder',"Please enter the username");
                    $('#username').addClass('error');
                }
                else{
                  $('#username').removeClass('error');
                }
            },
            error:function(error){
              
                console.log("error");
            }
    });
})

$('#username').focusin(function(){
    $('#username').attr('placeholder',"");
})
})