<?php 
$actual_link = "http://$_SERVER[HTTP_HOST]";

    if (!function_exists('http_response_code')) {
        function http_response_code($code = NULL) {

            if ($code !== NULL) {

                switch ($code) {
                    case 100: $text = 'Continue'; break;
                    case 101: $text = 'Switching Protocols'; break;
                    case 200: $text = 'OK'; break;
                    case 201: $text = 'Created'; break;
                    case 202: $text = 'Accepted'; break;
                    case 203: $text = 'Non-Authoritative Information'; break;
                    case 204: $text = 'No Content'; break;
                    case 205: $text = 'Reset Content'; break;
                    case 206: $text = 'Partial Content'; break;
                    case 300: $text = 'Multiple Choices'; break;
                    case 301: $text = 'Moved Permanently'; break;
                    case 302: $text = 'Moved Temporarily'; break;
                    case 303: $text = 'See Other'; break;
                    case 304: $text = 'Not Modified'; break;
                    case 305: $text = 'Use Proxy'; break;
                    case 400: $text = 'Bad Request'; break;
                    case 401: $text = 'Unauthorized'; break;
                    case 402: $text = 'Payment Required'; break;
                    case 403: $text = 'Forbidden'; break;
                    case 404: $text = 'Not Found'; break;
                    case 405: $text = 'Method Not Allowed'; break;
                    case 406: $text = 'Not Acceptable'; break;
                    case 407: $text = 'Proxy Authentication Required'; break;
                    case 408: $text = 'Request Time-out'; break;
                    case 409: $text = 'Conflict'; break;
                    case 410: $text = 'Gone'; break;
                    case 411: $text = 'Length Required'; break;
                    case 412: $text = 'Precondition Failed'; break;
                    case 413: $text = 'Request Entity Too Large'; break;
                    case 414: $text = 'Request-URI Too Large'; break;
                    case 415: $text = 'Unsupported Media Type'; break;
                    case 500: $text = 'Internal Server Error'; break;
                    case 501: $text = 'Not Implemented'; break;
                    case 502: $text = 'Bad Gateway'; break;
                    case 503: $text = 'Service Unavailable'; break;
                    case 504: $text = 'Gateway Time-out'; break;
                    case 505: $text = 'HTTP Version not supported'; break;
                    default:
                        exit('Unknown http status code "' . htmlentities($code) . '"');
                    break;
                }

                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

                header($protocol . ' ' . $code . ' ' . $text);

                $GLOBALS['http_response_code'] = $code;

            } else {

                $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

            }

            return $code;

        }
    }


?>
<!DOCTYPE HTML>
<!--
	 error handling
	-->
<html>
<head>
<title>erreur<?php echo http_response_code(); ?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
</head>
<body>
<div id="main">
  <div class="container">
    <div class="row main-row">
      <div class="12u">
        <section>
        <h2>
        <p> <img src="<?php echo $actual_link; ?>/assets/images/poney.png" alt="unicorn" width="150" height="150"></p>
        </p>
        <h2>
        <p><a href="<?php echo $actual_link; ?>/recherche-plaque"> Revenir </a> </p>
        <?php 	$status = $_SERVER['REDIRECT_STATUS'];
							$codes = array(
								400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
								403 => array('403 Forbidden', 'The server has refused to fulfil your request.'),
								404 => array('404 Not Found', 'The page you requested was not found on this server.'),
								405 => array('405 Method Not Allowed', 'The method specified in the request is not allowed for the specified resource.'),
								408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
								500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
								502 => array('502 Bad Gateway', 'The server received an invalid response while trying to carry out the request.'),
								504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
								);

							$title = $codes[$status][0];
							$message = $codes[$status][1];
							if ($title == false || strlen($status) != 3) {
								$message = 'Please supply a valid HTTP status code.';
							}

							echo '<h1>Hold up! '.$title.' detected</h1>
							<p>'.$message.'</p>';
							?>
        </section>
      </div>
    </div>
  </div>
</div>
</body>
</html>
