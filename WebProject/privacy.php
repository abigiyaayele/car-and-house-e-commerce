<?php include 'components/admin_header.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Online Broker</title>
    <link rel="stylesheet" href="privacy.css">

    <style>
        *{
            margin:0px;
            padding:0px;
/*             box-sizing: border-box;
 */            font-family: 'Roboto', sans-serif;
        }
        body{
            background-color: white;
        }
        .heading{
            width:100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            margin:20px auto;
        }
        .heading h1{
            font-size:50px;
            color: #000;
            margin-bottom: 25px;
            position: relative;
            
        }
        .heading h1::after{
            content:"";
            position: absolute;
            width: 100%;
            height: 4px;
            display: block;
            margin: 0 auto;
            background-color: #4caf50;
        }
        .heading p{
            font-size: 18px;
            color: #666;
            margin-bottom: 35px;
        }
        .container{
            width: 100%;
            margin: 0 auto;
            padding: 10px 20px;
        }
        .about{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;

        }
        .about-image{
            flex: 1;
            margin-right: 40px;
            overflow: hidden;
        }
        .about-image img{
            max-width: 100%;
            height: auto;
            display: block;
            transition: 0.5s ease;
        }
        .about-image:hover img{
              transform: scale(1.2);
        }
        .about-content{
            flex:1;
        }
        .about-content p{
            font-size: 11px;
            margin-bottom:1.5;
            color: #666;
        }
        
 /*        .about-content .read-more {
                  display: inline-block;
                  padding: 10px 20px;
                  background-color: #4caf50;
                  color: #fff;
                  font-size: 19px;
                  text-decoration: none;
                  border-radius: 25px;
                  margin-top: 15px;
                  transition: 0.3s ease;
        }
        .about-content .read-more:hover {
               background-color: #3e8e41;

        } */


        @media screen and (max-width: 768px){
               .heading{
                padding: 0px 20px;
               }
               .heading h1{
                font-size: 36px;
               }
               .heading p{
                font-size: 17px;
                margin-bottom: 0px;
               }
               .container{
                padding:0px;
               }
               .about{
                 padding: 20px;
                 flex-direction: column;
               }
               .about-image{
                   margin-right: 0px;
                   margin-bottom: 20px;
               }
               .about-content p{
                padding:0px;
                font-size: 16px;
               }

        }
            
        
    </style>
</head>
<body>
<div class="heading">
    <h1>Privacy & policy</h1>
    <p>This privacy policy outlines how we collect, use, protect, and share your information.</p>

</div>
   <div class="container">
    <section class="about">
        <div class="about-image">
            <img src="images/privacy.jpg" alt="">
        </div>
        <div class="about-content">
            <p>Last Updated: [January 2024]

Welcome to Cozy Online Brokers! Protecting your privacy is at the heart of our mission. This Privacy Policy explains how we collect, use, share, and safeguard your personal information when you visit our website, use our app, or engage with our services.

Information We Collect
Personal Identification Information: This includes your name, email address, phone number, social security number, and any other information that identifies you.
Financial Information: Details about your bank account, transaction history, trading activity, and investments.
Usage and Device Information: Information about how you access our services, including IP address, browser type, operating system, and usage patterns.
How We Use Your Information
Your information is used to:

Provide, maintain, and improve our services.
Process transactions and send notices about your transactions.
Communicate with you about products, services, offers, and provide customer service.
Detect, prevent, and address fraud and other illegal activities.
Comply with legal obligations.
Sharing Your Information
We do not sell your personal information. We may share your information with:

Service providers who perform services on our behalf.
Legal authorities when required by law or to protect our rights.
Third parties with your consent (e.g., if you opt to use third-party services through our platform).
Your Choices and Rights
You have the right to:

Access, correct, or delete your personal information.
Opt-out of certain uses and disclosures of your information.
Receive information about how your data is processed and shared.
Data Security
We implement robust security measures to protect your information from unauthorized access, alteration, disclosure, or destruction. These include encryption, firewalls, and secure server hosting.

Changes to This Privacy Policy
We may update this policy from time to time. We will notify you of any significant changes by posting the new policy on our platform and updating the "Last Updated" date.

Contact Us
If you have any questions about this Privacy Policy, please contact us at [0942388313].</p>
        </div>
    </section>
   </div>

</body>
</html>
