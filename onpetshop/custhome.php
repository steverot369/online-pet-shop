<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customer Home</title>
   <link rel="stylesheet" href="adminstyle.css">

</head>
<body>
    <div class="bgimage">
        <div class="menu">

            <div class="leftmenu">
                <h4> 
                    <?php
                    session_start();
                    echo $_SESSION['username'];
                    ?></h4>
            </div>

            <div class="rightmenu">
                <ul>
                    <!-- <li id="firstlist">Home</li> -->
                    <li id="firstlist"><a href="home.html"> Home</a></li>
                    <li><a href="userprofile.php"> manage profile</a></li>
                    <li><a href="viewpets.php"> view cart</a></li>
                    <li><a href="buypets.php"> buy pet</a></li>
                    <li><a href="viewusers.php"> logout</a></li>

                    <!-- <li>Contact</li> -->
                </ul>
            </div>

        </div>
        <div class="text">
            <h4>LOVE * PET * CARE</h4>
            <h1> CREATIVE & EXPERIENCED </h1>
            <h3> Until one has loved an animal, a part of one's soul remains unawakened.</h3>
            <button class="btn"> Like share</button>
            <button class="btn"> Subscribe</button>
        </div>

    </div>
    <!-- /* coding with nick */ -->
    
</body>
</html>