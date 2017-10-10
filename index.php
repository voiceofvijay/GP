<html>
<head>
<title>Create Your Google+ ID Card</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="js/datepicker/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="css/sweetalert2.css" rel="stylesheet">
<link href="css/sweetalert2.min.css" rel="stylesheet">

<script src="js/jquery.min.js"></script>
<script src="js/datepicker/jquery-1.12.4.js"></script>
<script src="js/datepicker/jquery-ui.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/check.js"></script>
<script src="js/sweetalert2.js"></script>
<script src="js/sweetalert2.min.js"></script>
<link href="fonts/font.css" rel="stylesheet" type="text/css">
<style type="text/css">

.row {
	margin-right: 0px;
	margin-left: 0px;
}
form input.error, textarea.error {border: 0.5px solid #A94442 !important;}

form input.valid, textarea.valid, select.valid {border: 0.5px solid #9FC569 !important;}

span.has-error{
	font-size: 11px;
	color: #A94442;
	position: absolute;
}

.imagePreview {
    width: 160px;
    height: 200px;
    border: 1px solid gray;
    background-position: center center;
    background-size: cover;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: inline-block;
    text-align: center;
    margin: 10px 0px 10px 0px;
    text-align: center;
}
.header
{
	padding: 5px;
	text-align: center;
	margin-bottom: 25px;
	box-shadow: 0 2px 15px 0 rgba(0,0,0,0.9);
}

h2,h4 {
	margin: 10px;
	color:orange;
}


</style>
<style>
font-family: 'Open Sans', sans-serif;
</style>
</head>
<body>
<div class="col-md-8 col-sm-8 col-xs-12" id="print_ele">
	<div class="application_form" >
	     <h4 class="text-center">GOOGLE PLUS IDENTIFICATION CARD</h4>
		<form method="post" name="entryForm" id="entryForm" action="idgen.php" role="form" enctype="multipart/form-data" autocomplete="off">
			<div class="col-md-8 col-sm-8 col-xs-12">
				
				<div style="clear:both"></div>
				<div class="form-input-group">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="ps_dist">ID No</label>
					<div class="col-md-4 col-sm-8 col-xs-12">
						<input type="text" class="form-control" name="id" id="ps_dist" placeholder="ID Number" onblur="this.placeholder='ID Number'" onfocus="this.placeholder=''" aria-required="true" aria-describedby="ps_dist-error"><span id="ps_dist-error" class="has-error" style="display: none;"></span>
					</div>
				</div>
				<div style="clear:both"></div>
				<div class="form-input-group">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="model_no">Full Name</label>
					<div class="col-md-4 col-sm-8 col-xs-12">
						<input type="text" class="form-control" name="username" id="model_no" placeholder="Full Name" onblur="this.placeholder='Full Name'" onfocus="this.placeholder=''" aria-required="true" aria-describedby="model_no-error"><span id="model_no-error" class="has-error" style="display: none;"></span>
					</div>
				</div>
				<div style="clear:both"></div>
				<div class="form-input-group">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="chassis_no">Nick Name</label>
					<div class="col-md-4 col-sm-8 col-xs-12">
						<input type="text" class="form-control" name="nickname" id="chassis_no" placeholder="Nick Name" onblur="this.placeholder='Nick Name'" onfocus="this.placeholder=''" aria-required="true" aria-describedby="chassis_no-error"><span id="chassis_no-error" class="has-error" style="display: none;"></span>
					</div>
				</div>
				<div style="clear:both"></div>
				<div class="form-input-group">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="reg_no">Gender</label>
					<div class="col-md-4 col-sm-8 col-xs-12">
						<input type="text" class="form-control" name="gender" id="reg_no" placeholder="Gender Male/Female" onblur="this.placeholder='Gender Male/Female'" onfocus="this.placeholder=''" aria-required="true" aria-describedby="reg_no-error"><span id="reg_no-error" class="has-error" style="display: none;"></span>
					</div>
					
				</div>
				<div style="clear:both"></div>
				<div class="form-input-group">
					<label class="control-label col-md-4 col-sm-4 col-xs-12" for="date_of_detention">Date of Birth</label>
					<div class="col-md-4 col-sm-8 col-xs-12">
							<input type="text" class="form-control" name="dob" id="date_of_detention" placeholder="Enter Date of Birth" onblur="this.placeholder='Date of Birth'" onfocus="this.placeholder=''" aria-required="true" aria-describedby="date_of_detention-error" readonly><span id="date_of_detention-error" class="has-error" style="display: none;"></span>
					</div>
					<script>
					$(function() {
						$( "#date_of_detention" ).datepicker({
							changeMonth: true,
							changeYear: false,
							dateFormat:'yy-mm-dd'
						});
					});
				</script>
				</div>
				<div style="clear:both"></div>
					<div class="form-input-group">
						<label class="control-label col-md-4 col-sm-4 col-xs-12" for="officer_name_designation">Location</label>
						<div class="col-md-4 col-sm-8 col-xs-12">
							<input type="text" class="form-control" name="location" id="officer_name_designation" placeholder="Location" onblur="this.placeholder='Enter Seizing Officer Name & Designation'" onfocus="this.placeholder=''" aria-required="true" aria-describedby="officer_name_designation-error"><span id="officer_name_designation-error" class="has-error" style="display: none;"></span>
						</div>
					</div>
				<div style="clear:both"></div>
			</div>

			<div class="col-md-4 col-sm-4 col-xs-12">
				 <div class="form-input-group">
					<label class="control-label col-md-12 col-sm-12 col-xs-12"><div id="imagePreview" class="imagePreview">
                        <p style="margin:30px 10px;">Photo Upload</p></div></label>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<button type="button" class="btn btn-primary" onclick="fileId()"><i class="fa fa-upload"></i> Upload Photo</button><br><span id="imageerror"></span><span class="image-error"></span><!--<span id="dim" class="dim"></span><br /><span id="imageerror"></span><span id="msgs" style="font-size:12px;color:red;"></span><span id="photo-error" class="has-error" style="display: none;"></span>-->
						<input type="file" name="photo" id="photo" style="overflow:hidden; visibility:hidden; width: 10px;" aria-required="true" class="" aria-describedby="photo-error"> 
						
					</div>
					</div>
			</div> 

				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				
					<button type="submit" class="btn btn-danger" name="submit">Submit</button>
					<button type="reset" class="btn btn-warning" ng-click="resetFrom()" id="reset">Clear</button>
				</div>
		</form>
	</div>
</div>
<script type="text/javascript">
function fileId(){
document.getElementById("photo").click(); return false;
}
</script>
    
</body>
</html>



