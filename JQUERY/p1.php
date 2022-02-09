<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<input type="text" id="name"><br><br>
	<span id="para1">welcome  </span>
	<span id="para2"></span><br><br>
	<button id="btn">Print</button>


	<p>Welcome to the world of Jquery.</p>
	<!-- <button class="btn">HIDE PARAGRAPH</button> -->
	<input type="button" class="btn" value="hide">

	<br>
	<a href="#">Read more</a><br>

	<font style="display: none;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo laborum iusto, suscipit non at esse laudantium minima repellat earum sunt ex vero incidunt perferendis sequi veritatis sapiente quidem harum iure.
	Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt vel veniam quidem laborum repellendus hic, ea, explicabo quam quo, cumque eveniet accusamus perferendis. Nam, suscipit. Harum sint nostrum similique soluta incidunt et tempore aperiam, hic repellat minima dolorem iusto totam. Inventore, omnis hic deserunt sit id, asperiores ratione non saepe.</font>

<br><br>
	<button id="slide">Click to Slide</button>
	<div class="filp">Hello World</div>










	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script>
		$(document).ready(function(){

			$("#btn").click(function(){

				var msg = $("#name").val();

				$("#para2").text(msg).css("color", "red");

				$("#name").val("");

			});


			$(".btn").click(function(){

				
				var v = $(".btn").val();
				if (v=="hide") {
					$("p").hide();
					$(".btn").val("Show");
				}
				if (v=="Show") {
					$("p").show();
					$(".btn").val("hide");
				}

			});

			$("a").click(function(){

				// $("font").css("display", "block");
				$("font").show();

			});


		});
		
	</script>	
</body>
</html>