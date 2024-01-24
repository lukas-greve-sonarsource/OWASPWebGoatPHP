function insertData($value) {
    // FILEPATH: /home/lukas.greve/Code/OWASPWebGoatPHP/phpvuln.php
    $value = $_GET['param'];
    
    // FILEPATH: /home/lukas.greve/Code/OWASPWebGoatPHP/phpvuln.php
    $sql =  "INSERT INTO db.table (`column`) VALUES ($value)";
    $this->db->query($sql);
}
