<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		 
		 <title>Din Mat</title>
		 
		<link href="./styles/dinmat.css" type="text/css" rel="stylesheet">

	</head>
	
	<body>
		<div id="container">
			<header>
				
				<h1> <img class ="loga" src="./images/gour.png"> Din Mat</h1>
				
			</header>
			
			<nav id = "meny">
				<ul>
					<li><a href="index.php">Startsida</a></li>
					<li><a href="laddaupp.php">Ladda upp</a></li>
					<li><a href="om_oss.php">Om oss</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
				</ul>
			</nav>	
				
			<section>
				<h1>Kontakt</h1>
					<p>
					 Vid frågor angående hemsidan, var vänlig att kontakta oss via mail, DinMat@outlook.com
					 </p>
					 <p>
					 Du kan även kontakta oss genom att skriva i text rutan här nedanför. 
					 
					<form action="MAILTO:dinmat@outlook.com" method="post" enctype="text/plain">
					
					<input type="text" name="mail" id="mail" placeholder="Skriv din mailadress här..">
					<br>
					<br>
					<textarea rows="10" cols="30" id="kommentar" placeholder="Skriv din fråga/kommentar här.."> </textarea>
					
					<br>
					<br>
				
					<input class="knapp" type="submit" value="Skicka">
					<input class="knapp" type="reset" value="Avbryt">
					</form>
					 </p>

<?php

	function guid(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
                .substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid,12, 4).$hyphen
                .substr($charid,16, 4).$hyphen
                .substr($charid,20,12)
                .chr(125);// "}"
        return $uuid;
    }
}

echo guid();

