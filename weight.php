<html>
<head>
    <title>Kilograms to Milligrams Converter</title>
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
    <h1>Kilograms to Milligrams Converter</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Enter weight in kilograms (kg): <input type="text" name="kg">
        <input type="submit" name="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['kg'])) {
            $kg = $_POST['kg'];
            $mg = $kg * 1000000;
            echo "<p>$kg kilograms is equal to $mg milligrams.</p>";
        } else {
            echo "<p>Please enter a weight in kilograms.</p>";
        }
    }


        $homePageUrl = 'index.php'; 

        echo '<a href="' . $homePageUrl . '" class="button">Go to Home Page</a>';
    ?>
</body>
</html>