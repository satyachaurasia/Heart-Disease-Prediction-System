function validationContact() {

    if(document.getElementById("txtContactname").value == "" &&  document.getElementById("txtContactemail").value == "" &&  document.getElementById("txtContactcomments").value == "")
        {
          document.getElementById('contactNameerror').innerHTML = "Please enter your Name";
          document.getElementById("txtContactname").style.borderColor = "#dd4b39";
          document.getElementById('contactCommenterror').innerHTML = "Please enter your comment";
          document.getElementById("txtContactcomments").style.borderColor = "#dd4b39";
          document.getElementById('contactEmailerror').innerHTML = "Please enter your email address";
          document.getElementById("txtContactemail").style.borderColor = "#dd4b39";
          return false;
        }
     
      var email = document.getElementById('txtContactemail'); 
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;       

      if(document.getElementById("txtContactname").value == "" ){
     document.getElementById('contactNameerror').innerHTML = "Please enter your Name";
     document.getElementById("txtContactname").style.borderColor = "#dd4b39";

      return false;
     }
     if(!filter.test(email.value.trim()))
          {
          document.getElementById('contactEmailerror').innerHTML = "Please enter valid email address";
          document.getElementById("txtContactemail").style.borderColor = "#dd4b39";
            return false;
        }


     if(document.getElementById("txtContactcomments").value == "")
     {
      document.getElementById('contactCommenterror').innerHTML = "Please enter your comment.";
     document.getElementById("txtContactcomments").style.borderColor = "#dd4b39";
      return false;
  }
  //===========================================================
  var name = document.getElementById("txtContactname").value;
  var email = document.getElementById("txtContactemail").value;
  var msg = document.getElementById("txtContactcomments").value;

  if (document.getElementById("txtContactname").value != "" && document.getElementById("txtContactemail").value != "" && document.getElementById("txtContactcomments").value != "") {

      $.ajax({
          type: "POST",
          url: "ContactUs.aspx/SendMail",
          data: '{name: "' + name + '",email:"' + email + '",msg:"' + msg + '"}',
          contentType: "application/json; charset=utf-8",
          async: false,
          dataType: "json",
          success: OnSuccess,
          failure: function (response) {
          }
      });

      function OnSuccess(response) {
          document.getElementById("submitthanks").innerHTML = "Email Sent successfully.";       
      }
  }
   document.getElementById("txtContactname").value="";
  document.getElementById("txtContactemail").value="";
  document.getElementById("txtContactcomments").value="";
        return( false );
  }


function contactName() {
    document.getElementById('contactNameerror').innerHTML = "";
     document.getElementById("txtContactname").style.borderColor = "";
}

function contactEmail() {
    document.getElementById('contactEmailerror').innerHTML = "";
     document.getElementById("txtContactemail").style.borderColor = "";
}

function contactComments() {
    document.getElementById('contactCommenterror').innerHTML = "";
    document.getElementById("txtContactcomments").style.borderColor = "";
}


function SendContactMail() {

    var name = document.getElementById("txtContactname").value;
    var email = document.getElementById("txtContactemail").value;
    var msg = document.getElementById("txtContactcomments").value;

    if (document.getElementById("txtContactname").value != "" && document.getElementById("txtContactemail").value != "" && document.getElementById("txtContactcomments").value != "") 
    {

        $.ajax({
            type: "POST",
            url: "ContactUs.aspx/SendMail",
            data: '{name: "' + name + '",email:"' + email + '",msg:"' + msg + '"}',
            contentType: "application/json; charset=utf-8",
            async: false,
            dataType: "json",
            success: OnSuccess,
            failure: function (response) {
                alert(response.d);
            }
        });

        function OnSuccess(response) {
            
        }
    }
}