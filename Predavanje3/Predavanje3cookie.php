<html>
    <body>

    <h1>$_COOKIE</h1>
    <pre><?php
   
        var_dump($_COOKIE);
        
        // kolacic u browser korisnika 
        // seta trajanje cookie povecao site
        //login radi kroz cookie 

        if(!isset($_COOKIE['my-name'])) {
            setcookie('my-name', 
                    'My name goes here',
                    time()+24*3600 // time()-24
                    );
            
            //cokie igra ping pon s browserom
            
        //}
        //set cookie manual 
        // ako nije sejvan cookie my name on seta cookie 
        // resources delete
        // cookie je header , cookie daj web sranicu header set cookie 
// svaki iduci request
        //my name my cookie 
        // cookie razlikuje 2 osobe koje dau request 
        // 10 cookie 10 strana postoji ogranicenje
        // koliko setas toliko cokie traje
    ?></pre>
</body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

