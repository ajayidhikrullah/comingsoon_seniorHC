<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Senior Healthcare</title>
    
<style >
    html {
  background: url(//privilegg.com/img/privilegg-collage.jpg) no-repeat center;
  background-size: cover;
  width: 100%;
  height: 100%;
  font-family: 'Source Sans Pro', sans-serif;
}

.error{
  color: red;
}

.success{
  color: lime;
}

.container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  height: 100vh;
}

.card {
  display: block;
  position: relative;
  width: 480px;
  max-width: 90%;
  min-height: 12em;
  background: rgba(0,88,61,.96);
  color: #ffffff;
  padding: 1em 2em 2em;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.3);
  text-align: center;
}

.card h1 { font-family: 'Trocchi', serif; }

.card form {
  display: flex;
  flex-flow: column wrap;
  align-items: center;
}

.card form input {
  display: flex;
  width: 80%;
}

.card form input.email {
  border: 0px;
  margin-bottom: 1em;
  padding: .3em 1em;
  text-align: center;
  font-family: monospace;
  font-size: 24px;
  line-height: 30px;
  outline: none !important;
  border-radius: 5px;
}

.card form button {
  border: 0px transparent;
  padding: 1em 1.2em;
  border-radius: 5px;
  background-color: #00120B;
  color: #ffffff;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 18px;
  letter-spacing: 1px;
  font-weight: 400;
  transition: .4s all ease-in-out;
  cursor: pointer;
}

.card form button:hover { background-color: #012718; }
    </style>

    <div class="container">
        <div class="card">
            <h1>Senior Healthcare</h1>
            <h2>Our Website is Coming Soon!</h2>
            <p>Kindly drop your email to get notified when we launch!🚀</p>
                <form action="includes/comingsoon.inc.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class='validate' novalidate>
                
                <input type="email" value="" name="email" class="email" id="" placeholder="Please enter address here...">

                <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    //check for success and return success msg
                }elseif(isset($_SESSION['success'])){
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                }
              ?>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4a32d04d1412db09aa3c15380_e0cd7f1c21" tabindex="-1" value=""></div>
                <div class="clear"></div>
                <button name="submit" id="mc-embedded-subscribe" class="button" type="submit">Submit</button>
                </form>
        </div>
    </div>
</html>