<?php

function exit_and_send_data_as_json($objet_or_array) {
        header('Content-Type: application/json; charset=utf-8');
        exit(json_encode($objet_or_array));
    }


$mystatus = "abcdefghjkl";
exit_and_send_data_as_json($mystatus);       
  


?>