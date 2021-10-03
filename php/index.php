
<?php
    $conn = mysqli_connect("172.17.0.2", 'root', '1111');
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

    <div id = "grid">   

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

        <article>
            <div id = "control">
                <input type="button" value="white" onclick="document.getElementById('target').className = 'white'"/>
                <input type="button" value="black" onclick="document.getElementById('target').className = 'black'"/>
                <input type="button" value="write" onclick="location.href='./write.php'">
            </div>

       
            <?php
                if (empty($_GET['id'] == false))
                {
                    $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '<h2>'.$row['title'].'</h2>';
                    echo $row['description'];
                }
            ?>
        </article>
    </div>
</body>

</html>