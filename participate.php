<html>
<? include("header.php");
    
?>

<style>
.fat{
max-width: 55%;
padding: 15px;
align-self: center;
margin-left: auto;
margin-right: auto;}

h2{
padding-top:15px;
text-align:center;
}    

</style>
    <header>
    <h2>Participate and make yourself available to other study foxes.</h2>
    </header>
<body>
<form  method="POST" action="savecomment.php">
<div class="fat">
    <div class="form-group row">
	<label for "name-input" class="col-2 col-form-label">Name:</label>
	   <div class="col-10">
		<input class="form-control" type="text" id="name-input" name="name">
	   </div>
    </div>

    
    
    
    
    
    
    <div class="form-group row">
        
	   <label for "class-input" class="col-2 col-form-label">Class:</label>
            <div class="dropdown">
            <button class =" btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">Select a Class
                <span class="caret"></span></button>
      
                
                
        
        
        
                 <!-   This is where you will do the php stuff-->
                  <ul class="dropdown-menu">
                    <li><input type ="dropdown" name = "CS101"></li>
                    <li><input type ="dropdown" name = "CS201"></li>

 
        
        
                  </ul>
    </div>
	    
    </div>
    <div class="form-group row">
        <label for "email-input" class="col-2 col-form-label">Email:</label>
        <div class="col-10">
        <input class="form-control" type="email" id="email-input" name="email">
        </div>
    </div>
    <div class="form-group row">
        <label for "availability" class="col-2 col-form-label">Availability:</label>

        <div class="checkbox">
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value ="Monday">Monday</label>
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value ="Tuesday">Tuesday</label>
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value ="Wednesday">Wednesday</label>
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value ="Thursday">Thursday</label>
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value ="Friday">Friday</label>
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value="Saturday">Saturday</label>
            <label class="checkbox-inline"><input type="checkbox" name="checkbox" value = "Sunday">Sunday</label>
        </div>
    </div>
    <div class="form-group row">
        <label for "comment">Additional Comments:</label>
        <textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
        <div class="col-10">
        <input class="form-control" type="text" id="comment" name="comment">
        </div>
    </div>
    <div class ="form-group row">
        <input type="submit" class="btn btn-warning" value="Submit">
        
    </div>
</div>
</form>
</body>
<?php
    include("footer.php");
?>

</html>
