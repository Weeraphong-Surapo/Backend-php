<?php
    include "connect.php";

        // // register student
        if(isset($_POST['action']) && $_POST['action'] == "register"){
            $fiile_photo  = rand(1000, 100000) . "-" . $_FILES['photo']['name'][0];
            $file_card    = rand(1000, 100000) . "-" . $_FILES['photo']['name'][1];
            $file_address = rand(1000, 100000) . "-" . $_FILES['photo']['name'][2];
            $file_result  = rand(1000, 100000) . "-" . $_FILES['photo']['name'][3];

            $allowed            =  array('gif','png' ,'jpg');
            $fiile_photo_check  = $_FILES['photo']['name'][0];
            $file_card_check    = $_FILES['photo']['name'][1];
            $file_address_check = $_FILES['photo']['name'][2];
            $file_result_check  = $_FILES['photo']['name'][3];
            $ext  = pathinfo($fiile_photo_check, PATHINFO_EXTENSION);
            $ext2 = pathinfo($file_card_check, PATHINFO_EXTENSION);
            $ext3 = pathinfo($file_address_check, PATHINFO_EXTENSION);
            $ext4 = pathinfo($file_result_check, PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed) || !in_array($ext2,$allowed) || !in_array($ext3,$allowed) || !in_array($ext4,$allowed) ) {
                echo 'error';
                exit();
            }else{
                $sql = "INSERT INTO `student`(`fname`, `lname`, `date`, `card_number`, `fname_eng`, `lname_eng`, `group_blood`, `ethnicity`, `nationalilty`, `cult`, `disease`, `weight`, `height`, `number_phone`, `email`, `address`, `year`, `lavel`, `department`, `photo`, `photo_card_number`, `photo_address`, `photo_result`) 
                        VALUES ('$_POST[fname]','$_POST[lname]','$_POST[date]','$_POST[card_number]','$_POST[fname_eng]','$_POST[lname_eng]','$_POST[group_blood]','$_POST[ethnicity]','$_POST[nationality]','$_POST[cult]','$_POST[disease]','$_POST[weight]','$_POST[height]','$_POST[phone_number]','$_POST[email]','$_POST[address]','$_POST[year]','$_POST[lavel]','$_POST[department]','$fiile_photo','$file_card','$file_address','$file_result')";
                $query = mysqli_query($con,$sql);
                if($query){
                    $location = 'upload/';
                    move_uploaded_file($_FILES['photo']['name'][0],$location.$fiile_photo);
                    move_uploaded_file($_FILES['photo']['name'][1],$location.$file_card);
                    move_uploaded_file($_FILES['photo']['name'][2],$location.$file_address);
                    move_uploaded_file($_FILES['photo']['name'][3],$location.$file_result);
                    echo 'yes';
                    exit();
                }else{
                    echo 'no';
                    echo $sql;
                }
            }
        }
  
        // insert lavel
        if(isset($_POST['action']) && $_POST['action'] == 'insertLavel'){
            $name  = $_POST['name'];
            $lavel = $_POST['lavel'];
            $sql   = "INSERT INTO tb_lavel(name,lavel) VALUES('$name','$lavel')";
            $query = mysqli_query($con,$sql);
            if($query){
                echo 'success';
            }else{
                echo 'error';
            }
        }

        //delete lavel
        if(isset($_POST['action']) && $_POST['action'] == 'deletelavel'){
            $id = $_POST['id'];
            $sql = "DELETE FROM tb_lavel WHERE id = $id";
            $query = mysqli_query($con,$sql);
            if($query){
                echo 'delete';
            }else{
                echo 'delete_fail';
            }
        }
?>