<html>
<head>
    <title>Kilometers to Meters Converter</title>
</head>

<style>
        body {background-color: beige}
        h1 {text-align: center;
            font-family: 'Courier New', Courier, monospace
        }
        p {text-align: center;
           font-family: 'Courier New', Courier, monospace
        }
        li {text-align: center;
            font-family: 'Courier New', Courier, monospace
        }
        img {display: block;
             margin-left: auto;
             margin-right: auto;
             border:1px solid black
            }
        
    </style>

<body>
    <h1>Kilometers to Meters Converter</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter height in kilometers (km): <input type="text" name="km">
        <input type="submit" name="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['km'])) {
            $km = $_POST['km'];
            $m = $km * 1000;
            echo "<p>$km kilometers is equal to $m meters.</p>";
        } else {
            echo "<p>Please enter a height in kilometers.</p>";
        }
    }


        $homePageUrl = 'index.php'; 

        echo '<a href="' . $homePageUrl . '" class="button">Go to Home Page</a>';
    ?>
</body>
</html>