<?php
if(isset($_POST['id_alumni']))
{
    $id_alumni = alumni($con, $_POST['id']);

    $query = "DELETE FROM alumni WHERE alumni id_alumni=$id_alumni";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}
?>