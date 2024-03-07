


<style>



@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;800;900&family=Outfit:wght@100;200;500;600;900&family=Poppins:wght@300;400;500&family=Raleway:wght@600;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.navbar .logo img{
    height: 20px;
}
.navbar .nav-icons img{
    height: 20px;
    margin-left: 20px;
}
.navbar{
    display: flex;
    justify-content: center;
    padding-top: 10px;
    position: fixed;
    background-color: white;
    top: 0%;
    width: 100%;
    padding-bottom: 10px;
}
.navbar ul{
    display: flex;
    list-style: none;
}
.navbar ul li {
    margin-left: 40px;
    font-size: 15px;
}
#nav-bar li{
      float: left;
      position: relative;
/*       display: flex; */
      width: auto;  
/*       flex-direction: column; */
}


#submenu{
left: 0;
opacity: 0;
/* position: absolute; */
top: 35px;
visibility: hidden;
z-index: 1;
}

li:hover ul#submenu{
opacity: 1;
top: 80px;
visibility: visible;
/* align-items: center;
 */}

#submenu li{
float: none;
width: 100%;
}

.offers{
    padding-top: 30px;
    text-align: center;
    background-color: black;
    color: white;
    margin-top: 20px;
    padding-bottom: 10px;
}
.offers a{
    color:  blue;
}

.back-video video{
    width: 100%;
}

.services img{
    height: 30px;
    border-radius: 50%;
    width: 30px;
}

.services a{
    color: blue;
}
.section{
    display: flex;
    justify-content: space-evenly;
    padding-top: 40px;
    background-color: rgba(0, 0, 0, 0.099);
    margin-top: 30px;
}
.titles h1{
    font-size: 40px;
}
.products{
    display: flex;
    justify-content: space-evenly;
    padding-top: 30px;
    background-color: rgba(0, 0, 0, 0.099);
}

.product img{
    height: 90px;
}
.product a{
    text-decoration: none;
    color: black;
    margin-top: 20px;
   
}
.product{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 30px;
}

.card img{
    height: 220px;
}
.card-container{
    margin-top: 30px;
    text-align: center;
}
.card{
    height: 470px;
    width: 380px;
    text-align: center;
    padding: 20px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding-bottom: 30px;
    border-radius: 30px;
    margin-top: 25px;
    transition: 0.7s;
}
.card h1{
    margin-bottom: 20px;
    margin-top: 20px;
}
.card p {
    margin-bottom: 20px;
}
.card-container{
    margin-top: 40px;
}
.cards {
    margin-top: 45px;
    display: flex;
    justify-content: space-evenly;
}

.card:hover{
    transform: scale(1.1);
    cursor: pointer;
}
.event-pictures img{
    height: 400px;
}
.event-pictures{
    display: flex;
    justify-content: space-evenly;
}

.apple-events{
    background-color: black;
    color: white;
    margin-top: 100px;
    padding: 40px;
}

.apple-events h1{
    text-align: center;
    margin-bottom: 30px;
}
.section-3 img{
    height: 700px;
}
.section-3{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    margin-top: 30px;
}
.section-3 h1{
    font-size: 40px;
}

.store {
    display: flex;
}

.store img{
    height: 22px;
}
.menu-list{
    display: flex;
    justify-content: space-evenly;
}
.menu-list ul{
    list-style: none;
}
.store{
    margin-left: 5rem;
    padding-top: 20px;
    padding-bottom: 20px;
}
.menu-items{
    margin-top: 30px;
    background-color: rgba(0, 0, 0, 0.099);
}
.footer p{
    text-align: center;
}
.footer{
    padding: 20px;
}
.cross{
    display: none;
}
.menuopen{
    display: none;
}


@media only screen and (max-width:600px) {
    .navbar ul{
        display: none;
    }
    .navbar{
        display: flex;
        justify-content: space-around;
    }
    .navbar ul{
        display: flex;
        flex-direction: column;
        width: 100%;
        padding-bottom: 30px;
        position: absolute;
        background-color: white;
        opacity: 0%;
        transition: 0.6s;
        
    }
    .navbar ul li{
        padding-top: 30px;
    }
    .menuopen{
        display: block;
        position: absolute;
        right: 4%;
        top: 25%;
       
    }
    .cross{
        display: block;
        position: absolute;
        right: 4%;
        height: 25px;
    }
    .offers p{
        font-size: 12px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .offers a{
        font-size: 13px;
    }
    .section{
        display: flex;
        flex-direction: column;
        padding: 30px;
    }
    .titles h1{
        font-size: 30px;
    }
    .cards{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .apple-events{
        display: flex;
        flex-direction: column;
    }
    .event-pictures{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .event-pictures img{
        height: 350px;
        width: 200px;
    }
    .section-3{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .section-3 img{
        height: 400px;
    }
    .section-3 h1{
        font-size: 30px;
        margin: 20px;
    }
    .menu-list ul{
      font-size: 12px;
      padding: 10px;
    }
}

</style>





<div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
            </div>
            <ul id="nav-list">
                <li><a href="homepage.php">Home </a>  </li>
                <li>  <a href="finalAboutUsTripleB.php">About us </a> </li>
                <li> <a href="contact.html">contact_us </a>  </li>
                <li><a href="login.php"> Login</a></li>               
                <li><a href="signup.php"> Register now </a></li>
<!--                 <li><a href="login.php">Add Properties</a>
                  <ul id="submenu">
                     <li><a href="post_property.php">House</a></li>
                     <li><a href="#">Cars</a></li>
                  </ul> -->
               </li>
               <li><a href="view_property.php">Products</a></li>
                <li>  <a href="serviceBeza.php">service </a></li>
                <li><a href="privacy.html">privacy policy </a> </li>
                
                <img  class="cross" src="images/cross.png" alt="cross">
            </ul>
            <div class="nav-icons">
                <a href="search.php"><img src="images/search.jpg" alt="search"></a>
                <img class="menuopen" src="./images/menu.png" alt="menu">
            </div>
        </div>











<!-- <header class="header">

   <div id="close-btn"><i class="fas fa-times"></i></div>

   <a href="dashboard.php" class="logo">AdminPanel.</a>

   <nav class="navbar">
      <a href="dashboard.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="listings.php"><i class="fas fa-building"></i><span>listings</span></a>
      <a href="users.php"><i class="fas fa-user"></i><span>users</span></a>
      <a href="admins.php"><i class="fas fa-user-gear"></i><span>admins</span></a>
      <a href="messages.php"><i class="fas fa-message"></i><span>messages</span></a>
   </nav>

   <a href="update.php" class="btn">update account</a>
   <div class="flex-btn">
      <a href="login.php" class="option-btn">login</a>
      <a href="register.php" class="option-btn">register</a>
   </div>
   <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn"><i class="fas fa-right-from-bracket"></i><span>logout</span></a>

</header>

<div id="menu-btn" class="fas fa-bars"></div> -->