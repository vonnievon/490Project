<? php
  include_once 'header.php';
?>

    <section class="signup-form">
      <div class="signup-form-form">
      <h2>Log In</h2>
      <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Sign Up</button>
      </form>
      </div>
    </section>


    <? php
      include_once 'footer.php';
    ?>
