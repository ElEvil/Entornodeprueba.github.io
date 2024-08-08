<?php
    $respuestas = array(
        "a traido galletas para todos",
        "a traido pizza para todos",
        "a traido jugo para todos",
        "a traido papas para todos",
        "a traido tacos para todos ",
        "El Evil descubrio el secreto del virus"
        );
    $random = array_rand($respuestas);
    echo $respuestas[$random];
    ?>
