<?php
include 'control/header.php';
//include 'config/signin.php';

// if (isset($_SESSION['username'])){  
//     echo "<script>location.href = 'camagru/feed.php';</script>";
// }

?>

<script>
        document.getElementById("title").innerHTML = "Camagru";
</script>

    <p class="headline">Camagru</p>

<?php include "config/signin.php"; ?>
<!-- <div id="login">
        <br>
    	<form action="config/signin.php" method= "post">
            <input type="login" name="username" placeholder="Login" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="submit" value="Sign in" required>
        </form>
        <div style="height:3px;"><br></div> -->
        <a id="forgetpw" href="forgetpw.php">I forget my password</a>
    </div>
</div>

<div id="welcomepage">
    Welcome to Camagru!
</div>
<br><br>
<div align="center">
    <a href="signup.php"><button class="button">Sign Up</button></a>
</div>
</body>

<?php include 'control/footer.php';?>