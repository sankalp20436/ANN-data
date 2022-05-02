<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anaaj</title>
  <style>
    body {
      background-image: url("photo-1560493676-04071c5f467b.jpg");
      background-size: cover;

    }

    #one {
      display: inline;
      font-family: 'Times New Roman', Times, serif;
      color: white;
      font-size: xx-large;
      font-weight: bold;
      text-align: center;
      border-bottom: solid;
      /*animation-name: example;
            animation-duration: 10s;
            animation-iteration-count: infinite;*/
    }

    /*@keyframes example {
            from {background-color: rgba(32, 101, 204, 0.3);}
            to {background-color: rgba(32, 101, 204, 0.6);}
        } */

    #yes {

      display: inline;
      width: 25%;
      height: 250px;
      border: hidden;
      background-color: beige;
    }

    #two {
      font-family: 'Times New Roman', Times, serif;
      color: white;
      font-size: xx-large;
      position: relative;
      top: 0%;
      font-weight: bold;
      text-align: center;
      border-bottom: solid;

    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: rgba(32, 204, 118, 0.3);
    }

    li {
      float: left;
    }

    li a,
    .dropbtn {
      display: block;
      color: yellow;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }

    .active {
      background-color: #04AA6D;
    }

    li.dropdown {
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: rgba(0, 0, 0, 0.2);

      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: white;

      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      border: solid yellow;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    #aaa {
      animation-name: munna;
      animation-duration: 0.5s;
      animation-iteration-count: infinite;
    }

    @keyframes munna {
      from {
        background-color: rgba(32, 101, 204, 0.3);

      }

      to {
        background-color: purple;

      }

    }

    .flip-card {
      position: relative;
      top: 65px;
      left: 150px;
      background-color: transparent;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      width: 300px;
      height: 300px;
      perspective: 1000px;
    }

    .flip-card1 {
      position: absolute;
      top: 250px;
      left: 550px;

      background-color: transparent;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      width: 300px;
      height: 300px;
      perspective: 1000px;
    }

    .flip-card2 {
      position: absolute;
      top: 250px;
      left: 940px;

      background-color: transparent;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      width: 300px;
      height: 300px;
      perspective: 1000px;
    }

    /* .flip-card3 {
      position: absolute;
      top: 250px;
      left: 1260px;

      background-color: transparent;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      width: 300px;
      height: 300px;
      perspective: 1000px;
    } */

    /*.flip-card1 {
            position:absolute;

            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
          }*/

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }

    .flip-card-inner1 {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }

    .flip-card-inner2 {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }

    .flip-card-inner3 {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.6s;
      transform-style: preserve-3d;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    .flip-card1:hover .flip-card-inner1 {
      transform: rotateY(180deg);
    }

    .flip-card2:hover .flip-card-inner2 {
      transform: rotateY(180deg);
    }

    /* .flip-card3:hover .flip-card-inner3 {
      transform: rotateY(180deg);
    } */

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front1,
    .flip-card-back1 {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front2,
    .flip-card-back2 {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front3,
    .flip-card-back3 {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .flip-card-front {
      background-color: #bbb;
      color: black;

    }

    .flip-card-front1 {
      background-color: #bbb;
      color: black;

    }

    .flip-card-front2 {
      background-color: #bbb;
      color: black;

    }

    .flip-card-front3 {
      background-color: #bbb;
      color: black;

    }

    .flip-card-back {
      background-color: #2980b9;
      color: white;

      transform: rotateY(180deg);
    }

    .flip-card-back1 {
      background-color: #2980b9;
      color: white;
      transform: rotateY(180deg);
    }

    .flip-card-back2 {
      background-color: #2980b9;
      color: white;
      transform: rotateY(180deg);
    }

    .flip-card-back3 {
      background-color: #2980b9;
      color: white;
      transform: rotateY(180deg);
    }

    .sau {
      font-size: larger;
    }

    .sau a {
      text-decoration: none;

    }

    .sau :hover {
      color: yellow;
    }
  </style>
</head>

<body>
  <header id="one">
    <p><img src="images.jpg"></p>





  </header>
  <!--<ul>
    <li><a class="active" href="#">Home</a></li>
    <li><a href="#">Episodes</a></li>-->
    <!--<li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Help</a>-->
      <!--<div class="dropdown-content">
              <a href="#">e1</a>
              <a href="https://www.instagram.com/p/CXd7xHvLM4D/" target="_blank">Episode 2</a>
              <a href="https://www.instagram.com/p/CYCdJQMo8F7/" target="_blank">Episode 3</a>
            </div>
    </li>

    <li id="aaa"><a href="#">NEW!!</a></li>
    <li><a href="href=" mailto:srijanpandey0104@gmail.com" target="_blank">Contact</a></li>
    <li style="float:right"><a class="active" href="#">Login</a></li>

  </ul>-->
  <hr>
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="msp3.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back">
        <h1>MSP</h1>
        <p>Minimum Support Price</p>
        <p class="sau"><a href="MSP.php">Tap to know the latest MSP issued by the govt.</a></p>
      </div>
    </div>
  </div>

  <div class="flip-card1">
    <div class="flip-card-inner1">
      <div class="flip-card-front1">
        <img src="msp2.jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back1">
        <h1>SCHEMES</h1>
        <p>Active Government Schemes</p>
        <p class="sau"><a href="schemes.php">Click here to get a detailed information about the schemes.</a></p>
      </div>
    </div>
  </div>
  <div class="flip-card2">
    <div class="flip-card-inner2">
      <div class="flip-card-front2">
        <img src="download (2).jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back2">
        <h1>Tech-Update</h1>
        <p>Latest Innovations</p>
        <p class="sau"><a href="techupdate.php">Explore the latest innovations in the field of agriculture and increase the
            productivity.</a></p>
      </div>
    </div>
  </div>
  <!-- <div class="flip-card3">
    <div class="flip-card-inner3">
      <div class="flip-card-front3">
        <img src="download (3).jpg" alt="Avatar" style="width:300px;height:300px;">
      </div>
      <div class="flip-card-back3">
        <h1>SELL HERE</h1>
        <p>Make an entry</p>
        <p class="sau"><a href="../uploadProduct.php">Enter the details of crop you want to sell.</a></p>
      </div>
    </div>
  </div> -->
  <!--<footer id="two">
        "Let's do it in the way ants do"
    </footer>-->
</body>

</html>
