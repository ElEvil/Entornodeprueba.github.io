<?php
    $respuestas = array(
        "El Evil descubrio el secreto del virus de Memo asi que esta desaparecido",
        "El Evil esta advitiendo desde su sarcofago que ese no es el Memo que conocen ",
        "El Evil le tendieron una trampa, cayó en el engaño",
        "Lo sepultaron en el sarcófago maldito. Su marca se grabó a fuego sobre su cripta para advertir a 
        todo el mundo que el conocedor de el secreto ocultaba ahi jamás debía ser liberado. Allí yace inmóvil y, lo que es más, sufriendo en silencio.",
        "El virus traspasaba mundos y eras",
        "Evil halló al infame que no debe ser nombrado el creador del virus, pero en su herejía fue leal a su causa ..."
        );
    $random = array_rand($respuestas);
    echo $respuestas[$random];
    ?>
