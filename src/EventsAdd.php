<?php

class EventsAdd
{
    public static function DumpEvent($value)
    {
        "<pre>";
        var_dump($value);
        "</pre>";
    }

    public static function OpenConnectionEvent($name, $token, $password)
    {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['token'] = $token;
        $_SESSION['password'] = $password;
    }

    public static function EventDebugPHP()
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('error_log', 'php_error.log');
    }

    public static function BrutalForceHTML()
    {
      echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";echo"<pre>";echo"</pre>";echo"<html>";echo"</html>";echo"<head>";echo"</head>";echo"<header>";echo"</header>";echo"<body>";echo"</body>";echo"<footer>";echo"</footer>";
    }

    public static function BrutalForceCss()
    {
       echo "<style>
     body{
     display: flex;
     text-decoration: none;
     }
          html{
     display: flex;
     text-decoration: none;
     }
          head{
     display: flex;
     text-decoration: none;
     }
";
    }
}