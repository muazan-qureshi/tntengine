<?php include('header.php');
$object->csup();
?>
<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_7.jpg');">
    <br>
    <br><br><br><br>
    <h1 style="font-weight: 600;" class="text-center text-white">
        Register Your Account
    </h1>
    <div class="col-md-6 pr-md-5 m-auto">
        <form action=""  id="c_signup_form">
            <div class="form-group py-2">
                <input type="text"  id="c_fname" class="form-control" placeholder="Full Name">
            </div>
            <div class="form-group py-2">
                <input type="text" id="c_uname" class="form-control" placeholder="Username">
            </div>
            <div class="form-group py-2">
                <input type="email"  id="c_email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group py-2">
                <input type="tel"  id="c_phone" class="form-control" placeholder="Enter Phone (e.g +92 300 123 4567)">
            </div>
            <div class="form-group py-2">
                <input type="password"  id="c_password" class="form-control" placeholder="Enter a strong Password (e.g 1234*Abc)">
            </div>
                            
            <div class="form-group">
                <input type="submit" value="Register" id="btn"  class="btn btn-primary py-3 px-5">
            </div>
            <p class="text-center text-white">
                Already have an Account <a href="login.php">Click Here to Login</a>
            </p>
        </form>
    </div>

</div>

<?php
include('footer.php');
?>

<script>    

  //    document.getElementById('btn').addEventListener('click',function(){
  // var fname = document.getElementById('c_fname').value;
  //   var uname = document.getElementById('c_uname').value;
  //     var email = document.getElementById('c_email').value;
  // var phone = document.getElementById('c_phone').value;
  // var password = document.getElementById('c_password').value;

    // var form = document.getElementById('c_signup_form');

    // $.ajax({
    //         type:'get',
    //         url:'main.php', 
    //         data:{btn:'true',fname:fname,uname:uname,email:email,phone:phone,password:password},
    //         success: function(response){
  //               alert(response);
  //          }
  //       });

  // });    

     document.getElementById('btn').addEventListener('click',function(){
    var name =  document.getElementById('c_fname').value;
    var uname =  document.getElementById('c_uname').value;
    var email =     document.getElementById('c_email').value;
    var phone =  document.getElementById('c_phone').value;
    var psw =  document.getElementById('c_password').value;
    var fo =document.getElementById('form');
    $.ajax({
        type:'get',
        url :'main.php',
        data:{btn:'true',fname:fname,uname:uname,email:email,phone:phone,password:psw},
        success: function(response){
            alert(response);
            }
        });
fo.reset();
    
    });




</script>>