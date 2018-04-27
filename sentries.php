<?php
if(session_start()){
	
}
else{
echo "<script>alert('Session failed!!');</script>";
echo "<script>window.location.href='home.php'</script>";
}
$keys=$_POST['keys']; 				
$query=$_POST['query']; 
$pno=$_POST['pno']; 

echo ' <button onclick="putRange();" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="background: #2e5cb8; float:right; margin-right:10px;">Search</button>';


$t=0;
for($i=0;$i<sizeof($keys);$i++)
{
 $k=$keys[$i];
$j=0;
foreach($query[$k] as $value){
$data[$j]=$value;
$j=$j+1;
} 	
$parts = explode(' ', $k);
if($parts[0]==$pno || $pno==0){
if($data[4]==1)	{
if($t%2==0 ){

echo '<div style=font-size:40px;position:absolute;margin-top:6%;margin-left:55%;">'.$parts[1]."&nbsp;".$parts[2]."&nbsp;".$parts[3]."&nbsp;".$parts[4]."&nbsp;".$parts[6][0].$parts[6][1].$parts[6][2].$parts[6][3]."<br><br><br>UserID:<br><br><br>".$parts[0].'</div>';


	echo '<div class="container left">

								    <div class="content"  >
								    
						 <div class="" style="font-size:20px;padding:40px;">';

echo "<b>Subject:</b><br>"."$data[5]"."<br><br><br>";
echo "<b>Description:</b><br>"."$data[0]"."<br><br><br>";
$_SESSION['sub'.$i]=$data[5];
$_SESSION['des'.$i]=$data[0];

echo ' 
						 </div>
						 <div class="mdl-card__actions mdl-card--border">
					 <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="document.getElementById'."('id012".$i."').style.display='block'".'">
						 View
						</button>
						
		<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onClick='."go($i)".'>
						Update Solution
						</button>';
echo '		 <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
	onclick="document.getElementById'."('id01".$i."').style.display='block'".'">
					  View Location
						 </button>
						 </div>
						</div>
						</div></div>';

 echo  '	<div id="id012'.$i.'" class="w3-modal w3-animate-opacity" >
      <div class="w3-modal-content w3-card-4" >
     <span onclick="document.getElementById'."('id012".$i."')".'.style.display'."='none'".'"
          class="w3-button w3-display-topright">&times;</span>
        <div class="w3-container style="margin-top=20%" >

 <img id="img1'.$i.'" src="3.jpg" style="width:100%" height:300px>

        </div>

      </div>
    </div><br><br>';

}
else
{


echo '<div style="font-size:40px;position:absolute;margin-top:6%;margin-left:5%;">'.$parts[1]."&nbsp;".$parts[2]."&nbsp;".$parts[3]."&nbsp;".$parts[4]."&nbsp;".$parts[6][0].$parts[6][1].$parts[6][2].$parts[6][3]."<br><br><br>UserID:<br><br><br>".$parts[0].'</div>';
echo '<div class="container right">
								    <div class="content"  >
								     
						 <div class="" style="font-size:20px;padding:40px;">';

echo "<b>Subject:</b><br>"."$data[5]"."<br><br><br>";
echo "<b>Description:</b><br>"."$data[0]"."<br><br><br>";
$_SESSION['sub'.$i]=$data[5];
$_SESSION['des'.$i]=$data[0];
echo ' 
						 </div>
						 <div class="mdl-card__actions mdl-card--border">
					 <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onclick="document.getElementById'."('id012".$i."').style.display='block'".'">
						 View Image
						</button>
		<button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" onClick='."go($i)".'>
						Update Solution
						</button>';
echo '		 <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" ';
echo	'onclick="document.getElementById';
echo	"('id01".$i."').style.display='block'";
echo	'" >
					  View Location
						 </button>
						 </div>
						</div>
						</div></div>';
	
 echo  '	<div id="id012'.$i.'" class="w3-modal w3-animate-opacity" >
      <div class="w3-modal-content w3-card-4" >
     <span onclick="document.getElementById'."('id012".$i."')".'.style.display'."='none'".'"
          class="w3-button w3-display-topright">&times;</span>
        <div class="w3-container style="margin-top=20%" >

 <img id="img1'.$i.'" src="3.jpg" style="width:100%" height:300px>

        </div>

      </div>
    </div><br><br>';
}
$t=$t+1;
}
}}
?>


<script type="text/javascript">







	function go(d) {
		
		window.location.href="solution.php?i=" +d;
	}

</script>
