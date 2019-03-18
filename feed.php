<?php
include 'control/header.php';
include "config/setup.php";

session_start();
if (!isset($_SESSION['username'])){  
    echo "<script>alert('You need to sign in first.')</script>";
    echo "<script>location.href = 'index.php';</script>";
} else {
    session_start();
    $name = $_SESSION["username"];
}

?>

<script>
    document.getElementById("title").innerHTML = "Feed";
</script>

    <p class="headline">Newsfeed</p>
    <div id="topline" align="right">
        <br>
        <a class="hdtext">Hello,</a>
        <a class="hdtext"><?php echo $name; ?></a>&thinsp;&hearts;
        &hairsp;
        <a class="hdtext" href="home.php">Home</a>
        &hairsp;
        <a class="hdtext" href="account.php">Account</a>
        &hairsp;
        <a id="logout" href="config/logout.php" onclick="return confirm('Are you ure to log out?');">Logout</a>
    </div>
</div>


<div align="center" id="newsfeed">

<?php     
    $conn = db_connect();
    $sql = "SELECT * FROM imagelist";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetch();
    $conn = null;
    if (!$res){
        echo "<div align='center'>";
        echo "<div id='errormsgbox' style='height:250px'>";
        echo "<p id='nonewsfeed'>Oups, there is no post from anyone yet, go to your home page and share something with us!</p>";
        echo "<a href='home.php'><button class='button'>MySpace</button></a></div></div>";
    } else {
        //      ALTER TABLE `gallery` CHANGE `img3` `img3` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
        include "addfeed.php";
    }
    exit;
?>
   
<!-- create a whilte loop for all the posts --> 


    <!-- <div align="left" class="feed">
        <table>
            <div class="feedphoto"><img  class="feedphoto" src="uploads/upload.png"></div>
            <div align="right">
                <p id="feedusername">Username</p>
                <p id="comments">Comments</p>
            </div>
        </table>
        <div align="right">
            <a id="numofheart">100</a>    
            <img id="heart" src="images/heart.png"> 
        </div>
    </div><br>

      <div align="left" class="feed">
        <table>
            <div class="feedphoto"><img  class="feedphoto" src="uploads/upload.png"></div>
            <div align="right">
                <p id="feedusername">Username</p>
                <p id="comments">Comments</p>
            </div>
        </table>
        <div align="right">
            <a id="numofheart">100</a>    
            <img id="heart" src="images/heart.png"> 
        </div>
    </div><br>

      <div align="left" class="feed">
        <table>
            <div class="feedphoto"><img  class="feedphoto" src="uploads/upload.png"></div>
            <div align="right">
                <p id="feedusername">Username</p>
                <p id="comments">Comments</p>
            </div>
        </table>
        <div align="right">
            <a id="numofheart">100</a>    
            <img id="heart" src="images/heart.png"> 
        </div>
    </div><br>

      <div align="left" class="feed">
        <table>
            <div class="feedphoto"><img  class="feedphoto" src="uploads/upload.png"></div>
            <div align="right">
                <p id="feedusername">Username</p>
                <p id="comments">Comments</p>
            </div>
        </table>
        <div align="right">
            <a id="numofheart">100</a>    
            <img id="heart" src="images/heart.png"> 
        </div>
    </div><br> -->


</div>
<!--    <iframe src=""id="scrollingfeed" scrolling="yes">
 src => where the pictures are saved! -->  

    <!-- </iframe>    -->
<!-- </div> -->
</body>

<?php include 'control/footer.php';?>