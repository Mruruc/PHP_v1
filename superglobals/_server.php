<?php
    
    // $_SERVER is a PHP super global variable which holds information about 
    // headers,path and script locations.

    //echo($_SERVER);
    /*
    foreach($_SERVER as $key => $value){
        echo("<li>{$key}======> {$value}</li>");
    }
    */

    echo($_SERVER["PHP_SELF"]."<br/>"); // returns the filename of the currently executing.
    echo($_SERVER["SERVER_NAME"]."<br/>");    // name of the host server.
    echo($_SERVER["HTTP_HOST"]."<br/>");  // Returns the Host header from the current request

    echo($_SERVER["SERVER_ADDR"]."<br/>"); // Returns the IP address of the host server

    echo($_SERVER["QUERY_STRING"]."<br/>");  // Returns the query strings.

    echo($_SERVER["HTTP_ACCEPT"]."<br/>"); // Returns the accept header from the current request.
    
    echo($_SERVER["HTTP_REFERER"]."<br/>"); // Returns the complete URL of the current page (not reliable because not all user-agents support it)

    echo($_SERVER["REMOTE_ADDR"]."<br/>"); // Returns the IP address from where the user is viewing the current page.
    /*
        $_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
        $_SERVER['SERVER_ADDR']	
        $_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
        $_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
        $_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
        $_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
        $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)

        $_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
        $_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
        $_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
        $_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
        $_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
        $_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
        $_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
        $_SERVER['SCRIPT_NAME']	Returns the path of the current script
        $_SERVER['SCRIPT_URI']	Returns the URI of the current page
     */










?>