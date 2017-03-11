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
<form action="savecomment.php" method="post">
<div class="fat">
    <div class="form-group row">
	<label for "name-input" class="col-2 col-form-label">Name:</label>
	   <div class="col-10">
		<input class="form-control" type="text" id="name-input" name="name">
	   </div>
    </div>
    <div class="form-group row">
	   <label for "class-input" class="col-2 col-form-label">Class:</label>
	   <div class="col-10">
		<input class="form-control" type="text" id="class-input" name="class">
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
            <label class="checkbox-inline"><input type="checkbox" name="monday">Monday</label>
            <label class="checkbox-inline"><input type="checkbox" name="tuesday">Tuesday</label>
            <label class="checkbox-inline"><input type="checkbox" name="wednesday">Wednesday</label>
            <label class="checkbox-inline"><input type="checkbox" name="thursday">Thursday</label>
            <label class="checkbox-inline"><input type="checkbox" name="friday">Friday</label>
            <label class="checkbox-inline"><input type="checkbox" name="saturday">Saturday</label>
            <label class="checkbox-inline"><input type="checkbox" name="sunday">Sunday</label>
        </div>
    </div>
    <div class="form-group row">
        <label for "comment">Additional Comments:</label>
        <textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
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
