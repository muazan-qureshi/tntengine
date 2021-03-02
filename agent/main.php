<?php session_start();

// class start Here
class tripntour
{
  // Connection start here
  function connection()
  {
    $connect = mysqli_connect('localhost', 'root', '', 'tripntour');
    return $connect;
  }
  // Connection end here

  // admin login
  function agentlogin()
  {
    if (isset($_POST['agent_login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT * FROM `agents` WHERE agent_email = '$email' AND agent_password = '$password' AND status = 1";
      $query = mysqli_query($this->connection(), $sql);
      // return $query;

      $count = mysqli_num_rows($query);

      if ($count == 1) {
        $_SESSION['liveagent'] = $_POST['email'];
        echo "<script>window.location.href='index.php'</script>";
      } else {
        echo "<script>alert('Sorry Something is Wrong')</script>";
      }
    }
  }
  // admin login end here

  // for user live info
  function user_live()
  {
    $a = $_SESSION['liveagent'];
    $sql = "SELECT * FROM `agents` WHERE agent_email = '$a'";
    $query = mysqli_query($this->connection(), $sql);
    return $query;
  }
  //

  // Package adding function start here
  function add_package()
  {
    if (isset($_POST['addpkg_btn'])) {
      $a = $_POST['name'];
      $b = $_POST['from'];
      $c = $_POST['to'];
      $d = $_POST['price'];
      $e = $_POST['day'];
      $f = $_POST['night'];
      $g = $_POST['desc'];
      $h = $_POST['person'];
      $i = $_POST['location'];

      foreach ($this->user_live() as $lorem) {
        $by = $lorem['agent_id'];
      }
      $imgs = json_encode($_FILES['image']['name']);
      $sql = "INSERT INTO `packages`(`pkg_name`, `pkg_createBY`, `pkg_location`,`pkg_from`, `pkg_to`, `pkg_price`, `pkg_day`, `pkg_night`, `pkg_image`, `pkg_description`, `pkg_person`) VALUES ('$a','$by','$i','$b','$c','$d','$e','$f','$imgs','$g','$h')";
      $query = mysqli_query($this->connection(), $sql);

      if (!$query) {
        echo ('<script>alert("Sorry SOme Went Wrong")</script>');
      } else {

        $count = count($_FILES['image']['name']);

        for ($i = 0; $i < $count; $i++) {
          $tmp = $_FILES['image']['tmp_name'][$i];
          $path = "uploads/pkg/" . $_FILES['image']['name'][$i];
          move_uploaded_file($tmp, $path);
        }

        echo ('<script>alert("Package Added Successfully")</script>');
      }
    }
  }
} // class "auction_tours" end here

$object = new tripntour;
