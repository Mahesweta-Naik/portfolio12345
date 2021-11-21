<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
      
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    !DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>  personal portfolio</title>
    
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
    
    </head>
    <body>
        
    <!-- header section starts  -->
    
    <header>
    
        <div class="user">
            <img src="lucky.jpg" alt="">
            <h3 class="name">Mahesweta Naik</h3>
            <p class="post">front end developer</p>
        </div>
    
        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    
    </header>
    
    <!-- header section ends -->
    
    <div id="menu" class="fas fa-bars"></div>
    
    <!-- home section starts  -->
    
    <section class="home" id="home">
    
        <h3>HI THERE !</h3>
        <h1>I'M <span>Mahesweta Naik</span></h1>
        <p>a student of Gandhi Intitute of Engineering and Technology currently persuing my B.Tech degree under the domaim of Computer science. I am here to show how my knowledge has improved throughout the webinar. Initially I was insecure about my skills on web development but now I am confident in my abilities to come up with interesting ideas on web development. I am extremely motivated and I constantly develop my skills to grow professionally.   
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
    
    </section>
    
    <!-- home section ends -->
    
    <!-- about section starts  -->
    
    <section class="about" id="about">
    
    <h1 class="heading"> <span>about</span> me </h1>
    
    <div class="row">
    
        <div class="info">
            <h3> <span> name : </span>Mahesweta Naik </h3>
            <h3> <span> age : </span> 19 </h3>
            <h3> <span> qualification : </span> persuing B.Tech </h3>
            <h3> <span> post : </span> front end developer </h3>
            <h3> <span> language : </span> Hindi,English,Odia </h3>
            <a href="#"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
        </div>
    
        <div class="counter">
    
             
            <div class="box">
                <span>3</span>
                <h3>porject completed</h3>
            </div>
    
            
    
        </div>
    
    </div>
    
    </section>
    
    <!-- about section ends -->
    
    <!-- education section starts  -->
    
    <section class="education" id="education">
    
    <h1 class="heading"> my <span>education</span> </h1>
    
    <div class="box-container">
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <h3>Educational qualification</h3>
            <p>completed +2 from Vikash Higher Secondary School,Sason,Sambalpur in 2020.</p>
            <p>completed matriculation from Sri Aurobindo Integral Education Center in 2018</p>
        </div>
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <h3>Technical skills</h3>
            <p>Basic knowledge of C,Java,Python</p>
            <p>MS-Office</p>
            <p>Basics of adobe photoshop</p>
        </div>
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>

            <h3>Projects</h3>
            <p>log in and registration forms using HTML,CSS and PHP</p>
        </div>
    
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <h3>Personal Traits</h3>
            <p>patience</p>
            <p>Adaptibility</p>
            <p>Flexibility to different working environment</p>
            <p>Critical thinking</p>
            <p>Designing</p>
            <p>Team and Time management</p>
        </div>

    
    </section>
    
    <!-- education section ends -->
    
    <!-- portfolio section starts  -->
    
    <section class="portfolio" id="portfolio">
    
    <h1 class="heading"> my <span>portfolio</span> </h1>
    
    <div class="box-container">
    
        <div class="box">
            <img src="abc.png" alt="">
        </div>
    
        <div class="box">
            <img src="def.png" alt="">
        </div>
    
         
    
    </div>
    
    </section>
    
    <!-- portfolio section ends -->
    
    <!-- contact section starts  -->
    
    <section class="contact" id="contact">
    
    <h1 class="heading"> <span>contact</span> me </h1>
    
    <div class="row">
    
        <div class="content">
    
            <h3 class="title">contact info</h3>
    
            <div class="info">
                <h3> <i class="fas fa-envelope"></i>maheswetanaik591@gmail.com</h3>
                <h3> <i class="fas fa-phone"></i> 7978389361 </h3>
                <h3> <i class="fas fa-phone"></i> 7991019788</h3>
                <h3> <i class="fas fa-map-marker-alt"></i>GIETU,Gunupur </h3>
            </div>
    
        </div>
    
        <form action="">
    
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="text" placeholder="project" class="box">
            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>
    
        </form>
    
    </div>
    
    </section>
    
    <!-- contact section ends -->
    
    
    <!-- scroll top button  -->
    
    <a href="#home" class="top">
        <img src="lucky.jpg" alt="">
    </a>

    
    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    
    
    </body>
    </html>   
 </body>
 </html>