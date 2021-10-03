
<?php
    $conn = mysqli_connect("172.17.0.3", 'root', '1111');
    mysqli_select_db($conn, "cho_web");
    $result = mysqli_query($conn, "Select * From topic");
?>


<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
</head>

<body id ="target">

    <title> CHO Web </title>

    <header>
    <img src="https://yt3.ggpht.com/ytc/AKedOLRXKb8qrpdBz3Duzc4KtmuDvqMgDadS5-Dtlb8JcA=s900-c-k-c0x00ffffff-no-rj" alt="shinhanbank">
        <h1> <a href ="./index.php"> Cho's HomePage </a> </h1>
    </header>

    <nav>
        <ol> 
            <?php    
                while($row = mysqli_fetch_assoc($result))
                {  
                    echo '<li><a href = "./index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                }
            ?>
        </ol>
    </nav>

    <div id = "control">
        <input type="button" value="white" onclick="document.getElementById('target').className = 'white'"/>
        <input type="button" value="black" onclick="document.getElementById('target').className = 'black'"/>
        <input type="button" value="write" onclick="location.href='./write.php'">
     </div>

    <article>

                <form action="process.php", method = "post">
                    <p>
                        제목 : <input type="text" name = "title">
                    </p>
                    <p>
                        작성자 : <input type="text" name = "author">
                    </p>
                    <p>
                        본문 : <input type="text" name = "description">
                    </p>
                    <input type= "submit" name = "name">
                </form>

    </article>

</body>

</html>