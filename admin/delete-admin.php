<?php 
    include('../config/constant.php');
    //STEP1. Get the id of the admin to be deleted 

     $id=$_GET['id'];
    

    //STEP2. Create SQL querey to delete Admin 

    $sql="DELETE FROM tbl_admin WHERE id= $id";
    //Execute the query
    $res= mysqli_query($conn, $sql); 
    // check the query is exicuted successfully or not;
    if($res==true){
        //echo"Admin deleted successfully"; 
        //Create session vaiable to display message 
        $_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";
        //Redirect to manage-admin.php
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else{
        //echo"Failed to delete admin";
        $_SESSION['delete']="<div class='error'>Failed to Delete Admin. Try again letter :)</div>";
        header("location:".SITEURL.'admin/manage-admin.php');
    }

    //STEP3.Redirect to manage admin page with message (success or error)

?>
