<?php
    
//--------------------------------------------------
if(isset($_POST['submit']))
{
$id = isset($_POST['id']) ? htmlentities($_POST['id']) : "123456789000000";

$username = isset($_POST['username']) ? htmlentities($_POST['username']) : "Vijay Kumar T"; 
$gender = isset($_POST['gender']) ? htmlentities($_POST['gender']) : "Male"; 
$dob = isset($_POST['dob']) ? htmlentities($_POST['dob']) : "09/08/1993"; 
$location = isset($_POST['location']) ? htmlentities($_POST['location']) : "Kanipakam"; 
$nickname = isset($_POST['nickname']) ? htmlentities($_POST['nickname']) : "voiceofvijay"; 
$photo_tmp = isset($_POST['photo']) ? htmlentities($_POST['photo']) : "sunil.jpg"; 

$photo_tmp = $_FILES["photo"]["tmp_name"];
	//$photo_name = $_FILES["photo"]["name"];
	//$photo_type = $_FILES["photo"]["type"];

	
//--------------------------------------------------
 
# Destination Folder Name
$idDir = 'gcards/'; 
 
# Facebook standared id card image template
$gplusTemplate_img = 'id_bg_red.png';
 
# Fonts - Download from http://www.google.com/webfonts
$font ="fonts/Roboto/Roboto-Medium.ttf";
$headfont ="fonts/Roboto/Roboto-Bold.ttf";
 
	
	# Google+ user id
	$gid = $id;
	
	# Profile Photo
	//$gp_user_profile= 'http://plus.google.com/voiceofviajy';
	//$qrcode='<img src="https://chart.googleapis.com/chart?chs=120x120&cht=qr&chl=12345">';
	//$gp_user_profile= $qrcode;
	
	# Google User Name
	
    	$gp_user_name      	= $username;
	
	# Gender
    	$gp_user_gender    	= $gender;
	
	# Locale
    	$gp_user_locale		= $location;
	
	# Birthday ( mm/dd/yyyy)
    	$gp_user_birth     	= $dob;
    
	# Birthday d-M format
    	$gp_birthdate = date($gp_user_birth);
    	$sort_birthdate = strtotime($gp_birthdate);
    	$for_birthdate = date('d M Y', $sort_birthdate);
    
	# Disclaimer msg
	$gplus_disclaimer 	= $nickname;
	
	# Address
	//$address 	= 'Central Hindu Boys School ';
    
	
	#Download user profile image
		
	//$Profile_pic= 'hand.jpg';	
    $Profile_pic= $photo_tmp;
    //$width = 160;
	//$height= 200;
	
	# gplus Template - PNG file format
	$gplusTemplate = imagecreatefrompng($gplusTemplate_img); 
	
	# Profile image stored in ID Card folder - jpg file format
	//$gplusProfileImage = imagecreatefromjpeg($idDir.$gid.'.jpg'); 
	//$gplusProfileImage = imagecreatefromjpeg($Profile_pic); 
    
	# Profile Image Resize
	
	//$image_gp = imagecreatefromjpeg($Profile_pic); 
	//$image_gp = imagecreatetruecolor(100,150);
	/* list($width_orig, $height_orig) = getimagesize($Profile_pic);
	
	$ratio_orig = $width_orig/$height_orig;
	if ($width/$height > $ratio_orig) {
   $width = $height*$ratio_orig;
} else {
   $height = $width/$ratio_orig;
}
	
		
	$image_gp = imagecreatetruecolor($width,$height);
	
	$gplusProfileImage = imagecreatefromjpeg($Profile_pic); 
	
	
	//imagecopyresampled($image_gp, $gplusProfileImage , 0, 0, 0, 0, 100, 150, $width_orig, $height_orig);
	imagecopyresampled($image_gp, $gplusProfileImage , 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
		//$image_gp = imagecreatefromjpeg($Profile_pic);
	*/
    //$image_gp = imagecreatetruecolor($width,$height);
    
    if(trim($Profile_pic!=""))
{
  $imgi = getimagesize($Profile_pic);
  if($imgi[0]>0)
  {
      if($imgi[2]==1)
      {
        $av = imagecreatefromgif($Profile_pic);
        imagecopyresized($av, $av,0,0,0,0,160,200,$imgi[0], $imgi[1]);
      }else if($imgi[2]==2)
      {
        $av = imagecreatefromjpeg($Profile_pic);
        imagecopyresized($av,$av,0,0,0,0,160,200,$imgi[0], $imgi[1]);
      }else if($imgi[2]==3)
      {
        $av = imagecreatefrompng($Profile_pic);
        imagecopyresized($av,$av,0,0,0,0,160,200,$imgi[0], $imgi[1]);
      }

  }

    
   
    
	# Profile Image merge with Template image
   	imagealphablending($gplusTemplate, true); 
   	imagesavealpha($gplusTemplate, true);
	imagecopymerge($gplusTemplate, $av, 25, 150, 0, 0, 150, 180, 100);  # profile image merge with gplus Template
	//imagecopymerge($gplusTemplate, $image_gp, 20, 80, 0, 0, 100, 120, 100);
 
  
 
	#Text color Theme
    	$Google_blue = imagecolorallocate($gplusTemplate, 81, 103, 147); // Create blue color
    	$Google_grey = imagecolorallocate($gplusTemplate, 74, 74, 74); // Create grey color
		$Google_white = imagecolorallocate($gplusTemplate, 255, 255, 255); // Create white color
		
    
	imagealphablending($gplusTemplate, true);    
		
    	# Embed informations to gplus ID Card	
    	//imagettftext($gplusTemplate, 12, 0, 15, 107, $Google_grey, $headfont, $gp_user_name); // Name
		imagettftext($gplusTemplate, 20, 0, 235, 195, $Google_grey, $headfont, $gp_user_name); // Name
    	imagettftext($gplusTemplate, 16, 0, 535, 105, $Google_white , $font, $gid); // ID    
    	imagettftext($gplusTemplate, 18, 0, 235, 329, $Google_grey, $font, $gp_user_gender); //Gender
    	imagettftext($gplusTemplate, 18, 0, 235, 400, $Google_grey, $font, $for_birthdate); //dob
    	imagettftext($gplusTemplate, 18, 0, 360, 329, $Google_grey, $font, $gp_user_locale); //Locale
    	//imagettftext($gplusTemplate, 10, 0, 15, 219, $Google_grey, $font, $gp_user_profile); //Profile link
    	imagettftext($gplusTemplate, 18, 0, 235, 260, $Google_blue, $font, $gplus_disclaimer); //message
	}
        
	# gplus ID Card save into idDir folder	
    	//$final_gp=imagepng($gplusTemplate, $idDir.'id_'.$gid.'.jpg');
		//$final_gp=imagepng($gplusTemplate,'id_'.$gid.'.jpg');
		$save = 'gcards/'.str_replace(" ","_",'id_'.$gid).'.png';
		
    
    
    
	imagepng($gplusTemplate,$save);
	imagedestroy($gplusTemplate);
	//header("Location: ".$save);
	
	
	//output image to browser
	header ('Content-Type: image/png');
	header ("Location:".$save);
	imagepng($save);
	
		
	
	# Redirect to HTML Page
	// echo("<script> top.location.href='http://buyphp.org/DEMOS/2015/googleidcard/".$myFile."'</script>");

 }
 
?>