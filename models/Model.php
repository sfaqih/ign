<?php
    require_once 'config/Database.php';

    class Model
    {
        public function __construct()
        {
            $this->db = Database::get_instance();   
        }   

        function import($files)
        {
            // Check file is exists
            if (file_exists($files)) {
                // Start import
                $sql = file_get_contents($files);
                $import = $this->db->exec($sql);

                if ($import !== FALSE) {
                    echo "Database import successful";
                }else{
                    echo "Database import failed";
                }
            }else{
                echo "File not found";
            }
        }

        public function save($data)
        {
            // Looping data response
            foreach ($data as $key => $value) {
                // Store to mysql format
                $storeData[] = '("'.$value->nama.'", "'.$value->email.'", "'.$value->birth_date.'", "'.$value->country.'", "'.$value->phone.'", "'.$value->registration_date.'", "'.$value->need_pickup.'", "'.$value->motivation_letter.'")';
            }

            // Extract data
            $dataInsert = implode(',', $storeData);

            // Insert data
            $sql = $this->db->query("INSERT IGNORE INTO registrar (nama, email, birth_date, country, phone, registration_date, need_pickup, motivation_letter) VALUES $dataInsert");

            if ($sql !== FALSE) {
                $result = "Request API Success";
            }else{
                $result = "Request API Failed";
            }

            echo $result;
        }
    }

?>