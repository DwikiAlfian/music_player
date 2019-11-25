<?php

class database{
  var $host = "localhost";
  var $username = "root";
  var $password = "";
  var $database = "music_stream";
  var $koneksi;

  function __construct()
  {
    $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
  }

  function register($username,$password,$nama)
  {
    $insert = mysqli_query($this->koneksi, "INSERT INTO user VALUES ('','$username','$password','$nama')");
    return $insert;
  }

  function login($username, $password, $remember)
  {
    $query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE username='$username'");
    $data_user = $query->fetch_array();
    if(password_verify($password,$data_user['password']))
    {
      if($remember)
      {
        setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
        setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
      }
      $_SESSION['username'] = $username;
      $_SESSION['nama'] = $data_user['nama'];
      $_SESSION['is_login'] = TRUE;
      return TRUE;
    }
  }

  function relogin($username)
  {
    $query = mysqli_query($this->koneksi, "SELECT * FROM user WHERE username='$username'");
    $data_user = $query->fetch_array();
    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data_user['nama'];
    $_SESSION['is_login'] = TRUE;
  }

  function musicuploads($filename,$photo,$title,$uploader)
  {
    mysqli_query($this->koneksi, "INSERT INTO music VALUES ('','$title','$uploader','$filename','$photo')");
  }

  function musiclist()
  {
    $data = mysqli_query($this->koneksi, "SELECT * FROM music");
    while($row = mysqli_fetch_array($data)){
      $hasil[] = $row;
    }
    return $hasil;
  }

  function musicdetail($query)
  {
    $q = $this->koneksi->query($query);
    while($a = $q->fetch_assoc()){
      $rows[] = $a;
    }
    return $rows;
  }
}

// $db = new database();

?>
