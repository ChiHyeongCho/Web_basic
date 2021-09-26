
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://192.168.56.102/php/style.css">
</head>

<body id ="target">

    <title> CHO Web </title>

    <header>
        <h1> <a href ="http://192.168.56.102/php/index.php"> Cho's HomePage </a> </h1>
    </header>

    <nav>
        <ol>
            <?php
            echo file_get_contents("list.txt");
            ?>
        </ol>
    </nav>

    <div id = "control">
        <input type="button" value="white" onclick="document.getElementById('target').className = 'white'"/>
        <input type="button" value="black" onclick="document.getElementById('target').className = 'black'"/>
    </div>

    <article>
        <?php
        if (empty($_GET['id']) == false)
        {
            echo file_get_contents($_GET['id'].".txt");
        }
        ?>
    </article>

</body>

</html>