//array("readRole" => "all" , "metaReadRole" => "all" ,) . 

			$requestBody = array(array("eventId" => guid(), "eventType" => "Examensarbete", "data" =>
			'Request method: ' . $_SERVER['REQUEST_METHOD'] . 
			"\n" . 'Request time: ' . $_SERVER['REQUEST_TIME'] . 
			"\n" . 'Request time, type-float: ' . $_SERVER['REQUEST_TIME_FLOAT'] . 
			"\n" . 'What revision of the CGI specification the server is using: ' . $_SERVER['GATEWAY_INTERFACE'] . 
			"\n" . 'Server adress: ' . $_SERVER['SERVER_ADDR'] . 
			"\n" . 'Server name: ' . $_SERVER['SERVER_NAME'] . 
			"\n" . 'Server software: ' . $_SERVER['SERVER_SOFTWARE'] . 
			"\n" . 'Server protocol: ' . $_SERVER['SERVER_PROTOCOL'] . 
			"\n" . 'The query string, if any, via which the page was accessed: ' . $_SERVER['QUERY_STRING'] . 
			"\n" . 'The document root directory under which the current script is executing: ' . $_SERVER['DOCUMENT_ROOT'] . 
			"\n" . 'Contents of the Accept: ' . $_SERVER['HTTP_ACCEPT'] . 
			"\n" . 'Contents of the Accept Charset: ' . $_SERVER['HTTP_ACCEPT_CHARSET'] . 
			"\n" . 'Contents of the Accept-Language: ' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . 
			"\n" . 'Contents of the Accept-Encoding: ' . $_SERVER['HTTP_ACCEPT_ENCODING'] . 
			"\n" . 'Contents of the Connection: ' . $_SERVER['HTTP_CONNECTION'] . 
			"\n" . 'Contents of the Host: ' . $_SERVER['HTTP_HOST'] . 
			"\n" . 'The address of the page (if any) which referred the user agent to the current page: ' . $_SERVER['HTTP_REFERER'] . 
			"\n" . 'Contents of the User-Agent. This is a string denoting the user agent being which is accessing the page.: ' . $_SERVER['HTTP_USER_AGENT'] . 
			"\n" . 'Set to a non-empty value if the script was queried through the HTTPS protocol: ' . $_SERVER['HTTPS'] . 
			"\n" . 'The IP address from which the user is viewing the current page: ' . $_SERVER['REMOTE_ADDR'] . 
			"\n" . 'The Host name from which the user is viewing the current page: ' . $_SERVER['REMOTE_HOST'] . 
			"\n" . 'The port being used on the users machine to communicate with the web server: ' . $_SERVER['REMOTE_PORT'] . 
			"\n" . 'The authenticated user: ' . $_SERVER['REMOTE_USER'] . 
			"\n" . 'The authenticated user if the request is internally redirected: ' . $_SERVER['REDIRECT_REMOTE_USER'] . 
			"\n" . 'The absolute pathname of the currently executing script: ' . $_SERVER['SCRIPT_FILENAME'] . 
			"\n" . 'The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file: ' . $_SERVER['SERVER_ADMIN'] . 
			"\n" . 'The port on the server machine being used by the web server for communication: ' . $_SERVER['SERVER_PORT'] . 
			"\n" . 'String containing the server version and virtual host name which are added to server-generated pages, if enabled: ' . $_SERVER['SERVER_SIGNATURE'] . 
			"\n" . 'Filesystem- (not document root-) based path to the current script, after the server has done any virtual-to-real mapping: ' . $_SERVER['PATH_TRANSLATED'] . 
			"\n" . 'Contains the current scripts path. This is useful for pages which need to point to themselves: ' . $_SERVER['SCRIPT_NAME'] . 
			"\n" . 'The URI which was given in order to access this page: ' . $_SERVER['REQUEST_URI'] . 
			"\n" . 'When doing Digest HTTP authentication this variable is set to the Authorization header sent by the client which you should then use to make the appropriate validation : ' . $_SERVER['PHP_AUTH_DIGEST'] . 
			"\n" . 'When doing HTTP authentication this variable is set to the username provided by the user: ' . $_SERVER['PHP_AUTH_USER'] . 
			"\n" . 'When doing HTTP authentication this variable is set to the password provided by the user: ' . $_SERVER['PHP_AUTH_PW'] . 
			"\n" . 'When doing HTTP authenticated this variable is set to the authentication type: ' . $_SERVER['AUTH_TYPE'] . 
			"\n" . 'Contains any client-provided pathname information trailing the actual script filename but preceding the query string, if available.: ' . $_SERVER['PATH_INFO'] . 
			"\n" . 'Original version of PATH_INFO before processed by PHP: ' . $_SERVER['ORIG_PATH_INFO'] . 
			"\n" . 'The filename of the currently executing script, relative to the document root: ' . $_SERVER['PHP_SELF'] . 
			"\n" . 'Array of arguments passed to the script: ' . $_SERVER['argv'] . 
			"\n" . 'Contains the number of command line parameters passed to the script (if run on the command line): ' . $_SERVER['argc']
			, "metadata" => array(array("maxAge" => 1 , "maxCount" => 2 , "cacheControl" => 2, "haha" => 2,)),));

			$response = SimpleHttpClient::post('http://127.0.0.1:2113/streams/' . $_SERVER['REMOTE_ADDR'])
				->setJsonRequestBody($requestBody)
				->execute();

