<?php
    namespace Controllers;
    use models\Cine;
    use DAO\CineDAO;

    class CineController {
        private $CineDAO;
        
        public function __construct() {
            $this->CineDAO = new CineDAO();
            UsuarioController::verifUserLogueado();
            
        }

       
    }
        


?>