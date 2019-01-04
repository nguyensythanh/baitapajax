<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.4.2.js"></script>
 	<script type="text/javascript">
		  jQuery(document).ready(function(){
		   jQuery("#calculation").click(function(){
		    jQuery.ajax({
		     type:"GET",
		     url:"check.php",
		     data:"a="+jQuery("#txta").val()+"&b="+jQuery("#txtb").val()+"&c="+jQuery("#txtc").val(),
		     success:function(data){
		      jQuery("#result").html(data);
		     }
		    });
		   });
		  });
 	</script>
</head>
<body>
<div class="container">
    <div class="form-group">
      <label>number a:</label>
      <input type="text" class="form-control" id="txta">
    </div>
     <div class="form-group">
      <label>number b:</label>
      <input type="text" class="form-control" id="txtb">
    </div>
     <div class="form-group">
      <label>number c:</label>
      <input type="text" class="form-control" id="txtc">
    </div>
    <input type="button" id="calculation" class="btn btn-default" value="Calculation"></input>
<div id="result"></div>
</div>
</body>
</html>