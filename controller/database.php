<?php
class connection {
    protected $host = "localhost";
    protected $user = "root";
    protected $pass = "";
    protected $dbname = "azeno";
    protected static $connection = "";
    protected $query = [];
    /**
     * connection constructor.
     */
    public function __construct() {
        $this->connect();
    }
    /**
     * ket noi mysqli|string
     */
    public function connect() {
        if (!self::$connection) {
            self::$connection = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
            mysqli_set_charset(self::$connection, "utf8");
        }
        return  self::$connection;
    }
    // ham mysqli_query
    public function query($sqli,$check) {
        if ($check == "on") {
            $query = mysqli_query($this->connect(),$sqli);
        } else {
            $query = "";
        }
        return $query;
    }
    public function num_rows() {
        $sqli = "SELECT ".$this->cau_query["select"]." FROM ".$this->cau_query['table']." ".$this->check_where($this->cau_query["where"]);
        $query = $this->query($sqli,"on");
        return mysqli_num_rows($query);
    }
    // build cau query
    public function build_query($params) {
        $default = [
            "select" => "",
            "table" => "",
            "where" => "",
            "desc" => "",
            "limit" => "",
            "desclimit" => "",
            "join" => "",
            "orderby" => "",
            //ínert
            "ten_cot" => "",
            "gia_tri_cot" => "",
            //update
            "set" => ""
        ];
        $this->cau_query = array_merge($default,$params);
        return $this;
    }
    // kiem tra where
    public function check_where($check) {
        if (trim($check)) {
            return "WHERE ".$check;
        }
        return "";
    }
    // kiem tra order by
    public function check_orderby($check) {
        if (trim($check)) {
            return "ORDER BY ".$check;
        }
        return "";
    }
    //kiem ta LIMIT
    public function check_limit($check) {
        if (trim($check)) {
            return "LIMIT ".$check;
        }
        return "";
    }
    //kiemtra DESC LIMIT 
    public function check_desclimit($check) {
        if (trim($check)) {
            return "DESC LIMIT ".$check;
        }
        return "";
    }
    //kiemtra DESC LIMIT 
    public function check_desc($check) {
        if (trim($check) == "on") {
            return "DESC";
        }
        return "";
    }
    //kiem tra JOIN
    public function check_join($check) {
        if (trim($check)) {
            return "JOIN ".$check;
        }
        return "";
    }
    // SELECT
    public function select() {
        $sqli = "SELECT ".$this->cau_query["select"]." FROM ".$this->cau_query['table']." ".$this->check_join($this->cau_query['join'])." ".$this->check_where($this->cau_query["where"])." ".$this->check_orderby($this->cau_query["orderby"])." ".$this->check_desc($this->cau_query["desc"])." ".$this->check_limit($this->cau_query["limit"])."".$this->check_desclimit($this->cau_query["desclimit"]);
        return $this->query($sqli, "on");
    }
    // INSERT
    public function insert() {
        $sqli = "INSERT INTO ".$this->cau_query['table']." (".$this->cau_query['ten_cot'].") VALUES (".$this->cau_query['gia_tri_cot'].")";
        return mysqli_query($this->connect(), $sqli);
    }
    // DELETE
    public function delete() {
        $sqli = "DELETE FROM ".$this->cau_query['table']." ".$this->check_where($this->cau_query["where"])."";
        return mysqli_query($this->connect(), $sqli);
    }
    public function update() {
        $sqli = "UPDATE ".$this->cau_query['table']." SET ".$this->cau_query["set"]." ".$this->check_where($this->cau_query["where"])."";
        return mysqli_query($this->connect(), $sqli);
    }
}
$connect = new connection();
?>