<!DOCTYPE html>
<html>
<head>
	<title>Edit Trips</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        input{
            margin-bottom: .5rem;
            border-radius: 5px;
        }
        body{
            background: url(images/addcat.jpg) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /*background-size: 100% 100%;*/
            /*background-repeat: no-repeat;*/
        }
       .container{
            background-color: #ffffffad;
        }
       
        </style>
        
</head>
<body>

		<?php
        
		
         echo"<div class='col-10 col-md-8 col-lg-6 container p-4 my-5 mx-auto'>
        <h1 class='display-6 mb-3 text-center'><b>Add Category</b></h1>
        <form action='' method='post' enctype='multipart/form-data' onsubmit= 'validate(this,event)'>

        <form action='' method='post' >
        
        Category Name: <input type= 'text'  class='form-control' name= 'Category_Name'>
        Category Image: <input type='file' class='form-control' name='Category_Img' id='Category_Img' >
       
</div>
         <div style='text-align:center'><input type='submit' class='btn btn-primary px-5 mt-4' name='submit' value='Save'>
        <input type='button' class='btn btn-outline-dark px-5 ms-3 mt-4' onclick='history.back();' value='Cancel'></div>

        </form>
        </div>";
        
		?>
		
	
  
</body>
</html>