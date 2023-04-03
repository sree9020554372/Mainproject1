

<?php
    date_default_timezone_set('Asia/Manila');
    require_once 'conn.php';
 
    if(isset($_POST['save'])){
        $c_id = $_POST['c_id'];
        $cid = $_POST['cid'];
        $vname = $_POST['vname'];
        $vdescription = $_POST['vdescription'];

        $file_name = $_FILES['video']['name'];
        $file_temp = $_FILES['video']['tmp_name'];
        $file_size = $_FILES['video']['size'];
 
        if($file_size < 50000000){
            $file = explode('.', $file_name);
            $end = end($file);
            $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
            if(in_array($end, $allowed_ext)){
                $name = date("Ymd").time();
                $location = 'video/'.$name.".".$end;
                if(move_uploaded_file($file_temp, $location)){
                    $query = "INSERT INTO `video` (`c_id`,`cid`, `vname`, `vdescription`, `name`, `location`,`status`) VALUES ('$c_id','$cid', '$vname', '$vdescription', '$name', '$location','active')";
                    $result = mysqli_query($conn, $query);
                    if($result) {
                        echo "<script>alert('Video Uploaded')</script>";
                        echo "<script>window.location = 'index.php'</script>";
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                }
            }else{
                echo "<script>alert('Wrong video format')</script>";
                echo "<script>window.location = 'index.php'</script>";
            }
        }else{
            echo "<script>alert('File too large to upload')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }
    }
?>
