 
 <?php
if(session_start()){
  
}
else{
echo "<script>alert('Session failed!!');</script>";
echo "<script>window.location.href='home.php'</script>";
}
 ?>
 <!DOCTYPE html>
<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
				<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
				  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="dashboard.css">
				<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
				<script src="https://unpkg.com/sweetalert2@7.15.1/dist/sweetalert2.all.js"></script>


<script src="jquery.js"></script>
				<script>
   firebase.initializeApp({
  apiKey: "AIzaSyAwZiNLW9NCrCnNYIXVEgTuAv1mhJQeixU",                             // Auth / General Use
  authDomain: "smartfarming-17b55.firebaseapp.com",         // Auth with popup/redirect
  databaseURL: "https://smartfarming-17b55.firebaseio.com", // Realtime Database
  storageBucket: "smartfarming-17b55.appspot.com",          // Storage
  messagingSenderId: "983679682083"                  // Cloud Messaging
});

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
  

  } else {
    window.location.href='index.html';
  }
});

   function logOut(){
              swal({
                title: 'Are you sure?',
                text: "Are you sure you want to LogOut???",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!'
              }).then((result) => {
                if(result.value!=null){
              $('#hide').load('logout.php',{});}
            })
            }
   	</script>
     <style>
.demo-card-square.mdl-card {
  width: 30%;
  height: 80%;
  position: absolute;
  margin-left: 35%;
  padding: 5%;
  top: 5%;
margin-bottom: 35%;
}
.demo-card-square > .mdl-card__title {
  color:  #00004d;

  <!-- background: -->
    <!--url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC; -->
}

.mdl-card{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;font-size:16px;font-weight:400;min-height:520px;weight:600px;overflow:hidden;width:330px;z-index:1;position:relative;background:#fff;border-radius:2px;box-sizing:border-box;margin-bottom: 35%;padding-bottom:20%}

</style>

		</head>

		<body>
				<div id="hide"></div>
				<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" >
  					<header class="mdl-layout__header" style="background-color:  #2e5cb8;">
    					<div class="mdl-layout__header-row" >
      						<!-- Title -->
      						<span class="mdl-layout-title">Smart Farming<span>

    					</div>
    					<!-- Tabs -->
    					<div class="mdl-layout__tab-bar " style="background-color: #132639;">
<div class="mdl-layout-spacer"></div>
    						<a href="dashboardForService.html" class="mdl-layout__tab" >Dashboard</a>
    						<div class="mdl-layout-spacer"></div>
      					
      						<button style="background: #132639;cursor: pointer;" onclick="logOut()" class="mdl-layout__tab">Logout</button>
    					</div>
				  </header>
				  
<main class="mdl-layout__content" style="background-color:#dee0e5;">

						  <div class="page-content">
						  	  <div class="demo-card-square mdl-card mdl-shadow--2dp" margin-top:'30%' >

          <div class="mdl-card__title">
             <h2 class="mdl-card__title-text" >Give Solution</h2>

           </div>
						  	 <form action="" method="post" id="rform">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
              <input class="mdl-textfield__input" type="text" id="subject" required style="" value="<?php $i=$_GET['i'];echo $_SESSION['sub'.$i] ?>" readonly>
              <label class="mdl-textfield__label" for="subject" color:'#808080' >Subject:</label>
            </div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
              <input class="mdl-textfield__input" type="text" id="description" required style="" readonly value="<?php echo $_SESSION['des'.$i] ?>">
              <label class="mdl-textfield__label" for="description" color:'#808080' >Description:</label>
            </div>
           
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
              <textarea  class="mdl-textfield__input" type="textarea" id="solution"></textarea>
              <label class="mdl-textfield__label" for="solution" color:'#808080' >Solution</label>
            </div>

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
              <textarea  class="mdl-textfield__input" type="textarea" id="references" placeholder="Add multiple references seperated by a space"></textarea>
              <label class="mdl-textfield__label" for="references" color:'#808080' >References</label>
            </div>
   
        <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"  value="Submit" >
  
        </form>
 
</div>
</div>

  </main>


		</body>
<script type="text/javascript">
  



  document.getElementById('rform').addEventListener('submit',submitForm);

  function submitForm(e){
    e.preventDefault();


var solution=document.getElementById('solution').value;
var ref=document.getElementById('references').value;
if(ref=="")
  ref="None";
savedata(solution,ref);

swal({
  title: 'Saving',
  text: 'Please Wait',
  timer: 5000,
  onOpen: () => {
    swal.showLoading()
  }
}).then((result) => {
  if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.timer
  ) {
    window.location.href="dashboardForService.html"
  }
});


  }




function savedata(solution,ref){

 var refe = firebase.database().ref('queries'); 
        refe.on('value',gotData);
         function gotData(data)
   {
          var ids = data.val();
          var keys = Object.keys(ids);
           var i = <?php echo $i;?>;

         firebase.database().ref('queries/'+keys[i]).update({
    ref:ref,
    solution:solution,
    solved:1
  });
}
   
  
}

</script>>
</html>