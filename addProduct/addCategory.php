<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 

    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		$name = mysqli_real_escape_string($db, $_POST['productname']);
		
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into category (image, name, uploaded) VALUES ('$imgContent','$name', NOW())"); 
			
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }
		else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>
 <style>
 body{
        padding-top:4.2rem;
		padding-bottom:4.2rem;
		background:rgba(0, 0, 0, 0.76);
        }
        a{
         text-decoration:none !important;
         }
         h1,h2,h3{
         font-family: 'Kaushan Script', cursive;
         }
        .myform{
			position: relative;
			display: -ms-flexbox;
			display: flex;
			padding: 1rem;
			-ms-flex-direction: column;
			flex-direction: column;
			width: 100%;
			pointer-events: auto;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid rgba(0,0,0,.2);
			border-radius: 1.1rem;
			outline: 0;
			max-width: 500px;
		}
        .tx-tfm{
			text-transform:uppercase;
        }
        .mybtn{
			border-radius:50px;
        }
        
         .login-or {
         position: relative;
         color: #aaa;
         margin-top: 10px;
         margin-bottom: 10px;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .span-or {
         display: block;
         position: absolute;
         left: 50%;
         top: -2px;
         margin-left: -25px;
         background-color: #fff;
         width: 50px;
         text-align: center;
         }
         .hr-or {
         height: 1px;
         margin-top: 0px !important;
         margin-bottom: 0px !important;
         }
         .google {
         color:#666;
         width:100%;
         height:40px;
         text-align:center;
         outline:none;
         border: 1px solid lightgrey;
         }
          form .error {
         color: #ff0000;
         }
         #second{display:none;}
	</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Name of the Product</label>
                              <input type="text" name="productname"  class="form-control"   placeholder="Enter Product Name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Image</label>
                              <input type="file" name="image"  class="form-control"  placeholder="Enter ">
                           </div>                          
                           <div class="col-md-12 text-center ">
                              <button  name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                           
                        </form>
                 
				</div>
			</div>
	    </div>
	</div>
</div>   
	<script>
		$("#signup").click(function() {
		$("#first").fadeOut("fast", function() {
		$("#second").fadeIn("fast");
		});
		});

		$("#signin").click(function() {
		$("#second").fadeOut("fast", function() {
		$("#first").fadeIn("fast");
		});
		});


		  
				 $(function() {
				   $("form[name='login']").validate({
					 rules: {
					   
					   email: {
						 required: true,
						 email: true
					   },
					   password: {
						 required: true,
						 
					   }
					 },
					  messages: {
					   email: "Please enter a valid email address",
					  
					   password: {
						 required: "Please enter password",
						
					   }
					   
					 },
					 submitHandler: function(form) {
					   form.submit();
					 }
				   });
				 });
				 


		$(function() {
		  
		  $("form[name='registration']").validate({
			rules: {
			  firstname: "required",
			  lastname: "required",
			  email: {
				required: true,
				email: true
			  },
			  password: {
				required: true,
				minlength: 5
			  }
			},
			
			messages: {
			  firstname: "Please enter your firstname",
			  lastname: "Please enter your lastname",
			  password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			  },
			  email: "Please enter a valid email address"
			},
		  
			submitHandler: function(form) {
			  form.submit();
			}
		  });
		});
	</script>         
</body>
