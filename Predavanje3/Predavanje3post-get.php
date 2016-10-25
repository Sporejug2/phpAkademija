<html>
    <head>
        <style>
            input { display: block; margin: 6px 0; }
        </style>
    </head>
    
    <body>

    <h2>$_GET</h2>
    <pre><?php

        var_dump($_GET); // 

    ?></pre>

    <h2>$_POST</h2>
    <pre><?php

        var_dump($_POST);

    ?></pre>


    <h2>Links</h2>

    <ul>
        <li>
            <a href="02-post-get.php?page=1">Link 1</a>
        </li>
        <li>
            <a href="02-post-get.php?a=1&amp;b=2&c=dummy">Link 2</a>
        </li>
    </ul>

    <h2>Form</h2> // form method'
    // on je otisao u post , zalijepio je u from dana url se ne mijenja url smije sherati
    // ne vidi nitko osim vas , vi i server vidite http s'
    // iz input name" email zna da je to email's
    // lable password zna da je passable
    // form method ="post "


    <!-- fix this form: method, for, type, require -->
    <form>
        // <form method="post"></form>
        <fieldset>
            <legend>Info</legend>

            <label>Email</label>
            
            <lable> for="email> Email</lablel>
            <input id="email" name="email" type="email" required/>
            <input placeholder="Vasa email adresa" id="email" name="emailo" /> 
            <input name="email" type="text" />
            
            // input se koristi za ovako nestorius
            // teks kvacica
            // html form method email
            // input typovi
            // browseri imaju validaciju ,
            
            <input required name="password" type="text" pattern="lol123"/> // regular expression  
            
            // <input name="password" type="text" />
            // <label> for="email>Email</lable> // da prebaci na password's
            <input> id="email" > email</input>
            // dio hhtp specifikacije , kontakt forme posta , upload posta ,
            -- get simpaticno za shareabilit
            --> get page =2 get koji cemo viditi
            
            <label>Password</label>
            <input required name="password" type="text" />

            <input type="submit" />
            <input type="ubmit" value"lol" />
                   <-- lol ode us submit
                   <button type="submit">Posalji </button>
            // submit enter u formu ide usubmit 
        </fieldset>

    </form>

    </body>
</html>