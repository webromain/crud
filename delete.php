<?php

    $id = $_POST["id"];

    function _delete($id = int){
        $json = file_get_contents("bdd.json");
        $parse = json_decode($json);

        array_splice($parse, $id, 1);
        // Encodage en JSON et sauvegarde dans le fichier
        $contenu_json = json_encode($parse, JSON_PRETTY_PRINT);
        file_put_contents("bdd.json", $contenu_json);
        echo "<p class='message'>ID.#". $id ." was deleted successfully.\n</p>";
    } _delete($id);

    header("location: index.php");

?>