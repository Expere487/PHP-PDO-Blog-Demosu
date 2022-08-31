<?php
session_start();
include "inc/conn.php";
/* silme işlemleri */

if (isset($_GET["islem"]) || isset($_GET["id"])) {
    $islem = $_GET["islem"];

    $Id = $_GET["id"];
    /* post sil*/
    if ($islem == "postSil") {
        $postDelete = $con->prepare("DELETE FROM post WHERE postId = ?");
        $postDelete->bindParam(1, $Id, PDO::PARAM_INT);
        $postDelete->execute();
        if ($postDelete->rowCount() > 0) {
            header("Location:posts.php?durum=ok");
        } else {
            header("Location:posts.php?durum=no");
        }
    }
    /* post sil */

    /* kategori sil */

    if ($islem == "catSil") {
        $postDelete = $con->prepare("DELETE FROM category WHERE catId = ?");
        $postDelete->bindParam(1, $Id, PDO::PARAM_INT);
        $postDelete->execute();
        if ($postDelete->rowCount() > 0) {
            header("Location:category.php?durum=ok");
        } else {
            header("Location:category.php?durum=no");
        }
    }
    /* kategori sil */

    /* user sil*/

    if ($islem == "userSil") {
        $postDelete = $con->prepare("DELETE FROM users WHERE userId = ?");
        $postDelete->bindParam(1, $Id, PDO::PARAM_INT);
        $postDelete->execute();
        if ($postDelete->rowCount() > 0) {
            header("Location:users.php?durum=ok");
        } else {
            header("Location:users.php?durum=no");
        }
    }
    if ($islem == "roleSil") {
        $postDelete = $con->prepare("DELETE FROM role WHERE roleId = ?");
        $postDelete->bindParam(1, $Id, PDO::PARAM_INT);
        $postDelete->execute();
        if ($postDelete->rowCount() > 0) {
            header("Location:roles.php?durum=ok");
        } else {
            header("Location:roles.php?durum=no");
        }
    }

    if ($islem == "logout") {
        session_destroy();
        header("Location:../admin.php");
    }
    
}




/* Giriş Yap */

if (isset($_POST["username"]) && isset($_POST["pass"])) {
    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $role=$_POST["role"];

    $login = $con->prepare("select * from users where username= :username AND userPass= :pass AND userRole= :role");
    $login->execute(
        array(
            'username' => $username,
            'pass' => $pass,
            'role' => $role
        )
    );

    if ($login->rowCount() > 0) {
        header("Location:index.php?durum=ok");
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $role;
        
    } else {
        header("Location:../admin.php?durum=no");
    }
}
/* giriş yap*/

/* haber ekle*/

if(isset($_GET["Npost"])){
    $title=$_GET["title"];
    $sum=$_GET["summary"];
    $content=$_GET["content"];
    $authorId=$_GET["authorId"];
    $category=$_GET["category"];
    $date=$_GET["publish"];

  //  echo "Başlık ".$title." "."Özet ".$sum." "."İçerik ".$content." "."Yazar ".$authorId." "."Kategori ".$category." "."Tarih ".$date;
    $query="insert into post (postTitle,postSummary,postContent,postAuthor,postDate,postCat) values (?,?,?,?,?,?)";
    $addCat=$con->prepare($query);
    $addCat->execute(
        array($title,$sum,$content,$authorId,$date,$category)
    );
    if($addCat){
        header("Location:posts.php?durum=eklendi");
    }
}

/* kategori ekle */

if(isset($_GET["Ncat"])){
    $title=$_GET["catName"];
    $sum=$_GET["catSum"];
    $query="insert into category (catName,catSummary) values (?,?)";
    $addCat=$con->prepare($query);
    $addCat->execute(
        array($title,$sum)
    );
    if($addCat){
        header("Location:category.php?durum=eklendi");
    }
}

/* kullanıcı ekle */

if(isset($_GET["Nuser"])){
    $name=$_GET["name"];
    $surname=$_GET["surname"];
    $email=$_GET["email"];
    $username=$_GET["username"];
    $pass=$_GET["pass"];
    $role=$_GET["role"];
    
    
    
    $query="insert into users (userFirstname,userSurname,userMail,username,userPass,userRole) values (?,?,?,?,?,?)";
    $addCat=$con->prepare($query);
    $addCat->execute(
        array($name,$surname,$email,$username,$pass,$role)
    );
    if($addCat){
        header("Location:users.php?durum=eklendi");
    }
}

/* rol ekle */

if(isset($_GET["Nrole"])){
    $title=$_GET["roleName"];
    $sum=$_GET["roleSum"];
    $query="insert into role (roleName,roleSummary) values (?,?)";
    $addRole=$con->prepare($query);
    $addRole->execute(
        array($title,$sum)
    );
    if($addRole){
        header("Location:roles.php?durum=eklendi");
    }
}

/* rol güncelle */

if(isset($_GET["Urole"])){
    $id=$_GET["roleId"];
    $title=$_GET["roleName"];
    $sum=$_GET["roleSum"];
    // $query="";
    $addRole=$con->prepare("UPDATE role SET roleName=? , roleSummary=? WHERE roleId=?");
    $addRole->bindParam(1,$title,pdo::PARAM_STR);
    $addRole->bindParam(2,$sum,pdo::PARAM_STR);
    $addRole->bindParam(3,$id,pdo::PARAM_INT);
    $addRole->execute();
    if($addRole->rowCount()>0){
        header("Location:roles.php?durum=Güncellendi");
    }
}

/* kullanıcı güncelle */

if(isset($_GET["Uuser"])){
    $id=$_GET["userId"];
    $name=$_GET["name"];
    $surname=$_GET["surname"];
    $email=$_GET["email"];
    $username=$_GET["username"];
    $pass=$_GET["pass"];
    $role=$_GET["role"];
    
    
    
    $query="Update users SET userFirstname=?,userSurname=?,userMail=?,username=?,userPass=?,userRole=? where userId=?";
    $addCat=$con->prepare($query);
    $addCat->execute(
        array($name,$surname,$email,$username,$pass,$role,$id)
    );
    if($addCat){
        header("Location:users.php?durum=Güncellendi");
    }
}
/* kategori güncelle */

if(isset($_GET["Ucat"])){
    $id=$_GET["catId"];
    $title=$_GET["catName"];
    $sum=$_GET["catSum"];
    // $query="";
    $addRole=$con->prepare("UPDATE category SET catName=? , catSummary=? WHERE catId=?");
    // $addRole->bindParam(1,$title,pdo::PARAM_STR);
    // $addRole->bindParam(2,$sum,pdo::PARAM_STR);
    // $addRole->bindParam(3,$id,pdo::PARAM_INT);
    $addRole->execute(array($title,$sum,$id));
    if($addRole->rowCount()>0){
        header("Location:category.php?durum=Güncellendi");
    }
}

/* haber güncelle */
if(isset($_GET["Upost"])){
    $id=$_GET["postId"];
    $title=$_GET["title"];
    $sum=$_GET["summary"];
    $content=$_GET["content"];
    $authorId=$_GET["authorId"];
    $category=$_GET["category"];
    $date=$_GET["publish"];
    
    $query="Update post SET postTitle=?,postSummary=?,postContent=?,postAuthor=?,postDate=?,postCat=? where postId=?";
    $addCat=$con->prepare($query);
    $addCat->execute(
        array($title,$sum,$content,$authorId,$date,$category,$id)
    );
    if($addCat){
        header("Location:posts.php?durum=Güncellendi");
    }
}