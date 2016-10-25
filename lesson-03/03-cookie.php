<html>
    <body>

    <h1>$_COOKIE</h1>
    <pre><?php

        var_dump($_COOKIE);

        if(!isset($_COOKIE['my-name'])) {
            setcookie('my-name', 'My name goes here');
            setcookie('my-myname2', 'pozdrav');
        }

    ?></pre>
</body>
</html>
