<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Space</title>
    <link rel="stylesheet" href="./style/style.css">
    <link href="http://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
    <script type="text/javascript" src="https://livejs.com/live.js"></script>
    <script src="./script.js" defer></script>
    <style>
        a{
         text-decoration: none;
         color: white;
         font-weight: 700;
         font-size: 24px;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="nav-bar secondary-text">
            <div class="nav-bar-wrapper">
                <div class="nav-logo-wrapper">
                    <i class="nav-logo"></i>
                    <span class="nav-title">My Space</span>
                </div>

                <div class="nav-menu-wrapper">
                    <span class="nav-menu-item"><a href="viv.php">ПОДИВИТИСЬ ЧЕРГУ</a></span>
                    <i class="nav-menu-icon"></i>
                </div>

                <div class="menu-button"></div>
            </div>
        </nav>
    </header>
<div class="page-wrapper">
    <section class="registration-section">
        <div class="registration-form-wrapper">
            <div class="registration-form-image-wrapper">
                <img class="registration-form-image" id="planet-img" src="./Assets/Uran.svg" alt="planet-img">
            </div>

            <div class="form-card flex-column">
                <div class="form-wrapper">
   <center>
                  <h2 class="form-title">Електронна черга для
                       <span id="text-to-change"> польоту у космос</span></h2>
        <form action="insert.php" method="post">
              
              
<p>
  <label class="form-label" for="name">Імʼя </label>
                        <input class="form-input" type="text" id="name" name="name" placeholder="Введіть імʼя" required>
            </p>
  
              
              
              
<p>
                <label class="form-label" for="phone" required>Телефон </label>
<input class="form-input" type="tel" id="phone" name="phone" placeholder="+380 _ __ __ __" required>
</p>
  
  
              
              
              
<p>
                <label class="form-label" for="select">Куди саме? </label>
                <input class="form-input" type="text" name="cho" id="Cho">
            </p>
  
  
              
<button class="form-submit-button" type="submit">Зареєструватися </button>
        </form>
    </center>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer secondary-text">
    <span class="footer-credentials">
        © 2022 My Space. Всі права захищені.
    </span>
</footer>


</body>
</html>