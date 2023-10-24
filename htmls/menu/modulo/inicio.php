
<rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="httpslink ://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br/>
<br/>
<style>
   *{
    margin: 0;
    
    box-sizing: border-box;
}
body{
    background-color: black;
}
.slider{
    position: fixed;    
    margin-top: -50px;
  width: 100%;
  overflow: hidden;
}
.slider ul{
    display: flex;
    animation: cambio 30s infinite alternate linear;
    width: 400%;
}
.slider li{
    width: 100%;
    list-style: none;
}
.slider img{
    width: 100%;
    height: 700px;
}
@keyframes cambio{
    0%{margin-left: 0;}
    20%{margin-left: 0;}
    
    25%{margin-left: -100%;}
    45%{margin-left: -100%;}
    
    50%{margin-left: -200%;}
    70%{margin-left: -200%;}
    
    75%{margin-left: -300%;}
    100%{margin-left: -300%;}
}
@media only screen and (min-width:320px) and (max-width:768px){
.slider, .slider ul, .slider img{
    height: 100vh;
}
}
</style>
<div class="slider">
    <ul>
        <li>
            <img src="http://localhost/zonas/htmls/img/slider.png">
        </li>
        <li>
            <img src="http://localhost/zonas/htmls/img/slider1.png">
        </li>
        <li>
            <img src="http://localhost/zonas/htmls/img/slider2.png">
        </li>
        <li>
            <img src="http://localhost/zonas/htmls/img/slider3.png">
        </li>
    </ul>
</div>