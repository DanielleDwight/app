
<?php 
// Include the header.php file using its absolute path
include realpath(__DIR__ . '/app/layout/header.php');
?>

<div class="top">+

		<h3 class="text2">Pet Shop App</h3>

		
		<div class="inputs">

		<label  class="mail" for="email">Email
		</label>
		<br>
		<input class="e" type="text" id="email" name="Email" placeholder="Email">

		<label  class="pass" for="password">Password
		</label>
		<br>
		<input class="p" type="password" id="password" name="Password" placeholder="Password">

		<label class="checkbox">show pass:</label>
		<input class="check" type="checkbox" onclick="myFunction()" style="position: absolute;">

    <h6 class="or">-------------------------------OR-----------------------------------</h6>

		

		</div>
		<button class="log">Login</button>
		<button class="button">
  <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" class="svg">
  <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" class="blue"></path>
  <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" class="green"></path>
  <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" class="yellow"></path>
  <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" class="red"></path>
</svg>
<span class="text">Continue with Google</span>
</button>

	</div>
	<style>
		input{
			font-size: 30px;
		}


		@import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Kavoon&display=swap');
		h3{
			text-align: center;
			 font-family: "Julius Sans One", serif;
  			font-weight: 50px;
 			font-style: normal;

		}

		body{
			height: 100vh;
      width: 100vw;
      background-image: url("public/img/dogey.jpg") ;
      background-position: bottom;
      background-repeat: no-repeat;
      background-size: cover;
			overflow: hidden;
		}

		.top{
			height: 40vh;
			width: 50vw;
    transform: translate(50px,50px);
			background-color: grey;
		}

		.text2{
			transform: translate(5px,-10px);
			font-size: 50px;
		}
		.mail{
			text-align: center;
			transform: translate(-140px,-250px);

		}
		.pass{
			text-align: center;
			transform: translate(-235px,-70px);

		}

		.e{
			width: 500px;
			height: 50px;
			position: absolute;
			transform: translate(-10px,-200px);
			border-radius: 10px;
		}
		.p{
			width: 500px;
			height: 50px;
			position: absolute;
			transform: translate(-10px,-18px);
			border-radius: 10px;
		}

		.inputs{
			height: 60vh;
			width: 30vw;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 40px;
			box-sizing: border-box;
      
		}
		.checkbox{
			position: absolute;
			transform: translate(-20px,50px);
		}


		.check{
			height: 50px;
			width: 50px;
			transform: translate(100px,50px);
		}

		.log{
			width:100px ;
			height:50px ;
			position: absolute;
			transform: translate(630px,-630px);
			border-radius: 80px;
			font-size: 25px;
		}

    .or{
      position: absolute;
      transform: translate(-10px,350px);
    }

.button {
  padding: 10px;
  font-weight: bold;
  display: flex;
  position: relative;
  overflow: hidden;
  border-radius: 35px;
  align-items: center;
  border: solid black 2px;
  outline: none;
}

.svg {
  height: 65px;
  margin-right: 10px;
}

.button .text {
  z-index: 10;
  font-size: 25px;
}

.button:hover .text {
  animation: text forwards 0.3s;
  /*color: white;*/
}

@keyframes text {
  from {
    color: black;
  }

  to {
    color: white;
  }
}

.svg {
  z-index: 6;
}

.button:hover::before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 9%;
  transform: translate(-50%, -50%);
  width: 0;
  height: 0;
  opacity: 0;
  border-radius: 300px;
  animation: wave1 2.5s ease-in-out forwards;
}

.button:hover::after {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 9%;
  transform: translate(-50%, -50%);
  width: 0;
  height: 0;
  opacity: 0;
  border-radius: 300px;
  animation: wave2 2.5s ease-in-out forwards;
}

@keyframes wave1 {
  0% {
    z-index: 1;
    background: #EB4335;
    width: 0;
    height: 0;
    opacity: 1;
  }

  1% {
    z-index: 1;
    background: #EB4335;
    width: 0;
    height: 0;
    opacity: 1;
  }

  25% {
    z-index: 1;
    background: #EB4335;
    width: 800px;
    height: 800px;
    opacity: 1;
  }

  26% {
    z-index: 3;
    background: #34A853;
    width: 0;
    height: 0;
    opacity: 1;
  }

  50% {
    z-index: 3;
    background: #34A853;
    width: 800px;
    height: 800px;
    opacity: 1;
  }

  70% {
    z-index: 3;
    background: #34A853;
    width: 800px;
    height: 800px;
    opacity: 1;
  }

  100% {
    z-index: 3;
    background: #34A853;
    width: 800px;
    height: 800px;
    opacity: 1;
  }
}

@keyframes wave2 {
  0% {
    z-index: 2;
    background: #FBBC05;
    width: 0;
    height: 0;
    opacity: 1;
  }

  11% {
    z-index: 2;
    background: #FBBC05;
    width: 0;
    height: 0;
    opacity: 1;
  }

  35% {
    z-index: 2;
    background: #FBBC05;
    width: 800px;
    height: 800px;
    opacity: 1;
  }

  39% {
    z-index: 2;
    background: #FBBC05;
    width: 800px;
    height: 800px;
    opacity: 1;
  }

  40% {
    z-index: 4;
    background: #4285F4;
    width: 0;
    height: 0;
    opacity: 1;
  }

  64% {
    z-index: 4;
    background: #4285F4;
    width: 800px;
    height: 800px;
    opacity: 1;
  }

  100% {
    z-index: 4;
    background: #4285F4;
    width: 800px;
    height: 800px;
    opacity: 1;
  }
}

.button:hover .red {
  animation: disappear 0.1s forwards;
  animation-delay: 0.1s;
}

.button:hover .yellow {
  animation: disappear 0.1s forwards;
  animation-delay: 0.3s;
}

.button:hover .green {
  animation: disappear 0.1s forwards;
  animation-delay: 0.7s;
}

.button:hover .blue {
  animation: disappear 0.1s forwards;
  animation-delay: 1.1s;
}

@keyframes disappear {
  from {
    filter: brightness(1);
  }

  to {
    filter: brightness(100);
  }
}
.button{
	transform: translate(320px,-100px);
	width: 30vw;
	height: 10%;
	text-align: 20px;

}


	</style>

	<script>
function myFunction() {
  var password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}
</script>



<?php 
// Include the footer.php file using its absolute path
include realpath(__DIR__ . '/app/layout/footer.php');
?>