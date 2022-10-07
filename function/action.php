<?php 
    include "connect.php";
    
        // register student
        if(isset($_POST['action']) && $_POST['action'] == "register"){
            $fiile_photo = rand(1000, 100000) . "-" . $_FILES['photo']['name'];
            $file_card = rand(1000, 100000) . "-" . $_FILES['photo_card_number']['name'];
            $file_address = rand(1000, 100000) . "-" . $_FILES['photo_address']['name'];
            $file_result = rand(1000, 100000) . "-" . $_FILES['photo_result']['name'];

            $allowed =  array('gif','png' ,'jpg');
            $fiile_photo = $_FILES['photo']['name'];
            $file_card = $_FILES['photo_card_number']['name'];
            $file_address = $_FILES['photo_address']['name'];
            $file_result = $_FILES['photo_result']['name'];
            $ext = pathinfo($fiile_photo, PATHINFO_EXTENSION);
            $ext2 = pathinfo($file_card, PATHINFO_EXTENSION);
            $ext3 = pathinfo($file_address, PATHINFO_EXTENSION);
            $ext4 = pathinfo($file_result, PATHINFO_EXTENSION);
            if(!in_array($ext,$allowed) || !in_array($ext2,$allowed) || !in_array($ext3,$allowed) || !in_array($ext4,$allowed) ) {
                echo 'error';
                exit();
            }else{
                $sql = "INSERT INTO `student`(`fname`, `lname`, `date`, `card_number`, `fname_eng`, `lname_eng`, `group_blood`, `ethnicity`, `nationalilty`, `cult`, `disease`, `weight`, `height`, `number_phone`, `email`, `address`, `year`, `lavel`, `department`, `photo`, `photo_card_number`, `photo_address`, `photo_result`) 
                        VALUES ('$_POST[fname]','$_POST[lname]','$_POST[date]','$_POST[card_number]','$_POST[fname_eng]','$_POST[lname_eng]','$_POST[group_blood]','$_POST[ethnicity]','$_POST[nationality]','$_POST[cult]','$_POST[disease]','$_POST[weight]','$_POST[height]','$_POST[phone_number]','$_POST[email]','$_POST[address]','$_POST[year]','$_POST[lavel]','$_POST[department]','$fiile_photo','$file_card','$file_address','$file_result')";
                $query = mysqli_query($con,$sql);
                if($query){
                    $location = 'upload/';
                    move_uploaded_file($_FILES['photo']["tmp_name"],$location.$fiile_photo);
                    move_uploaded_file($_FILES['photo_card_number']["tmp_name"],$location.$file_card);
                    move_uploaded_file($_FILES['photo_address']["tmp_name"],$location.$file_address);
                    move_uploaded_file($_FILES['photo_result']["tmp_name"],$location.$file_result);
                    echo 'yes';
                    exit();
                }else{
                    echo 'no';
                }
            }

        }
