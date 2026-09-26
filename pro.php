<?php


// $_POST[
//     "usernamr" => "esraa",
//     "password"=> "12345",
//     "email"=> "esraa1234@gmail.com",
// ];



function clean($data)
{
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}



$name = "";
$pass = "";
$email = "";
$error = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean($_POST["name"] ?? "");
    $pass = clean($_POST["pas"] ?? "");
    $email = clean($_POST["email"] ?? "");
} 
elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = clean($_GET["name"] ?? "");
    $pass = clean($_GET["pas"] ?? "");
    $email = clean($_GET["email"] ?? "");
}
else {
    echo "invalid";
    exit;
}

if (strlen($name) < 8) {
    $error[] = "the name requair be more 7";
}

if (strlen($pass) < 8) {
    $error[] = "the password requair be more 7";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error[] = "invailed email";
}

if (count($error) > 0) {
    foreach ($error as $err) {
        echo "the error is " . $err . "<br>";
    }
    exit;
}



require_once "./dbconfing.php";

$stmt = $conn ->prepare("INSERT INTO `users`(`name`, `email`, `pass`) VALUES (`?`,`?`,`?`)");

$stmt-> bind_param("sss",$name,$email,$pas);
$stmt->execute();


























// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = clean($_POST["name"] ?? "");
//     $pass = clean($_POST["password"] ?? "");
//     $email = clean($_POST["email"] ?? "");
// } 
// elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
//     $name = clean($_GET["name"] ?? "");
//     $pass = clean($_GET["password"] ?? "");
//     $email = clean($_GET["email"] ?? "");

//     } else {
//     $name = "";
//     $pass = "";
//     $email = "";
//     echo "invalid";
// }
// echo $name












?>