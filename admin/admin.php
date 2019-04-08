<?php
$pageName="Mount Comfort Admin";
$favicon="../images/favicon.jpg";
$styles ="../css/styles.css";
if(empty($_POST['usernameEnter'])&& empty($_POST['passwordEnter'])){


    $usernameEnter=NULL;
    $passwordEnter=NUll;
}else{
    $usernameEnter = $_POST['usernameEnter'];
    $passwordEnter = $_POST['passwordEnter'];
}
Include "adminHeader.php";
?>

<?php
$username ="Koen";
$password = "Rogers11";


// Include "loginForm.php";
// if($_POST['usernameEnter']!= NUll && $_POST['passwordEnter']!=NULL){
//     if($_POST['usernameEnter'] == $username && $_POST['passwordEnter'] == $password){
//         include "editEvents.php";
//     }
//     else{

//     }
// }
if($usernameEnter == NULL && $passwordEnter == NULL){
    include "loginForm.php";
}
elseif($usernameEnter!= NUll && $passwordEnter!=NULL){
    if($usernameEnter == $username && $passwordEnter == $password){
        
        include "editEvents.php";
    }
    elseif(1==1){

    }

}
?>

</div>


<? Include "./view/adminFooter.php"?>