class SimpleHttpClient {

const JSON = "application/json";
const XML = "application/json";
const FORM_DATA = "multipart/form-data";

private $url;
private $headers;
private $requestBody;
private $resultBody;
private $method;

/**
* @param string $url [Defaults to null] <br> URL to execute the
* request on
* @param string $method [Defaults to null] <br> Request method, like
* POST, GET etc.
* @throws ErrorException
*/
function __construct($url = null, $method = null) {
if (!extension_loaded('curl')) :
throw new \ErrorException('cURL must be activated');
endif;

if ($url !== null) :
$this->setUrl($url);
endif;

$this->setMethod($method !== null ? $method : "GET");
$this->headers = $this->resultBody = array();
}

/**
* Create a POST instance of this class
* @param string $url [Defaults to null] <br> URL to execute the
* request on
* @return SimpleHttpClient
*/
public static function post($url = null) {
return new self($url, "POST");
}

/**
* Create a PUT instance of this class
* @param string $url [Defaults to null] <br> URL to execute the
* request on
* @return SimpleHttpClient
*/
public static function put($url = null) {
return new self($url, "PUT");
}

/**
* Create a GET instance of this class
* @param string $url [Defaults to null] <br> URL to execute the
* request on
* @return SimpleHttpClient
*/
public static function get($url = null) {
return new self($url, "GET");
}

/**
* Create a DELETE instance of this class
* @param string $url [Defaults to null] <br> URL to execute the
* request on
* @return SimpleHttpClient
*/
public static function delete($url = null) {
return new self($url, "DELETE");
}

/**
* Add headers to the call. If you add multiple of the same header, they will
* overwrite each other. To add one header at a time see @link SimpleHttpClient addHeader addHeader()
* @param array $args Array in the format <b>array($name => $value)</b>. I.e.
* for instance <b>array('Content-Type', 'text/plain')</b>.
* @return SimpleHttpClient The class, used for chaining
*/
public function addHeaders(array $args) {
foreach ($args as $key => $value) {
$this->headers[$key] = $value;
}
return $this;
}

/**
* Add a single header to the call.
* @param string $name Name of the header
* @param string $value Value of the header
* @return SimpleHttpClient The class, used for chaining
*/
public function addHeader($name, $value) {
$this->headers[$name] = $value;
return $this;
}

/**
* Get a specific header that has been added to the call.
* @param string $name Name of the header
* @return string|boolean Value of the header specified in params. False if
* it did not exist
*/
public function getHeader($name) {
return array_key_exists($name, $this->headers) ?
$this->headers[$name] : false;
}

/**
* Get the header array.
* @return array All headers added to the call
*/
public function getHeaders() {
return $this->headers;
}

/**
* Remove a header that has been added to the call
* @param string $name Name of the header
* @return SimpleHttpClient
*/
public function removeHeader($name) {
if (array_key_exists($name, $this->headers)) {
unset($this->headers[$name]);
}
return $this;
}

/**
* Set the desired request method.
* @param string $method HTTP method name
* @return SimpleHttpClient The class, used for chaining
*/
public function setMethod($method) {
$this->method = $method;
return $this;
}

/**
* Set the url with this call
* @param string $url
* @return SimpleHttpClient The class, used for chaining
* @throws Exception Throws an exception if URL is not a valid URL
*/
public function setUrl($url) {
if (!filter_var($url, FILTER_VALIDATE_URL)) {
throw new \InvalidArgumentException('Invalid URL');
}

$this->url = $url;
return $this;
}

/**
* Get the URL attached to the client
* @return string The URL attached to the call
*/
public function getUrl() {
return $this->url;
}

/**
* Get the HTTP method
* @return string The HTTP method in string
*/
public function getMethod() {
return $this->method;
}

/**
* Take an array of headers in this format <b>array($name => $value)</b>
* an converts this to an array that can be used to cURL. I.e. an array
* in the format <b>array("$name: $value")</b>.
* @param array $headers Headers in the format <b>array($name => $value)</b>
* @return array An array of headers useable by cURL
*/
private static function fixHeaders(array $headers) {
$fixed = array();
foreach ($headers as $key => $value) {
$fixed[] = $key . ': ' . $value;
}
return $fixed;
}

/**
* Set the desired request body. If you are posting, putting, etc.
* remember to call setMethod('POST') as well!
* @param array $requestBody
* @param string $contentType [Defaults to false] <br> Provide a
* content type for the headers
* @return SimpleHttpClient The class, used for chaining
*/
public function setRequestBody($requestBody, $contentType = null) {
$this->requestBody = $requestBody;
if ($contentType !== null) :
$this->headers['Content-Type'] = $contentType;
endif;
return $this;
}

/**
* Set body and automatically json encode it and set content type
* @param array $requestBody
* @return SimpleHttpClient The class, used for chaining
*/
public function setJsonRequestBody(array $requestBody) {
return $this->setRequestBody(json_encode($requestBody), self::JSON);
}

/**
* Set credentials for basic HTTP authentication
* @param string $username Username for server
* @param string $password Password for server
* @return SimpleHttpClient The class, used for chaining
*/
public function setHttpAuthentication($username, $password) {
return $this->addHeader('Authorization', 'Basic ' . base64_encode($username . ':' . $password));
}

/**
* Set the If-None-Match header for the call
* @param string $etag
* @return SimpleHttpClient The class, used for chaining
*/
public function setEtag($etag) {
return $this->addHeader('If-None-Match', $etag);
}

/**
* Get the results from the previous execute call
* @return array Array in the format <b>array('body' => X,
* 'http_status_code' => Y, 'headers' => Z)</b>
*/
public function getResultBody() {
return $this->resultBody;
}

/**
* Create and initialize a curl handle.
*
* <b>Important! Must return an instance from the curl_init() call </b>
*
* @return resource cURL handle
*/
public function initCurlHandle() {
$this->curl = curl_init($this->url);

// Activate the proper method in the request
switch ($this->method) {
case 'POST':
curl_setopt($this->curl, CURLOPT_POST, true);
break;
case 'GET':
curl_setopt($this->curl, CURLOPT_HTTPGET, true);
break;
default:
curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $this->method);
}

// Add request body
if ($this->method !== 'GET' && !empty($this->requestBody)) {
curl_setopt($this->curl, CURLOPT_POSTFIELDS, $this->requestBody);
}

// Return body
curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);

