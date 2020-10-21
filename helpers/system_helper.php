<?php
    //redireccionar a la pagina
            function redirect($page = FALSE, $message = NULL, $message_type = NULL)
            {
            if (is_string ($page)){
                $location = $page;
            } else {
                $location = $_SERVER ['SCRIPT_NAME'];
            }

          //checar el mensaje
          if($message != NULL){
            //set mensaje
            $_SESSION['message'] = $message;
          }
          //checar el tipo de mensaje
          if($message_type != NULL){
            //set el tipo de mensaje
            $_SESSION['message_type'] = $message_type;
          }

          //redireccionar
          header ('Location: '.$location);
          exit;
}

//mostrar el mensaje
function displayMessage(){
  if(!empty($_SESSION['message'])) {

    //asgnar la variable del mensaje
    $message = $_SESSION['message'];

    if(!empty($_SESSION['message_type'])) {
      //asignar la variable del tipo de mensaje
      $message_type = $_SESSION['message_type'];
      //crear mensaje
      if($message_type == 'error'){
          echo '<div class="alert alert-danger">' . $message . '</div>';
      } else {
          echo '<div class="alert alert-success">' . $message . '</div';
      }
    }
    //unset el mensaje
    unset($_SESSION['message']);
    unset($_SESSION['message_type']);
  } else {
      echo '';
  }
}
