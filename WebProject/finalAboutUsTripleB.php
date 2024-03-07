<?php include 'components/admin_header.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=allura|Josefin+Sans');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #809faa;
            font-family: 'Josefin Sans', sans-serif ;
        }
        .wrapper{
            margin-top: 5%;
        }
        .wrapper p{ 
            text-align: center;
            padding: 3px;
        }
        .wrapper h1{
            font-family: 'Allura', cursive;
            font-size: 52px;
            margin-bottom: 20px;
            text-align: center;
        }
        .team{
            margin-top: 5%;
            display: flex;
            text-align: center;
            width: auto;
            justify-content: center;
            flex-wrap: wrap ;
        }
        .team .team_member{
            background-color: #fff;
            margin: 5px;
            margin-bottom: 50px;
            width: 300px;
            padding: 20px;
            line-height: 20px;
            color: #8e8b8b;
            position: relative;
        }
        .team_member:hover{
            background-color: #5fbff9;

        }
        .team_member:hover h3{
            color: #fff;
        }
        .team_member:hover hr{
            background-color: #fff;
        }
        .team_member:hover h3,
        .team_member:hover hr
        .team_member:hover .team_img{
            transition: all 400ms ease-in-out;
        }
        .team .team_member h3{
            color: #81c644;
            font-size: 26px;
            margin-top: 50px;
        }
        .team .team_member hr{
            width: 46px;
            height: 3px;
            background-color: #5fbff9;
            margin:  0 auto;
            border: none; 
        }
        .team .team_member .team_img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            background:#fff ;
        }
        .team .team_member .team_img img{
            width: 100px;
            height: 100px;
            padding: 10px;
            border-radius: 50%;
        }
        footer{
         background-color: #212226;
         padding: 20px;   
        }
        footer p{
           padding: 0px;
           color: #fff ;

        }

         

    </style>
</head>
<body>
    <div class="wrapper">

        <h1>About Us</h1>
         <p>Welcome to our website, where drmand meets supply. With a commitment to excellence, we strive to provide an excellent solutions tailored to your needs of houses and cars. Our dedicated team is driven by a shared vision of delivering quality and exceeding expectations. Discover the difference with us</p>
 
        <div class="team">
                <div class="team_member">
                    <div class="team_img">
                        <img src="images/mission.jpg " alt="team_member_image">
                    </div>
                    <h3>Mission</h3>
                    <hr>
                    <p class="role">
                        At TripleB.com, our mission is to transform the home and car renting and selling experience. 
                We provide a user-friendly online platform, bringing together renters, buyers, and sellers for seamless transactions.
                 Our goal is to simplify the process, offer transparent information, and build trust in the community. 
            With cutting-edge technology, we aim to make finding your dream home or perfect vehicle easy, efficient, 
            and tailored to your needs. HomeWheels.com envisions a future where the search for your ideal place or vehicle is just a click away,
             revolutionizing how people connect with their homes and cars.</p>
   
                </div>
                <div class="team_member">
                    <div class="team_img">
                        <img src="images/vision.jpg" alt="team_member_image">
                    </div>
                    <h3>Vission</h3>
                    <hr>
                    <p class="role">
                        Our vision at TripleB.com is to be the unparalleled online destination for home and car renting and selling, 
                        redefining the way people discover and connect with their ideal living spaces and vehicles. We aspire to create
                     a dynamic platform that seamlessly integrates innovative technology, ensuring a user-friendly experience marked by 
                         transparency and efficiency. Our vision extends beyond transactions;
                     we aim to foster a vibrant community where trust is paramount, and 
                     users can confidently navigate the process of renting or purchasing homes and cars.
                 Ultimately, TripleB.com envisions a future where individuals effortlessly find their perfect homes and vehicles,
                      enriching their lives through seamless online interactions.</p>

                </div>
                <div class="team_member">
                    <div class="team_img">
                        <img src="images/purpose.jpg " alt="team_member_image">
                    </div>
                    <h3>Purpose</h3>
                    <hr>
                    <p class="role">
                        The purpose of TripleB.com is to empower individuals in their quest for the perfect living space
                 and vehicle by offering a convenient and trustworthy online platform. Our mission is to streamline the process of
                   home and car renting and selling, providing users with a simplified, transparent, and efficient experience. 
                By leveraging advanced technology, we aim to eliminate the complexities associated with these transactions, 
                 making it easier for individuals to find homes that suit their lifestyle or vehicles that meet their needs. 
                 TripleB.com is driven by the purpose of facilitating meaningful connections between renters, buyers, and sellers, 
                    ultimately making the journey of securing a home or vehicle online a seamless and satisfying one.</p>

                </div>

        </div>
    </div>
<?php include 'components/footer.php' ?>
</body>
</html>