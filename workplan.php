<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fitness Plans</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    header {
    /* background-color: #007bff; */
    background-color: chocolate;
    color: white;
    text-align: center;
    padding: 20px;
    text-shadow: 5px 5px 4px #000000;
    top: 0%;
    
    left: 0; 
    width: 100%; 
    z-index: 1000; 

  }
  .banner{
    width: 100% ;
    height: auto;
    /* background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(https://as1.ftcdn.net/v2/jpg/03/30/49/72/1000_F_330497250_ZzWZ6qrLWJ973kgTLI2foKjDoLBtIPbi.jpg); */
    background-image: url('../fitvision/images/workplanbg.png');
    background-size: cover;
    background-position: bottom;
}
    .margin{
     display: flex;
     justify-content: space-around;
     flex-wrap: wrap;
     padding: 7px;
    
    }
    .welcome {
        position: absolute;
        right: 20px;
        top: 20px;
        font-size: 1.2em;
    }
    .check-bmi {
        position: absolute;
        right: 20px;
        top: 80px;
        font-size: 1em;
    }
    .logout {
        position: absolute;
        right: 20px;
        top: 50px;
        font-size: 1em;
    }
    .container {
        max-width: 800px;
        margin: 50px auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 30px;
    }
    .plan {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        cursor: pointer;
        position: relative;
        transition: box-shadow 0.3s, z-index 0.3s;
        z-index: 2;
    }
    .plan:hover {
        box-shadow: 10px 15px 15px rgba(173, 28, 142, 0.89);
        transform: scale(1.1);
        z-index: 0.5;
    }
    .plan img {
        width: 100%;
        height: auto;
        display: inline;
    }
    .plan-description {
        padding: 20px;
        text-align: center;
    }
    .button-container {
      text-align: center; 
    }
    .button {
      display: inline-block;
      padding: 10px 20px;
      font-family: cursive;
      background-color: chocolate;
      color: white;
      text-decoration: none;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button:hover {
      background-color: burlywood;
    }
</style>
</head>
<body>
    <div class="banner">
    <header>
        <h1>VISION PLANS</h1>
        <div class="welcome">Welcome, <?php echo htmlspecialchars($_SESSION['uname']); ?></div>
        <div class="check-bmi">
                <a href="bmi.html" class="button">Check BMI</a>
        </div>
        <div class="logout"><a href="logout.php" class="button">Logout</a></div>
      </header>
 
<div class="container">
    <div class="plan" onclick="window.location.href='meal_plan.html';">
        <img src="images/Designer (1).png" alt="Meal Plan">
        <div class="plan-description">
            <h3>Meal Plan</h3>
            
        </div>
    </div>
    <div class="plan" onclick="window.location.href='workout_plan.html';">
        <img src="images/Designer (2).png" alt="Workout Plan">
        <div class="plan-description">
            <h3>Workout Plan</h3>
            
        </div>
    </div>
    <div class="plan" onclick="window.location.href='Aerobics.html';">
            <img src="images/Designer (3).png" alt="Aerobics">
            <div class="plan-description">
                <h3>Aerobics</h3>
                
            </div>
    </div>
    <div class="plan" onclick="window.location.href='pregnant.html';">
        <img src="images/Designer (4).png" alt="pregnant">
        <div class="plan-description">
            <h3>Pregnancy Plans</h3>
            
        </div>
    </div>
        <div class="plan" onclick="window.location.href='relax.html';">
            <img src="images/Designer (5).png" alt="relax">
            <div class="plan-description">
                <h3>Mind Relax</h3>
                
            </div>    
    </div>
    <div class="plan" onclick="window.location.href='week.html';">
        <img src="images/Designer (6).png" alt="week">
        <div class="plan-description">
            <h3>Free 2 week challenge</h3>
        
        </div>    
    </div>
</div>
<div class="button-container">
    <a href="homepage.html" class="button">Back To Home</a></div>
  </div>
</div>
</body>
</html>
