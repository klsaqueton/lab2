<?php
    // Define variables for social media URLs
    $facebook_url = "https://www.facebook.com";
    $discord_url = "https://www.discord.com";
    $github_url = "https://github.com";
	
	$games_description = "These are the game I would usually play and recommend to most people.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Updated CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            background-image: url('WallpaperDog-20492370.jpg');
            background-size: cover;
            background-position: center;
			
			
			.profile-frame {
			width: 150px; /* Adjust the width as needed */
			height: 150px; /* Adjust the height as needed */
			border-radius: 50%;
			overflow: hidden;
			border: 5px solid #333;
			margin: 5px 0 0 5px; /* Adjust margin for top left positioning */
			display: flex;
			justify-content: center; /* Center horizontally */
			align-items: center; /* Center vertically */
		}

			.profile-frame img {
			max-width: 100%; /* Ensure the image doesn't exceed the container width */
			max-height: 100%; /* Ensure the image doesn't exceed the container height */
			border-radius: 50%; /* Make the image circular */
			object-fit: cover; /* Ensure the image covers the entire circle */
		}

        .sidebar {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            z-index: 999; 
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            transition: color 0.3s ease;
            margin-left: 10px; 
        }

        .sidebar a i {
            margin-right: 5px;
            font-size: 30px;
        }

        .sidebar a span {
            display: inline-block;
        }

        .sidebar a:hover {
            color: yellow;
        }

        .content {
            margin-left: 80px;
            padding: 70px 20px 20px;
            text-align: center;
        }

        .profile-frame {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #333;
            margin: 5px auto 10px;
        }

        .profile-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            margin: 0;
            color: #fff;
            font-size: 28px;
        }

        h2 {
            color: #ffffff;
        }

        p {
            color: #555;
            margin-bottom: 10px;
            font-size: 18px;
            margin-top: 5px;
        }

        .intro-container,
        .hobbies-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .intro-container p {
            color: #fff;
        }

        .interest-card,
        .hobby-card {
            flex-basis: 22%;
            padding: 20px;
            border-radius: 10px;
        }

        .interest-card i,
        .hobby-card i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #fff;
        }

        .interest-card h2,
        .hobby-card h2 {
            margin: 0;
            font-size: 24px;
            color: #fffff;
        }

        .game-card {
            margin-right: 20px;
            margin-bottom: 20px;
            box-shadow: none;
        }

        .intro-container.games-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .game-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        #hobbies h1,
        #games h1 {
            color: #fff;
            font-size: 50px;
            text-align: center;
            margin-top: 20px;
        }

        .hobbies-description,
        .games-description {
            color: #ffffff;
            font-size: 28px;
        }

        .hobbies-container h2,
        .games-container h2 {
            color: #fff;
            font-size: 24px;
            text-align: center;
        }

        .social-links {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            align-items: center;
        }

        .social-links a {
            color: #333;
            font-size: 36px;
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .social-links a:hover {
            color: #555;
            transform: scale(1.2);
        }

        .social-links a .fab.fa-facebook {
            color: #3b5998;
        }

        .social-links a .fab.fa-discord {
            color: #7289da;
        }
		
		footer {
			position: fixed;
			bottom: 10px;
			left: 10px;
			font-size: 14px;
			color: #888;
		}
		
		.error {color: #FF0000;}

    </style>
</head>
<body>
<div class="sidebar">
    <a href="#about-me">
        <i class="fas fa-user fa-lg"></i>
        <span>About Me</span>
    </a>
    <a href="#hobbies">
        <i class="fas fa-bicycle fa-lg"></i>
        <span>Hobbies</span>
    </a>
    <a href="#games">
        <i class="fas fa-gamepad fa-lg"></i>
        <span>Games</span>
    </a>
    <a href="#form">
        <i class="fas fa-pen fa-lg"></i>
        <span>Form</span>
    </a>
</div>


<div class="dropdown" style="position: fixed; left: 20px; top: 20px; z-index: 999;">
    <button onclick="toggleDropdown()" class="dropbtn">Music Playlist</button>
    <div id="myDropdown" class="dropdown-content">
        <iframe width="300" height="150" src="https://www.youtube.com/embed/S9bCLPwzSC0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="opacity: 0.7;"></iframe>
        <iframe width="300" height="150" src="https://www.youtube.com/embed/4fndeDfaWCg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="opacity: 0.7;"></iframe>
        <iframe width="300" height="150" src="https://www.youtube.com/embed/4NRXx6U8ABQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="opacity: 0.7;"></iframe>
    </div>
</div>

<script>
    /* Function to toggle the dropdown */
    function toggleDropdown() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    /* Close the dropdown if the user clicks outside of it */
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: rgba(255, 255, 255, 0.5); /* Transparent background */
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content iframe {
        display: block;
        margin-bottom: 5px;
    }

    .dropdown-content iframe:hover {
        opacity: 1; /* Increase opacity on hover */
    }

    .dropdown-content.show {
        display: block;
    }

    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .dropbtn:hover {
        background-color: rgba(255, 255, 255, 0.3); /* Change background color on hover */
    }
</style>



<div class="content" id="about-me">
    <div class="profile-frame">
        <img src="313497224_1066650227337427_8831110114074484172_n.jpg" style="height:600px; margin:100px; float: left;" alt="">
    </div>
    
    <h1 id="quote" style="font-family: cursive;">&ldquo;In the end, it's not the years in your life that count. It's the life in your years.&rdquo; - Abraham Lincoln</h1>
 

<div class="intro-container" style="text-align: center; font-size: 24px; padding: 20px; background-color: black; color: green; font-family: monospace;">
    <?php
    $about_me = array(
        "Name" => "Kyle Daniel Saqueton",
        "Location" => "Asia Pacific College",
        "Program" => "WEBPROG SF221",
        "Skills" => ["HTML", "CSS", "JavaScript", "PHP", "Python", "Game Development"]
    );  
    ?>
    <p style="font-size: 32px;" id="intro-text"></p>
</div>

<script>
    const introTextElement = document.getElementById('intro-text');
    const introText = "Hello, my name is <?php echo $about_me['Name'] ?>, and I attend <?php echo $about_me['Location'] ?>. I'm pursuing a BSCS-SS degree, aiming to become a game developer. I enjoy gaming, TV, and outdoor activities like biking and basketball.";

    let index = 0;

    function typeWriter() {
        if (index < introText.length) {
            introTextElement.innerHTML += introText.charAt(index);
            index++;
            setTimeout(typeWriter, Math.floor(Math.random() * 200)); // Randomize typing speed
        }
    }

    typeWriter(); // Start typing effect
</script>


    <!-- Skills Section -->
    <div class="skills">
        <h2>Skills</h2>
        <ul class="playlist">
            <?php foreach ($about_me['Skills'] as $skill) : ?>
                <li class="skill-item"><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <p><?php echo $about_me['Program']; ?></p>
</div>

<style>
    .intro-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .skills {
        margin-top: 20px; /* Adjust margin as needed */
    }

    .skills h2 {
        color: #fff; /* Set color for the heading */
    }

    .skills .playlist {
        list-style: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .skill-item {
        background-color: #ffcc00; /* Yellow background */
        color: #000; /* Black text color */
        font-style: italic; /* Apply italic style */
        padding: 5px 10px; /* Adjust padding as needed */
        margin: 5px; /* Adjust margin as needed */
        border-radius: 5px; /* Rounded corners */
        cursor: pointer; /* Add cursor pointer */
        transition: background-color 0.3s ease, color 0.3s ease; /* Add smooth transition */
    }

    /* Hover effect */
    .skill-item:hover {
        background-color: #000; /* Black background on hover */
        color: #fff; /* White text color on hover */
    }
</style>


</div>

</div>

<div class="content" id="hobbies" style="display: none; color: black !important;">
    <h1>Hobbies</h1>
    <div class="hobbies-container">
        <div class="interest-card">
            <i class="fas fa-music"></i>
            <h2>Music</h2>
            <p>Listening to various genres and artists.</p>
        </div>
        <div class="interest-card">
            <i class="fas fa-gamepad"></i>
            <h2>Video Games</h2>
            <p>Playing video games from different genres.</p>
        </div>
        <div class="interest-card">
            <i class="fas fa-film"></i>
            <h2>Movies & Anime</h2>
            <p>Watching movies and anime series.</p>
        </div>
        <div class="interest-card">
            <i class="fas fa-book"></i>
            <h2>Reading</h2>
            <p>Enjoying books from various genres.</p>
        </div>
    </div>
</div>



</div>

<style>
    .interest-card {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .interest-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    }
    .interest-card i {
        font-size: 40px;
        color: #555;
        margin-bottom: 10px;
    }
    .interest-card h2 {
        margin: 0;
        color: #333;
        font-size: 24px;
    }
    .interest-card p {
        color: #666;
        font-size: 16px;
        margin-top: 10px;
    }
</style>


<div class="content" id="games" style="display: none;">

    <h1>Games</h1>
	<p style = "color: white;"><?php echo $games_description; ?></p>
    <div class="intro-container games-container">
        <div class="game-card">

                 
            <h2>League of Legends</h2>
        </div>
        <div class="game-card">
            
                
            <h2>Call of Duty</h2>
        </div>
        <div class="game-card">
           
            <h2>Valorant</h2>
        </div>
    </div>
	
	<div class="content" id="form" style="display: block;">
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

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
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
	</div>
	
</div>

	<div class="social-links">
    <a href="<?php echo $facebook_url; ?>" target="_blank">
        <i class="fab fa-facebook fa-lg"></i>
    </a>
    <a href="<?php echo $discord_url; ?>" target="_blank">
        <i class="fab fa-discord fa-lg"></i>
    </a>
    <a href="<?php echo $github_url; ?>" target="_blank">
        <i class="fab fa-github fa-lg"></i>
    </a>
	</div>

	<?php

	function generate_footer() {
		$current_year = date('Y'); 
		echo "<footer>&copy; $current_year Saqueton Kyle Daniel. Learn more at <a href=\"https://my-learning.w3schools.com/\" target=\"_blank\" style=\"color: white;\">W3Schools</a></footer>";
	}
	?>
	<?php generate_footer(); 
	?>

<script>
    document.querySelectorAll('.sidebar a').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            document.querySelectorAll('.content').forEach(content => {
                content.style.display = 'none';
            });
            document.getElementById(targetId).style.display = 'block';
        });
    });
</script>
</body>
</html>
