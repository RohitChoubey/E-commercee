 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Lunch Box</title>
        <link rel="stylesheet" href="../css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/main.css">
		
		<style>
		*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="file"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],

textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
		</style>
		
	</head>
    <body>
	<?php include "header1.php" ?>
      <form action="chargerAction.php" method="post" enctype="multipart/form-data">
      
       <h1>Add Tiffen and Lunch Box</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
         
		  <label for="fimg"> Front View of Image:</label>
          <input type="file" id="fimg" name="fimg" required>
		   
		    <label for="bimg">Back View Image :</label>
            <input type="file" id="bimg" name="bimg" required>
		   
		 
		  <label for="productname">Product Name:</label>
          <input type="text" id="name" name="productname" required>
          
          <label for="title">Title:</label>
          <input type="text" id="text" name="title" required>
          
          <label for="price">Deal Price:</label>
          <input type="text"  name="price" required>
		  
		  <label for="price">MRP:</label>
          <input type="text"  name="mrprice" required>
		  
		  
		  <label for="price">Product Available</label>
          <input type="text"  name="stock" required>
		  
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Description, Warrenty, Specification etc.</legend>
          <label for="dis">Description</label>
          <textarea id="dis" name="dis"></textarea>
		  
		  <label for="sip">Specifications</label>
          <textarea id="sip" name="sip"></textarea>
		  
          <label for="war">Warrenty:</label>
          <input type="text"  name="war" required>
		  
        </fieldset>
        <fieldset>
        
         
        </fieldset>
        <button type="submit" name="submit" style="padding: 19px 39px 18px 39px;
	  color: #FFF;
	  background-color: #4bc970;
	  font-size: 18px;
	  text-align: center;
	  font-style: normal;
	  border-radius: 5px;
	  width: 100%;
	  border: 1px solid #3ac162;
	  border-width: 1px 1px 3px;
	  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
	  margin-bottom: 10px;">Submit Product</button>
      </form>
      
    </body>
</html>
<?php include "../footer.php";  ?>