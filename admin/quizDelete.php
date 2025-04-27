<?php
    require 'adminconfig.php';
    /* delete lesson */
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `quizz` WHERE qid = $delete_id ") or die('query failed');
        if($delete_query){
           echo"
                         <script>
                             alert('lesson has been deleted!');
                             window.location.href='lessonView.php';
                         </script>
                         ";
        }else{
           echo"
                 <script>
                     alert('can,t delete!');
                     window.location.href='lessonView.php';
                 </script>
             ";
        };
     }; 

     /*if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `q` WHERE id = $delete_id ") or die('query failed');
        if($delete_query){
           echo"
                         <script>
                             alert('lesson has been deleted!');
                             window.location.href='lessonView.php';
                         </script>
                         ";
        }else{
           echo"
                 <script>
                     alert('can,t delete!');
                     window.location.href='lessonView.php';
                 </script>
             ";
        };
     }; 

     if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_query = mysqli_query($conn, "DELETE FROM `a` WHERE id = $delete_id ") or die('query failed');
        if($delete_query){
           echo"
                         <script>
                             alert('lesson has been deleted!');
                             window.location.href='lessonView.php';
                         </script>
                         ";
        }else{
           echo"
                 <script>
                     alert('can,t delete!');
                     window.location.href='lessonView.php';
                 </script>
             ";
        };
     };*/
?>