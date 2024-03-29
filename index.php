<?php include('dbknow.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">Minhaz</p>
            <span>_</span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="#home" class="nav-link active-link">Home</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link ">About</a>
                    <div class="circle"></div>
                </li>

                <li class="nav_list">
                    <a href="#know" class="nav-link ">Know Me</a>
                    <div class="circle"></div>
                </li>

                <li class="nav_list">
                    <a href="#projects" class="nav-link ">Projects</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link ">Contact</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
       
        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>
</div>


 <!------------- Web Developer page--------- -->

 <section class="first">
        
           
    <div class="text_container">
        <div class="text"><span class="lg_test">Hi,</span>I'm Minhaz Mahmud</div>
           <h1 class="lg_test">FULL STACK DEVELOPER</h1>
        </div>
    </div>
</section>


    <!-- -------------- MAIN ---------------- -->
    <main class="wrapper">
       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="home">
          <div class="featured-text">
             <div class="featured-text-card">
                <span>Minhaz Mahmud</span>
             </div>
             <div class="featured-name">
                <p>I'm a <span class="typedText">Student</span></p>
             </div>
             <div class="featured-text-info">
                <p>
                    I'm a CSE student at Khunla University of Engineering & Technology.
                    Besides I'm a part time web and mobile developer.
                </p>
             </div>
             <div class="featured-text-btn">
                <button class="btn orange-btn">Hire Me</button>
                <button class="btn">Download CV <i class="uil uil-file-alt"></i></button>
             </div>
             <div class="social_icons">
                <div class="icon"><i class="uil uil-instagram"></i></div>
                <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
                <div class="icon"><i class="uil uil-github-alt"></i></div>
             </div>
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="images/avatar.jpg" alt="avatar">
            </div>
          </div>
        
       </section>
       <!-- -------------- ABOUT BOX ---------------- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>About Me</h1>
          </div>
                <div class="about-info">
                    <h3>My introduction</h3>
                    <p>
                        Hi, I'm Minhaz Mahmud, a Computer Science and Engineering student at 
                        Khulna University of Engineering and Technology.
                         I'm passionate about programming and always eager to learn new things.
                          As a developer in the making,
                          I explore various aspects of software development,
                           with a particular interest in mobile app development.
                         I enjoy tackling challenges and constantly improving my skills.
                          Let's connect and share our programming journey!
                    </p>
                    <div class="about-btn">
                        <button class="btn">Download CV <i class="uil uil-import"></i></button>
                    </div>
                </div>
            
       </section>


       <!---------- work i can do for you-------->


     <div class="working">
         WORK, I CAN DO FOR <span id="you">YOU</span>
     </div>

       <section class="work">
         <div class="card">
            <div class="image_container">
                <img src="images/web.png" alt="web">
            </div>
            <div class="class_content">
                <h3>Web Development</h3>
                <p> 
                    Hi, I'm Minhaz Mahmud, a web developer with a passion for
                     crafting user-friendly websites.  
                </p>
            </div>
         </div>

          <div class="card">
            <div class="image_container">
                <img src="images/mobile.png" alt="mobile">
            </div>
            <div class="class_content">
                <h3>App Development</h3>
                <p>Dedicated mobile developer creating innovative and
                     user-friendly apps for seamless digital experiences.</p>
            </div>
         </div>

         <div class="card">
            <div class="image_container">
                <img src="images/uiux.png" alt="uiux">
            </div>
            <div class="class_content">
                <h3>UI UX DESIGN</h3>
               <p>Passionate UI/UX designer creating visually appealing and 
                intuitive digital experiences with precision and creativity.</p>
            </div>
         </div>
      </section>




          <!-- ------------------------------------------ -->


       <!-------------- KNOW ME------------------ -->
       <section class="know-me" id="know">
        <div class="top-header">
            <h1>Know me</h1>
            <div class="me-container">

            <?php
        
        $query = "select * from `know`";

        $result=mysqli_query($conn,$query);

        if(!$result){
            die("Query failed: " . mysqli_error($conn));
        }else{
            // print_r($result);
            while ($row=mysqli_fetch_assoc($result)) {
                     ?>

                 <div class="me-box">
                    <i class="<?php echo $row['icon']; ?>"></i>
                    <h3><?php echo $row['head']; ?></h3>
                    <label><?php echo $row['des']; ?></label>
                </div>
              <?php
            }
        } 
        ?>
                <!-- <div class="me-box">
                    <i class="uil uil-backpack"></i>
                    <h3>DZS</h3>
                    <label>I've completed my SSC from Dinajpur Zilla SChool</label>
                </div>

                <div class="me-box">
                    <i class="uil uil-building"></i>
                    <h3>DGC</h3>I've completed my HSC from Dinajpur Govt. College
                    <label></label>
                </div>
                
                <div class="me-box">
                    <i class="uil uil-graduation-cap"></i>
                    <h3>KUET</h3>
                    <label>Currently I'm pursuing my graduation from Khulna University of Engineering & Technology</label>
                </div> -->

            </div>
        </div>
       </section>


        <!-- -------------- PROJECT BOX ---------------- -->

        <section class="section" id="projects">
            <div class="top-header">
                <h1>Projects</h1>
            </div>
            <div class="project-container">
              <div class="project-box">
                  <i class="uil uil-briefcase-alt"></i>
                  <h3>Completed</h3>
                  <label>5+ Finished Projects</label>
              </div>
              <div class="project-box">
                  <i class="uil uil-users-alt"></i>
                  <h3>Clients</h3>
                  <label>10+ Happy Clients</label>
              </div>
              <div class="project-box">
                  <i class="uil uil-award"></i>
                  <h3>Experience</h3>
                  <label>1.5+ Years in the field</label>
              </div>
            </div>
         </section>
  
         <!-- -------------- CONTACT BOX ---------------- -->
  
         <section class="section" id="contact">
            <div class="top-header">
              <h1>Get in touch</h1>
              <span>Do you have a project in your mind, contact me here</span>
            </div>
            <div class="row">
               <div class="col">
                  <div class="contact-info">
                      <h2>Find Me <i class="uil uil-corner-right-down"></i></h2>
                      <p><i class="uil uil-envelope"></i> Email: mmahmud25dec@gmail.com</p>
                      <p><i class="uil uil-phone"></i> Tel: +8801771-057177</p>
                  </div>
               </div>
               <div class="col">
                  <div class="form-control">
                      <div class="form-inputs">
                          <input type="text" class="input-field" placeholder="Name">
                          <input type="text" class="input-field" placeholder="Email">
                      </div>
                      <div class="text-area">
                          <textarea placeholder="Message"></textarea>
                      </div>
                      <div class="form-button">
                          <button class="btn">Send <i class="uil uil-message"></i></button>
                      </div>
                  </div>
               </div>
            </div>
         </section>
  
      </main>
  
  
      <!-- --------------- FOOTER --------------- -->
      <footer>
          <div class="top-footer">
              <p>Minhaz Mahmud_</p>
          </div>
          <div class="middle-footer">
            
          </div>
          <div class="footer-social-icons">
              <div class="icon"><i class="uil uil-facebook"></i></div>
              <div class="icon"><i class="uil uil-github-alt"></i></div>
          </div>
          <div class="bottom-footer">
              <p>A <a href="#home" style="text-decoration: none;"> Minhaz  Mahmud </a> - development.</p>
          </div>
        <div class="login">  <a href="login.php"> <input type="submit" name="" value="LOGIN" style="background: orange; color:white; height:35px; width: 100px; margin-top:20px;
    font-size:18px; border:0; border-radius: 5px; cursor:pointer; "></a></div>

      </footer>
  
   
  

       
    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!-- ----- MAIN JS ----- -->
    <script src="main.js"></script>
  
  
  </body>
</html>

