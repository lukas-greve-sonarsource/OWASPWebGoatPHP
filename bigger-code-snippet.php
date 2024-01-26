class A {
    private PDO $db;

    function insertData($value) {
      $value = $_GET['param'];
      $sql =  "INSERT INTO db.table (`column`) VALUES ($value)";
      $this->db->query($sql); // <-- issue successfully raised
  }
}
