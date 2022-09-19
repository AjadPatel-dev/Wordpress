<?php 
/* Template Name: Login and register  */
get_header(); 
?>
 <html>
  <head>
    <style>
      p {
        font-size: 30px;
        text-align:center;
        /* color: red; */

        display: none;
      }
      #email_error {
        top: 12px;
        color: rgb(216, 15, 15);
        font-size: 15px;
        display: none;
      }
      #password_error{
        top: 12px;
        color: rgb(216, 15, 15);
        font-size: 15px;
        display:none;
      }

    </style>
  </head>
    <body>
      <h2>Login Form</h2><br></br>
      <p id="message" >Please enter the email and password</p>
      <form id="validation" method="post">
        <div class="form-group">
          <label>User Email</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="Please enter your Register email">
          <span id="email_error"> Please enter your email</span>
        </div>

        <div class="form-group">
          <label>Password</label>
         <input type="password" name="password" id="password" class="form-control" placeholder="Please enter your password">
         <span id="password_error"> Please enter your Password</span>
        </div>

        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label><br><br>

        <input type="submit" name="submit" value="submit" >
        <button type="button" class="cancelbtn">Cancel</button>
        <span><a href="#">Forgot your password?</a></span>
      </form>
      <script>
        $(document).ready(function(){
          $("#validation").submit(function(event) {
            
            event.preventDefault();
            var u_email = $("#email").val();
            var u_password = $("#password").val();
            
            if(u_email == '' && u_password == ''){
              $("#message").css({'display':'block'});
              $('#password_error').css({'display':'none'});
              $("#email_error").css({'display':'none'});
            } 
            else if(u_email != '' && u_password == '' ){
              $("#email_error").css({'display':'none'});
              $('#password_error').css({'display':'block'});
            } 
            else if(u_email == '' && u_password != '' ){
              $("#email_error").css({'display':'block'});
              $('#password_error').css({'display':'none'});
            }
            $.ajax({
              type: "POST",
              url : "<?php echo admin_url('admin-ajax.php'); ?>",
              data :{
                u_email:u_email,
                u_password:u_password,
                action: "login_user"
              },
              success: function(response){  
           
                  
              }
          });
     
          });
        });
     </script>
    </body>
</html>
<?php
get_footer(); 
?>