<?php include("c.php");     ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
   background-attachment: fixed;
             background-repeat: no-repeat;
             background-size: 100% 100%;
             background-image: linear-gradient(rgb(203, 90, 231),rgb(145, 64, 64),pink,rgb(203, 39, 184));
}
.slider{
    width: 95%;
    border: 8px solid black;
            height: 450px;
            position:absolute;
            left: 50%;
            margin-top: 150px;
            top: 15%;
            position: absolute;
            transform: translate(-50%,-50%);
            background-size: 100% 100%;
            animation: kl 15s linear infinite;
            box-shadow: 0 0 15px white;
           
            background-image: url(https://silveroakuni.ac.in/upload/images/slider/m_12.webp)
}
@keyframes kl {

0%{
    background-image: url(https://www.collegebatch.com/static/clg-gallery/silver-oak-university-college-of-liberal-studies-ahmedabad-220937.jpg);
}

20%{
    background-image: url(https://www.collegebatch.com/static/clg-gallery/silver-oak-university-college-of-liberal-studies-ahmedabad-220937.jpg);
}
40%{
    background-image:url(https://static.zollege.in/public/college_data/images/campusimage/168501782028.png);
}

60%{
    background-image: url(https://www.vibesofindia.com/wp-content/uploads/2022/09/1-5.jpg);

}
80%{
    background-image: url( https://admission.silveroakuni.ac.in/images/celeb_event.png);
}

100%{
    background-image: url( https://silveroakuni.ac.in/upload/images/slider/m_1.webp);
}
}
 button{
    height: 170px;
    width: 170px;
    border-radius: 50px;
    background-color: bisque;
    background-image: linear-gradient(rgb(220, 220, 12),rgb(164, 45, 45));
    color: white;
    
   
    
 }


 .lo{
  margin-left:200px;
  margin-top:700px;
  position: fixed;
 }

h1{
    margin-left: 150px;
    margin-top:600px;
    font-size: 70px;
   padding: 0;
   position: absolute;
   color: azure;
   font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

button:hover{ 
    background-color: pink;
    border: 5px solid rgb(17, 16, 16);
    
}
li{
    font-size: 35px;
    color: white;
}

@keyframes mnv {
    0%{
        background-image: linear-gradient(red, blue,yellow);
    }
    
    5%{
     background-image: linear-gradient(blue, yellow,red);
    }

    15%{
        background-image: linear-gradient(yellow, red,blue);
    }
    30%{
        background-image: linear-gradient(rgb(230, 230, 175), rgb(56, 13, 13),rgb(81, 81, 102));
    }
    35%{
      
    }
    40%{
        background-image: linear-gradient(rgb(130, 207, 217), rgb(89, 22, 22),blue);
    }
    45%{
        background-image: linear-gradient(yellow, rgb(144, 104, 104),rgb(67, 67, 113));
    }
    0%{
        background-image: linear-gradient(red, blue,yellow);
    }
}

b{
    font-size: 50px;
}

  img{
            margin-top:200px;
            height: 250PX;
     padding: 0;
           
        }
        table{
            color: aliceblue;
            font-size: 25px;
        }
table.th{
    margin-left: 150px;
    position: fixed;
}
.io{
    color: black;
    position: absolute;
    color: white;
    text-align: center;
    position:absolute;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}
.kl{
   
   
}
.fg{
    margin-left: 320px;
    color: black;
    position:absolute;
    color:white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.io:hover{
    color: blue;
   
}

.fg:hover{
    color: blue;
   
}
summary:hover{
    color: blue;
}

p{
 font-size: 30px;
 background-image: linear-gradient(rgb(220, 220, 12),rgb(183, 100, 100));
 color: rgb(11, 4, 4);
 z-index: 5;
 width: 250px;
 height:40px;
margin-left: 95px;
margin-top: 64px;
 position: absolute;
 text-align: center;
 border-radius: 10px;
 font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
summary{
  
    font-size: 35px;
    margin-left: 117px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: absolute;
    color: white;
}
marquee{
    margin-top:1200px;
    position: absolute;
   
}
form{
    margin-top: 950px;
   text-align: center;
    border: 1px solid black;
    background-color: palevioletred;
    width: 750px;
    height: 350px;
    margin-left: 120px;
}
input{
    font-size: 35px;
}
input:hover{
    border: 5px solid black;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-radius: 10px;
    text-align: center;
}
label{
    font-size: 55px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   
}

</style>
    <title>calculater</title>
</head>
<body>
    <nav> <ul> 
    <a href="index.html">  <li class="io">home</li></a>
      <details class="kl">
        <summary>aboute</summary>
     <a href="https://studentportal.silveroakuni.ac.in/">   <p> <i>student portal</i></p></a>
      </details>
      <li class="fg">facalty details</li>
        
         </ul> </nav>

        <br>
        <br>

         <br> <br>

         <br>






<div class="slider"></div> 
<h1>Login for go bca books.</h1>
  

   
    <form method="POST" action="#" autocomplete="off">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label> <input type="password" id="password" name="pwd" required> <br><br>
       <input type="submit" value="Login" class="btn" name="btn">
        <input type="reset" name="" id=""></div>
    </form>

 
<marquee behavior="" direction="right" SCROLLAMOUNT="25">
       ________________________________________________________
 <img src="school pic.gif" alt="">
  _________________________________________________________________
  </marquee>
  
</body>
</html>

<?php
if($_POST['btn'])
{
$l =$_POST['username'];
$p = $_POST['pwd'];

$u = "INSERT INTO books values('$l','$p')";

$data = mysqli_query($conn,$u);


if($data)
{
    echo "data inserted in database";
}
else{
    echo "fai";
}
}
?>