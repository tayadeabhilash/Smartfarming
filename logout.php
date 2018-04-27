<?php

echo "<script>firebase.auth().signOut().then(function(){window.location='index.html';}).catch(function(error) {window.alert('Error : ' + errorMessage);});</script>";


?>
