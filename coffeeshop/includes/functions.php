<?php
function echoHr(){
    echo "<hr>";
}
function printNumbers($numbers=array()){
    if( !empty($numbers) ){
        foreach($numbers as $col){
            echo implode(', ', $col)."\r\n";
        }
    }
}
function messageNumbers($numbers=array()){
    $result = '';
    if( !empty($numbers) ){
        foreach($numbers as $col){
            $result .= implode(', ', $col)."\r\n";
        }
    }
    return $result;
}

function sendMail($to, $message, $from = 'info@mysite.com', $subject = 'тото комбинации'){
    //$to = $email;
    //$from = 'info@mysite.com';
    //$subject = 'тото комбинации';
    $message = wordwrap($message, 70, "\r\n");
    $headers = 'From:'.trim($from)."\n";
    $headers .= 'Reply-To:'.trim($from)."\n";
    $headers .= 'MIME-Version: 1.0'."\n";
    $headers .= 'Content-type: text/html; charset=UTF-8'."\n";
    @mail($to, $subject, $message, $headers);
}

function cleanInput($data) {		//функция, която връща подадените данни без риск
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function createCsrfToken(){
    $result = '';
    $result = md5('gf765sd'.time().'2*345@#');
    return $result;
}

function incrementWrongLogins(){
    if( !isset($_SESSION['wrong_logins']) ){
        $_SESSION['wrong_logins'] = 0;
    }
    $_SESSION['wrong_logins']++;
}
function getPages($id=0){
    $res = array();
    $sql_req = "";
    if( $id > 0 ){
        $sql_req = " AND id={$id} ";
    }
    if( empty($GLOBALS['SQL']) ){
        require_once 'db.php';
    }else{
        $conn = $GLOBALS['SQL'];
    }
    $sql = "SELECT * FROM `pages` WHERE 1=1 ". $sql_req ." ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    if( !empty($result) ){
        $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if( $id > 0 ){
            $res = $res[0];
        }
    }else{
        die('Query error');
    }
    return $res;
}
function getFiles($path="../assets/images"){
	$path = str_replace("/","\\",$path);
    $res = array();
    $res = array_diff(scandir($path), array('.', '..'));
    return $res;
}


