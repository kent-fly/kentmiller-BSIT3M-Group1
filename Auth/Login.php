<?php
	session_start();

	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbname = 'test_db';

	$conn = new mysqli($host, $user, $password, $dbname);

	if ($conn->connect_error) {
		die(json_encode(array('error' => 'Database connection error.')));
	}

	if (isset($_POST['email']) && isset($_POST['password'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$stmt = $conn->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
		$stmt->bind_param("ss", $email, $password);

		$stmt->execute();
		$result = $stmt->get_result();

		if ($result->num_rows > 0) {
			$user = $result->fetch_assoc();
			$_SESSION['user_id'] = $user['id'];
			$_SESSION['token'] = bin2hex(random_bytes(32));

			echo json_encode(array('success' => true, 'token' => $_SESSION['token']));
		} else {
			echo json_encode(array('error' => 'Invalid email or password.'));
		}

		$stmt->close();
	} else {
		echo json_encode(array('error' => 'Email and password required.'));
	}

	$conn->close();
?>
