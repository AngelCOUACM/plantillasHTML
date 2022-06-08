<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="
	width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="stylos.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>Document</title>
</head>
<body>
	
	<h1>Search Box</h1>

	<div class="box">
		
		<i class="fa fa-search" aria-hidden="true"></i>

		<input type="text" name="search-box" id="search-box" placeholder="Search Box..." class="form-control">

		<div id="result"></div>

	</div>		

</body>
</html>

<script>
	
	$(document).ready(function(){
		
		load_data();

		function load_data(query){

			$.ajax({

				url: "fetch.php",
				method: "post",
				data: {query:query},
				success: function(data){
					console.log("data", data);

					$('#result').html(data);

				}

			});

		}

		$('#search-box').keyup(function(){

			var search = $(this).val();

			if(search != ''){
				load_data(search);
			}else{
				load_data();
			}

		});

	});

</script>