<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "html://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="//style.css">
<title>Trắc nghiệm tính cách</title>
</head>
<body>
<?php 
    require_once 'function-a.php';
    require_once 'function-b.php';
    
    $newArr = array();
    
    foreach($arrQuestions as $key => $value){
        $newArr[$key]["question"] = $value["question"];
        $newArr[$key]["sentences"] = $arrOptions[$key];
    }
?>
	<div class="content">
		<h1>Trắc nghiệm tính cách</h1>
		<form action="result.php" method="POST">
		<?php 
		  $i = 1;
		  foreach ($newArr as $key => $value){
		      echo '<div class= "question">';
		      echo '<p><span>Câu hỏi '. $i .' : </span>'.$value["question"].'</p>';
		      echo '<ul>';
		      foreach ($value["sentences"] as $keyC => $valueC){
		          echo '<li><label><input type= "radio" name ="'.$key.'" value ="'.$valueC["point"].'">'.$valueC["option"].'</label></li>';
		          
		      }
		      echo '</ul>';
		      
		      $i++;
		      
		  }
		
		?>
		
			<input type="submit" value="KiÃªÌ‰m tra" name="submit"></input>
		</form>
	</div>

</body>
</html>