<?php function show404(){
	http_response_code(404);
	 echo '<!DOCTYPE html>
			<html lang="en">
			<head>
			  <meta charset="UTF-8">
			  <title>404 - Page Not Found</title>
			  <style>
			    body {
			      background-color: #f8f9fa;
			      font-family: Arial, sans-serif;
			      text-align: center;
				  padding: .25rem 2rem .3rem;
			      padding-top: 10%;
			      color: #333;
			  margin: 0 auto;
			  position: relative;
			  max-width: 600px;
			    }
			    h1 {
			      font-size: 5em;
			      margin-bottom: 0.5em;
			      color: #dc3545;
			    }
			    p {
			      font-size: 1.2em;
			      margin-bottom: 2em;
			    }
			    a {
			      text-decoration: none;
			      color: #fff;
			      background-color: #007bff;
			      padding: 0.75em 1.5em;
			      border-radius: 5px;
			      font-weight: bold;
			    }
			    a:hover {
			      background-color: #0056b3;
			    }
			  </style>
			</head>
			<body>
			  <h1>404</h1>
			  <p>Oops! The page you’re looking for doesn’t exist.</p>
			  <a href="../">Return Home</a>
			</body>
			</html>';
	exit;
}

?>