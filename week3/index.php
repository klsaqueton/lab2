<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Website</title>
    <link rel="shortcut icon" type="image/png" href="videogames.png">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body style="margin:0;">
    <div style="background-image: url('WallpaperDog-20492370.jpg'); background-size: cover; height:480px; padding-top:80px; text-align:center;">
        <img src="videogames.png" style="height:150px; border-radius:50%; border: 10px solid #FEDE00;" alt="">
        <h1 style="font-size:100px; color:white; margin:10px;">Welcome</h1>
        <p style="font-size:30px; color: white;"><em>"In the end, it's not the years in your life that count. It's the life in your years." -Abraham Lincoln</em></p>
    </div>

    <img src="313497224_1066650227337427_8831110114074484172_n.jpg" style="height:600px; margin:100px; float: left;" alt="">
    
    <div style="height:600px; margin:100px;">
        <h1>Information</h1>
        <p style="line-height: 2.0; font-size:20px;">Hello, my name is Kyle Daniel Saqueton, and I attend Asia Pacific College. 
        I am currently pursuing a degree in BSCS-SS, or Bachelor of Science in Computer Science with a focus in Software and Systems,
        in the hopes of one day realizing my dream of becoming a game developer. I enjoy playing video games, watching television,
        and, when I have free time, riding my bike or playing basketball outside.</p>
        <p style="line-height: 2.0; font-size:20px;">Email me at <a href="mailto:kyledanielsaqueton@gmail.com">kyledanielsaqueton@gmail.com</a></p>
    </div>

    <div style="height:auto; background-color:#F7C201;">
        <h1 style="color:white; padding:40px; margin:0; text-align:center;">Made by the creator</h1>
    </div>

    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }

      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }
      }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
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
</body>
</html>
