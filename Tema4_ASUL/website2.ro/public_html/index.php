<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Website2</title>
	<style>
		.all{
			display: flex;
			flex-direction:column;
			justify-content:center;
			align-items:center;
			height:100vh;
		}
		.subs{
			display: flex;
			

		}
		.pars{
            width: 150px;
		}
		.df{
			display: flex;
		}
		
		.post{
		
			border:1px solid black;
			padding:10px;
			margin-left:10px;
		}
		.get{
			margin-left:10px;
			border:1px solid black;
			padding:10px;
		}
       .subm2{
	width: 100%;
	display: flex;
	justify-content:center;
	align-items:center;
         }
      .mb{
	margin-bottom:5%;
        }
		.upload{
			margin:10px;
		}
		
	</style>
  </head>
  <body>

     <div class="all">
		 <div class="subs">
        <div class="get">
            <form action="action_get.php" method="GET">
				<div class="np df mb">
               <div class="pars ">
				   Nume si prenume:
			   </div>
			   <input type="text" name="name" id="name">
			   </div>

			   <div class="adr df mb">
                <div class="pars ">
				   Adresa:
	            </div>
			   <input type="text" name="adresa" id="adresa">
			   </div>

			   <div class="pas df mb">
               <div class="pars ">
				   Password:
			   </div>
			   <input type="password" name="pass" id="pass">
			   </div>
			   <div class="subm2">
			   <button type="submit" class="subm">Submit cu GET</button>
			   </div>



			</form>

		</div>


		<div class="post">
            <form action="action_post.php" method="POST">
				<div class="ag df mb">
               <div class="pars ">
				   Varsta:
			   </div>
			   <input type="text" name="age" id="age">
			   </div>

			   <div class="fac df mb">
               <div class="pars ">
				   Facultate:
			   </div>
			   <input type="text" name="fac" id="fac">
			   </div>

			   <div class="tel df mb">
               <div class="pars ">
				   Telefon:
			   </div>
			   <input type="text" name="tel" id="tel">
			   </div>
			   <div class="subm2">
			   <button type="submit" class="subm">Submit cu POST</button>
			   </div>



			</form>

		</div>

		</div>

		<div class="upload">
    	<form name="uploadForm" method="POST" action="action_upload.php" enctype="multipart/form-data" >
	  <div class="upl">
	    <label for="inputFile">File Input</label>
	    <input type="file" name="input" class="forms" id="input">
	  </div>
	  <div class="subm2">
	  <button type="submit" name="submit" class="submu">Submit FILE</button>
	  </div>	
	
	</form>
    </div>




	 </div>




  </body>
</html>