// Return headers
curl_setopt($this->curl, CURLOPT_HEADER, true);

// Add headers
curl_setopt($this->curl, CURLOPT_HTTPHEADER, self::fixHeaders($this->headers));
}

/**
* Execute the request
*
* @return Response A response object
*
* @throws InvalidArgumentException
* @throws RuntimeException
*/
public final function execute() {
if ($this->url === null) :
throw new \InvalidArgumentException('URL must be set before making a request');
endif;

$this->initCurlHandle();

// Execute request
$curlBody = curl_exec($this->curl);

// Error check
if ($curlBody === false) :
throw new \RuntimeException("(#" . curl_errno($this->curl) . ") " . curl_error($this->curl));
endif;

//$responseObj = $this->postExecute($curlBody);
curl_close($this->curl);
//return $responseObj;
}

/**
* Called after the request has been executed
* @param resource $curl The curl resource
* @param string $body The request body (as string, not parsed)
* @return Response A response object
*/

/**
* Parse content type and return $body as an associative array
* @param string $contentType Content type, as in "application/json" etc.
* @param string $body Request body in string format
* @return array $body in associative array format
* @throws \InvalidArgumentException
*/
private static function parseContentType($contentType, $body) {
// JSON
if (preg_match("/application\/json/", $contentType) !== false) :
return json_decode($body, true);
endif;

// Form encoded
if (preg_match("/application\/x-www-form-urlencoded/", $contentType) !== false) :
$arr = array();
parse_str($body, $arr);
return $arr;
endif;

throw new \InvalidArgumentException("Function not able to parse content type {$contentType}");
}

/**
* Casting to string will execute the object
* @return type
*/
public function __toString() {
return $this->execute();
}

/**
* Function to convert header string into associative array
* @link URL descriptionhttp://php.net/manual/en/function.http-parse-headers.php
*/
private static function http_parse_headers($header) {
$retVal = array();
$fields = explode("\r\n", preg_replace('/\x0D\x0A[\x09\x20]+/', ' ', $header));
foreach ($fields as $field) {
if (preg_match('/([^:]+): (.+)/m', $field, $match)) {
$match[1] = preg_replace('/(?<=^|[\x09\x20\x2D])./e', 'strtoupper("\0")', strtolower(trim($match[1])));
if (isset($retVal[$match[1]])) {
$retVal[$match[1]] = array($retVal[$match[1]],
$match[2]);
} else {
$retVal[$match[1]] = trim($match[2]);
}
}
}
return $retVal;
}

}

?>

			</section>
			
				
					<footer>
						<p>© Copyright 2014 by Din Mat</p>
					</footer>
				
				
		</div>
	</body>

</html>	
