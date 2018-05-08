<?php
    $root = "../";
    include $root."includes/php/initial.php";
    include $root."includes/php/classUtama.php";
    $db = new classUtama(ADMIN_SESSION_NAME);
    $db->mysql_connect();

    $id = $_POST["id"];
    //validasi-validasi
    if(strlen($_POST["nama_sekolah"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Sekolah harus diisi.")));
    } else {
        $sekolah = $db->getFieldValue("sekolah", array("COUNT(*) AS TOTAL"), array("id" => $_POST["id_sekolah"]));
        if($sekolah[0]["TOTAL"]==0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Nama sekolah tidak terdaftar.")));
        }
    }
    
    if(strlen($_POST["kode"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Kode jurusan harus diisi.")));
    } else {
        $data = $db->getFieldValue("jurusan", array("COUNT(*) AS TOTAL"), array("kode" => $_POST["kode"]), array(), 0, 0, "", "id<>'$id'");
        if($data[0]["TOTAL"]>0) {
            $db->mysql_close();
            die(json_encode(array("success" => false, "message" => "Kode jurusan sudah terpakai.")));
        }
    }
    
    if(strlen($_POST["nama"])==0) {
        $db->mysql_close();
        die(json_encode(array("success" => false, "message" => "Nama jurusan harus diisi.")));
    }
    
    $_POST["user_update"]  = $_SESSION[ADMIN_SESSION_NAME]["user"]["id"];
    $_POST["date_update"]  = date("Y-m-d H:i:s");
    unset($_POST["nama_sekolah"]);
    $db->mysql_update("jurusan", $_POST, array("id" => $id));
    $_SESSION["alert_success"] = "Edit data jurusan berhasil.";
    $db->mysql_close();
    die(json_encode(array("success" => true)));