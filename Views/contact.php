<style>



    body{
    background-image: url("/jazmin-personal/Views/img/piqsels.com-id-sxvpr.jpg");
    background-size: 100%;
    background-attachment: fixed;
    margin-bottom: 3%;
}
    




#logo {height: 80px; margin-left: 20px;}

.wrapper {

    padding: 50px 50px;
    max-width: 1200px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10%;
}

/* .right {float: right !important;}
/* Image zoom on hover + Overlay colour */

.parent {
    background-color: white;
    width: 19%;
    margin: 20px;
    height: 200px;
    border: 1px solid blue;
    overflow: hidden;
    position: relative;
    display: inline-block;
    cursor: pointer;
    /*border-radius: 60px; */
    border: 1px solid black;
}

.child {
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
    
}

/* Several different images */
.bg-one {
  background-image: url("/jazmin-personal/Views/img/inn.png");

  }
.bg-two {
    background-color: black;
    background-image: url("/jazmin-personal/Views/img/phone.png");}
.bg-three {
    background-color: black;
    background-image:    url("/jazmin-personal/Views/img/gh.png");
    }
    
.bg-four {
    background: -moz-linear-gradient(left, blue,red,orange,blue, green);
    background: -webkit-linear-gradient(left,blue,red,orange,blue, green);
    background: -ms-linear-gradient(left,blue,red,orange,blue, green);
    background: -o-linear-gradient(left,blue,red,orange,blue, green);
    background: linear-gradient(to right,blue,red,orange,blue, green);
    /*background-image: url("/jazmin-personal/Views/img/gmail.png");*/
    background-repeat: no-repeat;
}
.bg-five {
    background-color: white;
    background-image:    url("/jazmin-personal/Views/img/bgcontact.png");
    background-size: 200px;
    }


.imageContact{
    display: none;
    font-size: 35px;
    color: #ffffff !important;
    font-family: sans-serif;
    text-align: center;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    height: 50px;
    cursor: pointer;
    /*text-decoration: none;*/
}

.parent:hover .child, .parent:focus .child {
    -ms-transform: scale(1.2);
    -moz-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    -o-transform: scale(1.2);
    transform: scale(1.2);
}

.parent:hover .child:before, .parent:focus .child:before {
    display: block;
}

.parent:hover a, .parent:focus a {
    display: block;
}

.child:before {
    content: "";
    display: none;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-color: black;
    opacity: 0.5;
}

/* Media Queries */
@media screen and (max-width: 960px) {
    .parent {width: 40%; margin: 20px 0px}
    .wrapper {padding: 20px 20px;}
}

.right{
    margin-bottom: -20%;
}
.left{
    margin-bottom: -20%;
}

.margin-contact{
  width: 500px;
  height: 500px;
  padding: 10px;
}

</style>

<div class="wrapper ">
  <div class="parent " onclick="">
    <div class="child bg-one">
      <a class="imageContact"  href="https://www.linkedin.com/in/jazm%C3%ADn-briasco-181ba4103/" target="_blank">LinkedIn</a>
    </div>

  </div>
  <div class="parent  " onclick="">
    <div class="child bg-two">
      <a class="imageContact" href="https://telegram.me/JaaBris" target="_blank">Direct</a>
    </div>
  </div>

  <div class="parent " onclick="">
    <div class="child bg-three">
      <a class="imageContact" href="https://github.com/JazminBriasco" target="_blank">GitHub</a>
    </div>
  </div>

  <div class="parent " onclick="">
    <div class="child bg-four">
      <a class="imageContact" href="mailto:briascojazmin@gmail.com" >Gmail</a>
    </div>
  </div>
</div>