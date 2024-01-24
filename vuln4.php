class AuthenticationHandler {

    public mysqli $conn;

    function authenticate() {
      $value = $_GET['param'];
      $stmt = $this->db->prepare("INSERT INTO db.table (`column`) VALUES (?)");
      $stmt->bind_param('s', $value);
      $stmt->execute();
    }
}
