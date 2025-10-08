<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $erros = array();

    if (empty($nama)) {
        $erros[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $erros[] = "Email harus diisi.";
        
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }
    
    if (empty($errors)) {
        foreach ($errors as $error){
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikrim: Nama =$nama, Email = $email";
    }
}
?>