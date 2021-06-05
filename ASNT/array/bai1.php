<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bài 1</title>
<style type="text/css">
    *{
    	margin: 0px;
    	padding: 0px;
    }
    .content {
    	width: 500px;
    	padding:10px;
    	border: 2px solid #ddd;
    	height: auto;
    	margin: 10px auto;
    	
    }
</style>
</head>
<body>
	<div class="content">
	<?php 
	   $group = array("1" => "Admin", "2"=> "Manager", "3" => "Member", "4" => "Guest");
	   $city = array("ct"=> "Cần Thơ", "tg"=> "Tiền Giang", "bl"=>"Bạc Liêu");
	   
	   function createSelectbox($name, $attributes, $array, $keySelect){
	       $xhtml = "";
	       if(!empty($array)){
	           $xhtml .= '<select name="'.$name.'" id = "'.$name.'" style= "'.$attributes.'">';
	           foreach ($array as $key => $value){
	               if($key == $keySelect) {
	                   $xhtml .= '<option value="'.$key.'" selected="selected"> '.$value.' </option>';
	               }else{
	                   
	                   $xhtml .= '<option value="'.$key.'"> '.$value.' </option>';
	               }
	           }
	           $xhtml .= '</select>';
	       }
	       return $xhtml;
	       
	   }
	   $groupSelect = createSelectbox("group", "width:200px", $group,4);
	   $citySelect = createSelectbox("city", "width:300px", $city, "tg");
	   
	   echo $groupSelect. "<br/>" . $citySelect;
	 
	?>
	
	
	</div>
</body>
</html>