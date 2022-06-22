<!DOCTYPE HTML>  

<html>

<head>
    <title>Form Validation</title>
</head>

<body>  

    <?php

        $nameErr = $addressErr = $emailErr = $genderErr = $websiteErr = "";

        $name = $email = $gender = $address = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {

            $nameErr = "Please enter a valid name";

        } else {

            $name = test_input($_POST["name"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {

            $nameErr = "Only letters and white space allowed";

            }

        }

        if (empty($_POST["address"])) {

            $addressErr = "Please enter a valid address";
            //check for non empty address
        }

        if (empty($_POST["email"])) {

            $emailErr = "Please Enter The Email Address";

        } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }

        }  

        if (empty($_POST["website"])) {

            $website = "";

        } else {

            $website = test_input($_POST["website"]);

            // check if URL address syntax is valid

            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {

            $websiteErr = "Enter a valid Webiste URL";

            }    

        }

        if (empty($_POST["comment"])) {

            $comment = "";

        } else {

            $comment = test_input($_POST["comment"]);

        }        

        if (empty($_POST["gender"])) {

            $genderErr = "Please select a gender";

        } else {

            $gender = test_input($_POST["gender"]);

        }

        }

        function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }

    ?>

    <h2>New Patient Registration </h2>
    
   

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
         
        <h3>Hopital </h3>

        <h3>Hopital Address </h3>

        
        
        
        Street Address: <input type="text" name="address">
                        <input type="text" name="address"><br>
                        <span class="error">* <?php echo $addressErr;?></span>
 
        <br><br>
        FullName: <input type="text" name="name">

        <span class="error">* <?php echo $nameErr;?></span>

        <br><br>

        E-mail address: <input type="text" name="email">

        <span class="error">* <?php echo $emailErr;?></span>

        <br><br>

        Website: <input type="text" name="website">

        <span class="error"><?php echo $websiteErr;?></span>

        <br><br>

        Comment: <textarea name="comment" rows="2" cols="10"></textarea>

        <br><br>

        Gender:

        <input type="radio" name="gender" value="female">Female

        <input type="radio" name="gender" value="male">Male

            <span class="error">* <?php echo $genderErr;?></span>

        <br><br>

        <input type="submit" name="submit" value="Submit">  

    </form>

    <?php

        echo "<h2> Final Output:</h2>";
         
        echo $address;

        echo "<br>";
        
        echo $name;

        echo "<br>";

        echo $email;

        echo "<br>";

        echo $website;

        echo "<br>";

        echo $comment;

        echo "<br>";

        echo $gender;



    ?>

</body>

</html>