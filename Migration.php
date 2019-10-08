<?php
    require_once 'models/Model.php';

    class Migration
    {
        // Path SQL Configuration
        public $pathFiles = 'sql/migration.sql';
        public function __construct()
        {
            // Call Database Connection
            $this->model = new Model();

            $this->index();
        }
        
        private function index()
        {
            return $this->model->import($this->pathFiles);
        }
    }

    return new Migration();
?>
