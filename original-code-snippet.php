     $value = $_GET['param'];
            $sql =  "INSERT INTO db.table
            (`column`) VALUES ($value)";
            $this->db->query($sql);
