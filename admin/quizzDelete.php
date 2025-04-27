<?php
    require 'adminconfig.php';  

    /* delete lesson */
    if(isset($_GET['deleteid'])){
        $delete_id = $_GET['deleteid']; 
        echo $delete_id;
        $delete_query= mysqli_query($conn, "DELETE FROM `quizz` WHERE qid = '$delete_id' ") or die('query failed');
        $delete_query= mysqli_query($conn, "DELETE FROM `q` WHERE qid = '$delete_id'") or die('query failed');
        if($delete_query){
           echo"
                         <script>
                             alert('quizz has been deleted!');
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