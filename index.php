<?php

    include("utils.php");

    $bag = array(
        "title" => "Health Care Services Database - Ministry Of Health",
        "title-favicon" => "images/logo.jpeg",
        "footer-right-label" => "",
        "footer-company-name" => "HCSDB",
        "footer-powered-by" => "Ministry Of Health",
        "footer-powered-by-link" => "https://www.mwe.go.ug/",
        "navbar-logo-link" => "",
        "navbar-logo" => "images/logo.jpeg",
        "navbar-logo-alt" => "",
        "navbar-company" => "HCSDB",
        "menu_items" => array(
            utils_menu_item("Home","main/home"),
            utils_menu_item("Hospitals","hospitals/list"),
        ),
        "layouts" => array(
            "layout_main" => array(
                "default_route" => "main/home",
                "pages" => array(

                )
            ),
            "layout_login" => array(
                "default_route" => "login/",
                "pages" => array(
                    
                )
            )
        ),
        "default_hash_layout" => "main",
        "default_route" => "main/home",
        "on_window_load" => "on_window_load.js",
        "on_logout" => "on_logout.js"
    );

    
    include("layout.php");
    
?>