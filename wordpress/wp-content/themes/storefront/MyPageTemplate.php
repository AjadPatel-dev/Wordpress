
 <?php 
/* 
Template Name: demo page
 */
get_header();?>

<?php the_content( 'Read more ...' ); ?>

<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
  <input type="reset">
</form>
<?php 


get_footer(); 
 ?>
 
 
 
 
 