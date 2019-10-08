<?php
    require_once 'Request.php';
    require_once 'models/Model.php';

    class Get
    {
        public function __construct()
        {
            // Import request class
            $this->request = new Request();

            // Import model class
            $this->model = new Model();

            $this->index();
        }

        public function index()
        {
            // Define header for curl
            $header = array(
                "Content-Type: application/json",
            );
    
            // Define url for curl
            $url = 'https://api-test.internationalglobalnetwork.com/api/awmun';
    
            $result = $this->request->get($url,$header);
            $result = json_decode($result);           
            
            return $this->model->save($result);
        }
    }    
?>