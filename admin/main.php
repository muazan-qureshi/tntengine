<?php session_start();

class tripntour
{
	// connection start here
	function connection()
	{
		$connect = mysqli_connect('localhost', 'root', '', 'tripntour');
		return $connect;
	}
	// connection end here

	// function for getting status id
	function forstatus()
	{
		$sql = "Select * from status";
		$query = mysqli_query($this->connection(), $sql);
		return $sql;
	} //function end here

	// add admin function begin here
	function insert_admin()
	{
		if (isset($_POST['add_admin'])) {
			$fname = $_POST['fullname'];
			$uname = $_POST['username'];
			$cnic = $_POST['cnic'];
			$fthrname = $_POST['fathername'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$pwd = $_POST['password'];
			$st = $_POST['status'];
			$dob = $_POST['dob'];
			$gender = $_POST['gender'];
			$add = $_POST['address'];
			$img_name = $_FILES['image']['name'];

			$sql = "INSERT INTO `admins`(`admin_fname`, `admin_uname`, `admin_email`, `admin_phone`, `admin_cnic`, `admin_password`, `admin_fathername`, `admin_gender`, `admin_dob`, `admin_image`, `admin_address`, `status`) VALUES ('$fname','$uname','$email','$phone','$cnic','$pwd','$fthrname','$gender','$dob','$img_name','$add','$st')";
			$query = mysqli_query($this->connection(), $sql);

			if (!$query) {
				echo ('<script>alert("Sorry Some Went Wrong");</script>');
			} else {
				move_uploaded_file($_FILES['image']['tmp_name'], "uploads/admins/" . $_FILES['image']['name']);
				echo ('<script>alert("Admin Added Successfully");</script>');
			}
		}
	}
	// admin add function end here

	// ADmin login start here
	function login_admin()
	{
		if (isset($_POST['admin_login'])) {
			$email = $_POST['email'];
			$pwd = $_POST['password'];

			$sql = "SELECT * FROM `admins` WHERE admin_email = '$email' AND admin_password = '$pwd'";
			$query = mysqli_query($this->connection(), $sql);

			$count = mysqli_num_rows($query);
			if ($count == 1) {
				$_SESSION['admin_log'] = $_POST['email'];
				echo ('<script>window.location.href="index.php"</script>');
			} else {
				echo ('<script>alert("Sorry Some went wrong")</script>');
			}
		}
	} //admin login end here

	// Get all admins data
	function get_admin()
	{
		$sql = "SELECT * FROM `admins`";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// Function end here

	// get admin profile
	function admin_profile()
	{
		$a = $_GET['adp'];
		$sql = "SELECT * FROM `admins` WHERE admin_id = $a";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// Function end here

	// get admin profile
	function agent_profile()
	{
		$a = $_GET['agp'];
		$sql = "SELECT * FROM `agents` WHERE agent_id = $a";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// Function end here

	// Agent create BY
	function addby()
	{
		foreach ($this->agent_profile() as $app) {
			$b = $app['createBY'];
			// echo $b;
		}

		$sql = "SELECT * FROM `admins` WHERE admin_id = $b";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// Function end


	// get live user info
	function logged_admin()
	{
		$a = $_SESSION['admin_log'];
		$sql = "Select * from admins where admin_email = '$a'";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// live user info end here

	// add agent by admin
	function insert_agent()
	{
		if (isset($_POST['add_agent'])) {
			$fname = $_POST['fullname'];
			$uname = $_POST['username'];
			$cnic = $_POST['cnic'];
			$fthrname = $_POST['fathername'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$pwd = $_POST['password'];
			$cpwd = $_POST['cpassword'];
			$st = $_POST['status'];
			$dob = $_POST['dob'];
			$gender = $_POST['gender'];
			$add = $_POST['address'];
			$location = $_POST['location'];
			$img_name = $_FILES['image']['name'];
			$company = $_POST['company'];

			foreach ($this->logged_admin() as $logg) {
				$admin = $logg['admin_id'];
			}

			$sql = "INSERT INTO `agents`(`agent_fname`, `agent_uname`, `agent_email`, `agent_phone`, `agent_cnic`, `agent_password`, `agent_fathername`, `agent_company`,`agent_gender`, `agent_dob`, `agent_image`, `createBY`, `agent_address`, `agent_location`, `status`) VALUES ('$fname','$uname','$email','$phone','$cnic','$pwd','$fthrname','$company','$gender','$dob','$img_name','$admin','$add','$location','$st')";
			$query = mysqli_query($this->connection(), $sql);

			if ($pwd == $cpwd) {
				move_uploaded_file($_FILES['image']['tmp_name'], "uploads/agents/" . $img_name);
				echo ('<script>alert("Agent Added to Successfully")</script>');
			} else {
				echo ('<script>alert("Sorry Some Went Wrong")</script>');
			}
		}
	}
	// add agent function end here


	function get_agent()
	{
		$sql = "SELECT * FROM `agents`";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// Function end here

	// for agents count
	function agcount()
	{
		$sql = "Select * from agents";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}

	// for admins count
	function adcount()
	{
		$sql = "Select * from admins";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}

	// Get packages for admin panel
	function get_pkgs()
	{
		$sql = "Select * from packages ";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}


	function pkg_createBY()
	{
		foreach ($this->get_pkgs() as $ab) {

			$c = $ab['pkg_createBY'];
			echo $c;
		}
		// $sql = "SELECT * FROM agents INNER JOIN packages on agents.agent_id = packages.pkg_id";
		// $sql = "SELECT * from agents INNER JOIN packages on agents.agent_id = packages.pkg_createBY";
		// $sql = "SELECT * from agents RIGHT JOIN packages on agents.agent_id = packages.pkg_createBY==$a";
		// $sql = "SELECT * from agents RIGHT JOIN packages on agents.agent_id = (packages.pkg_createBY = $a)";
		// $sql = "SELECT * from packages left JOIN agents on packages.pkg_createBY = agents.agent_id";
		// $sql = "SELECT a.agent_id aid, a.agent_fname afname, pk.pkg_createDT as cdt, a.agent_image as aimg FROM agents a LEFT JOIN packages pk ON a.agent_id = pk.pkg_createBY where agent_id = pkg_createBY";
		$sql = "SELECT * FROM agents where agent_id = $c";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}

	//getting client queries
	function client_query()
	{
		$sql = "SELECT * FROM `client_query`";
		$query = mysqli_query($this->connection(), $sql);
		return $query;
	}
	// function end here


} // Class End
#class tripntoue end here


#object created here
$object = new tripntour;
