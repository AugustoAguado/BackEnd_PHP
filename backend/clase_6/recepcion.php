<?php

if($_GET['nombre']=="") {
    echo ": No ingresó nombre";
}else {
    if($_GET['nota']=="") {
        echo ": No ingresó la nota";
    }else {
        if(!is_numeric($_GET['nota'])) {
            echo ": La nota no es un número";
        }else {
            echo $_GET['nombre'];
            if ($_GET['nota']<0 or $_GET['nota']>10) {
                echo ": La nota no es válida";
            }else{
                if ($_GET['nota']==0 or $_GET['nota']<3) {
                    echo ": Muy deficiente";
                }
                if ($_GET['nota']>2 && $_GET['nota']<6) {
                    echo ": Insuficiente";
                }
                if ($_GET['nota']>5 && $_GET['nota']<8) {
                    echo ": Bien";
                }
                if ($_GET['nota']>7 && $_GET['nota']<10) {
                    echo ": Notable";
                }
                if ($_GET['nota']==10) {
                    echo ": Sobresaliente";
                }
            }
        }
    }
}


?>