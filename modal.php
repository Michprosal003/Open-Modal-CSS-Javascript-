<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
</head>
<body>




<button id="myBtn">Open Modal</button>


<div id="myModal" class="modal">


<div class="modal-content">
<span class="close">&times;</span>

<img src="imagenes/logo.png" class="avatar" alt="avatar">

<div class="college">
<input class="input" type="text" name="Usuario" placeholder="Usuario">
</div>


<div class="college">
<input class="input" type="password" name="Clave" placeholder="Clave">
</div>


<button class="btn" name="submit">Confirmar</button>
</div>


</div>
</div>




<script>


var modal=document.getElementById("myModal");

var btn=document.getElementById("myBtn");

var span= document.getElementsByClassName("close")[0];

btn.onclick= function() {

modal.style.display="block";



}


span.onclick=function() {

modal.style.display="none";



}


window.onclick= function(event ){
if(event.target == modal) {

modal.style.display="none";

}

}



</script>






<style>


.modal{
display: none;
position: fixed;
z-index: 1;
padding-top: 100px;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: dimgray;
background-image: url("imagenes/college.jpg");
background-repeat: no-repeat;
background-size: cover;

}



.modal-content {
background-color: darkred;
margin: auto;
padding: 20px;
border: 1px solid #888;
width: 40%;
text-align: center;



}




.close {
color: #aaaaaa;
float: right;
font-size: 28px;
font-weight: bold;


}







.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}






.college {
display: flex;
width: 100%;
margin-bottom: 15px;




}



.input {
padding: 15px;
width: 100%;
outline: none;

}




.btn {
background-color: black;
border: 1px solid darkred;
color: white;
cursor: pointer;
padding: 15px 20px;
width: 100%;
opacity: 0.9;


}



img.avatar {
width: 35%;
border-radius: 50%;
padding: 15px;





}














</style>

























    
</body>
</html>