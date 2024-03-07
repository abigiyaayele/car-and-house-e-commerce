

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online Brokers</title>
    <link rel="stylesheet" href="homepage.css">

</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
            </div>
            <ul id="nav-list">
                <li><a href="homepage.php">Home </a>  </li>
                <li>  <a href="finalAboutUsTripleB.php">About us </a> </li>
                <li> <a href="contact.php">contact_us </a>  </li>
                <li><a href="login.php"> Login</a></li>  
                <li><a href="signup.php"> Register now </a></li>

                <li><a href="view_property.php">Products</a></li>
                <li>  <a href="serviceBeza.php">service </a></li>
                <li><a href="privacy.html">privacy policy </a></li>
                
                <img  class="cross" src="images/cross.png" alt="cross">
            </ul>
            <div class="nav-icons">
                <a href="search.php"><img src="images/search.jpg" alt="search"></a>
                <img class="menuopen" src="images/menu.png" alt="menu">
            </div>
        </div>
        <div class="offers">
            
        </div>
        <div class="back-video">
            <video autoplay loop muted play-inline >
                <source src="pexels_videos_4280 (720p).mp4"  type="video/mp4">  
            </video>
        </div>

        <div class="section">
            <div class="titles">
                <h1> The best Quality you can Find.  </h1>
            </div>
            <div class="services">
                 <p>Need a Shopping help ? </p>
                 <a href="contact_us.html">feed back form</a> <br>
                 <img src="images/logo.jpg" alt="service">
                 <p>Visit out product store</p>
            </div>
            
            </div>
            <div class="products">
                <div class="product">
                    <img src="images/photo_2024-02-02_21-00-23.jpg" alt="product">
                    <a href="#">Quality HOUSE</a>
                </div>
                <div class="product">
                    <img src="images/photo_2024-02-02_21-00-38.jpg" alt="product">
                    <a href="#">fastcar</a>
                </div>
                <div class="product">
                    <img src="images/photo_2024-02-02_21-01-42.jpg" alt="product">
                    <a href="#" >HOUSE</a>
                </div>
                <div class="product">
                    <img src="images/photo_2024-02-02_21-00-59.jpg" alt="product">
                    <a href="#">brandcars</a>
                </div>
                <div class="product">
                    <img src="images/photo_2024-02-02_21-01-06.jpg" alt="product">
                    <a href="#">Home</a>
                </div>
                <div class="product">
                    <img src="images/photo_2024-02-02_21-01-18.jpg" alt="product">
                    <a href="#">fastMotor</a>
                </div>
               
        </div>
        <div class="card-container">
            <h1>The latest. Take a look at what’s new right now. </h1>
            <div class="cards">
                 <div class="card">
                    <span>OUR OFFER</span>
                    <h1>Quality vilas.</h1>
                    <p>Looking for your next home we have got you</p>
                    <img src="images/photo_2024-02-02_21-02-04.jpg" alt="macbook">
                 </div>
                 <div class="card">
                    <span>OUR OFFER</span>
                    <h1>Fast and longlasting cars. Buy Now </h1>
                    <p>Get the comfortable experience </p>
                    <img src="images/featured2.png" alt="macbook">
                 </div>
                 
            </div>
        </div>
        <div class="apple-events">
            <h1>
                Let's Explore COZY Events
                photos photos</h1>
                <div class="event-pictures">
                    <img src="images/photo_2024-02-02_21-00-06.jpg" alt="events">
                    <br>
          <p>Exterior Elegance
At first glance, the Model 3 commands attention with its streamlined silhouette, a testament to Tesla's pursuit of aerodynamic efficiency. 

The smooth lines and minimalistic approach not only enhance the car's aesthetic appeal but also contribute to its impressive range. 

Equipped with automatic door handles that retract flush with the body, the car presents a polished look while minimizing air resistance.

Interior Sophistication
Inside, the cabin offers a sanctuary of calm and convenience. The futuristic dashboard is dominated by a 15-inch touchscreen that controls nearly all the car's functions, 
from navigation to climate, with intuitive ease. The minimalist interior is designed with an open, airy feel,
 featuring premium materials and meticulous attention to detail. The panoramic glass roof provides passengers with a sense of openness, 
 bathing the cabin in natural light and offering an unobstructed view of the sky.

Unrivaled Performance
The Model 3 is not just about looks; it's a powerhouse of performance. With instant torque available from the electric motor, 
acceleration is both swift and silent, propelling the car from 0 to 60 mph in as little as 3.1 seconds. The low center of gravity,
 afforded by the battery's placement, ensures agility and stability through corners, making every drive exhilarating.

Innovative Technology
Tesla's Autopilot advanced safety and convenience features come standard, offering peace of mind with enhanced autopilot capabilities and full self-driving potential in the future. 
The Model 3 is also equipped with Tesla's latest active safety features, including automatic emergency braking, collision warning, and blind-spot monitoring, ensuring a safer driving experience.

Sustainable Future
With zero emissions and a significant range on a single charge, the Model 3 represents a giant leap towards a more sustainable future. 
Its efficiency is matched by the convenience of Tesla's expanding Supercharger network, making long-distance travel seamless and anxiety-free.</p>
                </div>
        </div>
        <div class="section-3">
            <img src="images/photo_2024-02-02_20-59-23.jpg" alt="house">
            <h1> appartment
               <br>
              
                </h1>
        </div>
       <?php include 'components/footer.php' ?>
    </div>
    <script>
      let nav_list = document.getElementById('nav-list')
      let openMenu = document.querySelector('.menuopen')
      let cross = document.querySelector('.cross')
      openMenu.addEventListener('click',()=>{
        nav_list.style.opacity = '100%'
        openMenu.style.display ='none'
      })
      cross.addEventListener('click',()=>{
        nav_list.style.opacity = '0%';
        setTimeout(()=>{
            openMenu.style.display ='block'
        },400)
      })

    </script>
</body>
</html>