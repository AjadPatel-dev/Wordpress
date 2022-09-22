<?php 
  /* Template Name: My_Template */ 
  get_header(); 
?>
<html>
  <head>

  </head>
  <body>
  <p id="success_message" ></p>
    <form id="simpleform" enctype="multipart/form-data" method="post">
      <fieldset style="width: 50%;"><legend>Please Fill Your Form</legend>
      <label>First Name :</label>
      <input type="text" id="fname" name="fname" required="">
      <span class="error_form" id="fname_error"></span><br><br>

      <label>Last Name : </label>
      <input type="text" id="lname" name="lname" required="" >
      <span class="error_form" id="lname_error"></span><br><br>

      <label>Email :</label>
      <input type="email" id="email" name="email" autocomplete="off" required="">
      <span class="error_form" id="email_error"></span><br><br>

      <label>Age </label>
      <input type="number" id="age" max="55" min="18" name="age" required=""><br><br>
      <!-- <span class="error_form" id="age_error"></span><br><br> -->

      <label>Course </label>
      <select id="cource" name="cource" required="">
        <option value="Course">Course</option>
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="B.Tech">B.Tech</option>
        <option value="MBA">MBA</option>
        <option value="MCA">MCA</option>
        <option value="M.Tech">M.Tech</option>
      </select><br><br>

      <label>Profile Picture : </label>
      <input type="file" id="pic" name="pic" >
      <span class="error_form" id="pic_error"></span><br><br>

      <label>Address  </label>
      <textarea id="address" name="address" rows="1"></textarea>
      <span class="error_form" id="address_error"></span><br><br>

      <label>Password  </label>
      <input type="password" id="pass" name="pass" autocomplete="off" required="" >
      <span class="error_form" id="password_error"></span><br><br>

      <input type="submit" name="submit" value="submit" ></fieldset>
    </form>
    <script>
    $(document).ready(function(){

      $("#fname_error").hide();
      $("#lname_error").hide();
      $("#email_error").hide();
      // $("#age_error").hide();
      // $("#pic_error").hide();
      $("#address_error").hide();
      $("#password_error").hide();

        var error_fname = false;
        var error_lname = false;
        var error_email = false;
       // var error_age = false;
        var error_pic = false;
        var error_address = false;
        var error_password = false;

        $("#fname").keyup(function(){
          check_fname();
        });

        $("#lname").keyup(function(){
          check_lname();
        });

        $("#email").keyup(function(){
          check_email();
        });

        // $("#age").keyup(function(){
        //   check_age();
        // });

        $("#pic").keyup(function(){
          check_pic();
        });

        $("#address").keyup(function(){
          check_address();
        });

        $("#pass").keyup(function(){
          check_pass();
        });


        //Fname validation
          function check_fname() {
            var fname_pattern = /^[a-zA-Z ]*$/;
            var firstname = $("#fname").val();
            if (fname_pattern.test(firstname) && firstname != '') {
              $("#fname_error").hide();
              $("#fname").css("border","2px solid gray");
            } else {
              $("#fname_error").html("Enter your valid first name");
              $("#fname_error").show();
              $("#fname").css("border","2px solid gray");
              error_fname = true;
              return false;
            }
          }

          //Last name validation
          function check_lname() {
            var lname_pattern = /^[a-zA-Z ]*$/;
            var lastname = $("#lname").val();
            if (lname_pattern.test(lastname) && lastname != '') {
              $("#lname_error").hide();
              $("#fname").css("border","2px solid gray");
            } else {
              $("#lname_error").html("Enter your valid last name");
              $("#lname_error").show();
              $("#lname").css("border","2px solid gray");
              error_lname = true;
              return false;
            }
          }
          // email validation
          function check_email() {
            var email_pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var emailid = $("#email").val();
            if (email_pattern.test(emailid) && emailid != '') {
              $("#email_error").hide();
              $("#email").css("border","2px solid gray");
            } else {
              $("#email_error").html("please enter valid  Email");
              $("#email_error").show();
              $("#email").css("border","2px solid gray");
              error_email = true;
              return false;
            }
          }

          // email validation
          /*
          function check_age() {
            var age_pattern = /^\S[0-9]{0,3}$/;
            var user_age = $("#age").val();
            if (age_pattern.test(user_age) && user_age != '') {
              $("#age_error").hide();
              $("#age").css("border","2px solid gray");
            } else {
              $("#age_error").html("please enter your age");
              $("#age_error").show();
              $("#age").css("border","2px solid gray");
              error_age = true;
              return false;
            }
          }
          */

          // address validation
          function check_address() {
            var add_pattern = /^[a-zA-Z ]*$/;
            var u_address = $("#address").val();
            if (add_pattern.test(u_address) && u_address != '') {
              $("#address_error").hide();
              $("#address").css("border","2px solid gray");
            } else {
              $("#address_error").html("please enter your address");
              $("#address_error").show();
              $("#address").css("border","2px solid gray");
              error_address = true;
              return false;
            }
          }

          //Password validation
          function check_pass(){
            var password_pattern =  /^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
            var password = $("#pass").val();
            if(password_pattern.test(password) && password != ''){
                $("#password_error").hide();
                $("#pass").css("border","2px solid gray");
            } else {
                $("#password_error").html("Password should contain atleast one number and one special character");
                $("#password_error").show();
                $("#pass").css("border","2px solid gray");
                error_password = true;
                return false;
            }
        }

        $("#simpleform").submit(function(e) {
            e.preventDefault();
            error_fname = false;
            error_lname = false;
            error_email = false;
            error_pic = false;
            error_address = false;
            error_password = false;

            check_fname();
            check_lname();
            check_email();
            check_address();
            check_pass();

                    if (error_fname === false && error_lname === false && error_email === false && error_pic === false && error_address === false && error_password === false) {
                        var u_firstname= $("#fname").val();
                        // alert(u_firstname);
                        var u_lastname= $("#lname").val();
                        // alert(u_lastname);
                        var u_email= $("#email").val();
                        // alert(u_email);
                        var u_age= $("#age").val();
                        // alert(u_age);
                        var u_cource= $("#cource").val();
                        // alert(u_cource);
                        var image= $("#pic").val();
                        // alert(image);

                        var u_address= $("#address").val();
                        // alert(u_address);
                        var u_password= $("#pass").val();
                        // alert(u_password);

                        var formData = new FormData();
                        formData.append('u_firstname',u_firstname);
                        formData.append('u_lastname',u_lastname);
                        formData.append('u_email', u_email);
                        formData.append('u_age', u_age);
                        formData.append('u_cource', u_cource);
                        formData.append('u_address', u_address);
                        formData.append('u_password', u_password);
                        formData.append('file', $('#pic')[0].files[0]);
                        // formData.append('file', $('#pic')[0].files[0]);
                        formData.append('image',image);
                        formData.append('action', 'insert_data');
                        $.ajax({
                          type: "POST",
                          url : "<?php echo admin_url('admin-ajax.php'); ?>",
                          dataType: 'json',
                          data:formData,
                          cache:false,
                          contentType: false,
                          processData: false,
                          success: function(data){
                        
                            // setTimeout(function(){
                            //   window.location.href="show-product.php";
                            // },1000);
                          }
                      });
                        

                    } else{
                            alert("Please Currect fill the form");
                            return false;
                        }
                    return false;
            
           
     
          });



    });
    </script>
  </body>
</html>

<?php 
get_footer(); 
?>