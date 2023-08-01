<?php 
if (isset($_POST["submit"])) {
        
} else {    
    echo "N0, mail is not set";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Name Display App</title>
</head>

  <style>
    *{
      font-family: sans-serif;
    }

    .container{
      height:200px;
      width:100%;
      display: flex;
      justify-content:center;
      align-item: center;
    }

    .holder{
      display:flex;
      flex-direction: column;
    }

    .hero{
      position: relative;
      left:30%;
      top:10px;
    }

    .holder input[type="text"]{
      height: 30px;
      background: transparent; 
      border: none;
      outline: none;
      font-size: 20px;
      border-bottom: 2px solid green;
    }

    .holder input[type="submit"]{
      display: block;
      height: 32px;
      font-size: 20px;
      color: white;
      border: none;
      width: 250px;
      outline: none;
      background: red;
    }

    .footer{
      position: relative;
      left: 700px;
      
    }
  </style>


<body>
  
   <h1 class="hero">
      The username is <?php echo $_POST['name'] ?? "no name";?>
   </h1>
   <div class="container">
      <div class="holder">
        <form action="index.php" method="POST">
          <div class="wrapper">
            <input type="text" placeholder="Enter Username" name="name">
          </div>
          <br>
          <br>
          <div class="wrapper">
            <input type="submit" value="submit" name="submit">
          </div>
        </form>
      </div>
      
   </div>
   <h4 class="footer">Made with Ubokudom </h4>
</body>
</html>