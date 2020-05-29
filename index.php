<!DOCTYPE html>
<html>
<head>
    
<style>
*{
	margin:0;
	padding: 0;
	text-decoration: none;

}
body{
	
	font-family: sans-serif;
	
	
}
.container{
	width: 100%;
	height: 100%;
	background: #42455a; 
}
.menu ul {
	display: inline-flex;
	margin:50px;
	align-items: center;

}


.menu ul li {
	list-style: none;
	margin:0 20px;
	color: #b2b1b1;
	cursor: pointer;

}

.logo img{
	width: 30px;
	margin-top: -7px;
	margin-right: 48px;

}
.signup{
	top: 50px;
	right:80px;
	position: absolute;
	text-decoration: none;
	color:#fff;
	border: 2px solid transparent;
	border-radius: 20px;
	background-image: linear-gradient(#42455a,#42455a), radial-gradient(circle at top left, #fd00da,#19d7f8);
	background-origin: border-box;
	background-clip: content-box,border-box;
	

}
.signup span{
	display: block;
	padding: 8px 22px;

}

.container1 {
  display: flex;
  text-align: center;
  margin: auto;
  overflow: hidden;
  
}

.box1 img{
  width:500px;
  
}
.box2 img{
  width:300px;
 
  
}
.box3 img{
  width:400px;
 
  padding-top: 40px;
}


.text{
	display: block;
	padding-top: 60px;
	font-size: 60px;
	font-style:italic; 
   text-align: center;
   margin: auto;
   overflow: hidden;
  
}
.current{
	color: white;
	
}
.box1{
flex: 0.5;
}
.box2{
	flex: 0.25;
}
.box3{
	flex: 0.5;
}
footer {
	background: #42455a;
	height: 150px;
	

}
footer{
display: flex;
font-size: 100%;
align-items: center;
padding-left: 400px;

}
.footer-copyright{
	flex: 0.5;
	color: black;
}
.footer-link{
	flex: 0.5;
	color: black;
}
.footer-about{
	flex: 0.5;
	color: black;
}

footer ul li{
	list-style: none;


}
footer a:-webkit-any-link{
	color: black;
}

nav a:-webkit-any-link{
	color:black;
}
nav{
	background: gray;
	padding-left: 70px;
}
nav ul {
	display: inline-flex;
}
nav ul li{
	list-style: none;
	margin:0 20px;
}
</style>




	<title>Web</title>
	
        
</head>
<body>

	<header>
    <div class="container">
    	<div class="menu">
    		<ul>
                    <li class="logo"><img src="./Img/img/T.jpg"></li>
    			<li> <a href="index.html"class="current">Home</a></li>
    			<li class="cart"><a href="cart.html" target="blank"><img src="./img/cart.png"></a></li>
                <li><form>
          <input type="email" placeholder="Enter ...">
          <button type="submit" class="button_1">Search</button>
        </form></li>
    			<li><a href="Login.html" target="blank" class="signup"><span>Sign Up</span></a></li>
                
    		</ul>
    	</div>
    	</div>
     </div>
    </header>
    <nav>
        <ul>
        <li class="Iphone">
        <a href="Iphone.html"target="blank">Iphone</a> 
        </li>
       <li class="Applewatch">
        <a href="Applewatch.html"target="blank">Apple Watch</a> 
       </li> 
      <li class="MacBook"><a href="MacBook.html"target="blank">MacBook</a> 
        </li>
        </ul>
    </nav>		
    

    	
    		<div class="container1">
    	<div class="box1">
    		<a href="MacBook.html"target="blank">
    		<img src=".Img/img/laptop.png">
    		</a>
    		<h3>MacBook</h3>
    		
    	</div>
    	<div class="box2">
    		<a href="Iphone.html"target="blank">
    		<img src=".Img/img/iphone.png" >
    		</a>
    		<h3>Iphone</h3>
    		
    	</div>
    	<div class="box3">
    		<a href="Applewatch.html"target="blank">
    		<img src=".Img/img/watch.png" >
    		</a>
    		<h3>Apple Watch</h3>
    		
    	</div>
    </div>
       
        <section class="text">
        	<h1>Welcome to T shop</h1>
           </section>
        <footer>
        	<div class="footer-copyright">
        		<ul>
        			<li>@copyright</li>
        			<li>Taile</li>
        			<li>GCD191010</li>
        		</ul>
        	</div>
        	<div class="footer-link"> 
        		<ul>
        			<li><a href="https://www.facebook.com/">Facebook</a></li>
        			<li><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox">Gmail</a></li>
        			<li><a href="https://www.instagram.com/">Instagram</a></li>
        		</ul>
        	</div>
        	<div class="footer-about"> 
                <ul>
                    <li>From Da Nang city</li>
                    <li>Greenwich University</li>
                    <li>GCD0705</li>
                </ul>
            </div>
            </footer>

   


</body>
</html>
