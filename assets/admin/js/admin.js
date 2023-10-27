function showpass($nameid){
  var x = document.getElementById($nameid);
  
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
  }
  }
  $('.profile-show').hide();
  $('.out').click(function(){
   $('.profile-show').toggle();
  });

 // change password confirm 
 $('#Confirm').on('keyup', function () {
    if ($('#newpass').val() == $('#Confirm').val()) {
      $('#message').html('New Password Matching').css('color', 'green');
    } else 
      $('#message').html('New Password Not Matching').css('color', 'red');
  });
  
//   $("#eventbanner").change(function(event) {
//   var x = URL.createObjectURL(event.target.files[0]);
//   $("#imgPreview").attr("src",x);
//   });  





      
   


 
  

  

  