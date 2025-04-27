<?php
    require 'adminconfig.php';
    /* delete lesson */
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `student` WHERE st_id = $delete_id ") or die('query failed');
        if($delete_query){
           echo"
                         <script>
                             alert('student has been deleted!');
                             window.location.href='studenttable.php';
                         </script>
                         ";
        }else{
           echo"
                 <script>
                     alert('can,t delete!');
                     window.location.href='studenttable.php';
                 </script>
             ";
        };
     };
?>