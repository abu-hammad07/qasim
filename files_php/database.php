<?php
// -------------class database -----------------
class database
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "qasim_web";
    private $result = array();
    private $mysqli = "";
    private $myQuery = "";
    private $conn = false;
    // -------------------database connect---------------
    public function __construct()
    {

        if (!$this->conn) {

            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            // Check connection
            if ($this->mysqli->connect_errno > 0) {
                array_push($this->result, $this->mysqli->connect_error);
                return false; // Problem selecting database return FALSE
            }
        } else {
            return true;
        }
    }

    // ---------------insert function--------------
    public function insert($table, $data)
    {
        $fields = "";
        $values = "";
        foreach ($data as $key => $value) {
            $fields .= "`$key`,";
            $values .= "'$value',";
        }
        $fields = rtrim($fields, ',');
        $values = rtrim($values, ',');
        $sql = "INSERT INTO $table($fields) VALUES($values)";
        if ($this->mysqli->query($sql)) {  // query executed successfully
            array_push($this->result, "Data inserted successfully");
            return true;
        } else {
            array_push($this->result, $this->mysqli->error);
            return false;
        }
    }
    // ---------------Update function--------------
    public function Update($table, $data = array(), $where)
    {
        if ($this->tableExists($table)) {
            $args = array();
            foreach ($data as $key => $value) {
                $args[] = "$key='$value'";
            }
            $sql = "UPDATE $table SET " . implode(',', $args);
            if ($where != null) {
                $sql .= " WHERE $where";
            }
            $this->myQuery = $sql;
            if ($query = $this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }
    // ---------------delete function--------------
    public function delete($table, $where)
    {
        if ($this->tableExists($table)) {
            $sql = "DELETE FROM $table WHERE $where";
            if ($this->mysqli->query($sql)) {
                array_push($this->result, $this->mysqli->affected_rows);
                return true;
            } else {
                array_push($this->result, $this->mysqli->error);
                return false;
            }
        } else {
            return false;
        }
    }

    // ---------------getResult num row function--------------

    public function getResult($table)
    {
        $sql = "SELECT * FROM $table";
        $result = $this->mysqli->query($sql);
        if ($this->mysqli->affected_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }


    // -----------------data not found---------
    public function data_not_found($table) {
        $sql = "SELECT * FROM $table";
        $result = $this->mysqli->query($sql);

        if ($result === false) {
            // Log or handle the error
            error_log("Database query failed: " . $this->mysqli->error);
            return false;
        }

        return $result;
    }

    // ---------------edit_select function--------------
    public function edit_select($table, $where)
    {
        $sql = "SELECT * FROM $table WHERE $where";
        $result = $this->mysqli->query($sql);
        if ($result === false) {
            die("Error: " . $this->mysqli->error);
        }
        return $result;
    }
    // ---------------------data alrady exists----------------
    public function dataExists($table, $condition , $AND)
    {
        $sql = "SELECT * FROM $table WHERE $condition  AND $AND";
        $result = $this->mysqli->query($sql);
        return $result->num_rows > 0;
    }

    // ---------------------table exists----------------
    private function tableExists($table)
    {
        $tablesInDb = $this->mysqli->query("SHOW TABLES FROM  $this->db_name LIKE '$table'");
        if ($tablesInDb) {
            if ($tablesInDb->num_rows == 1) {
                return true; // The table exists
            } else {
                array_push($this->result, $table . " does not exist in this database");
                return false; // The table does not exist
            }
        }
    }

    // -----------------eccap string---------
    public function escapeString($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $this->mysqli->real_escape_string($data);
    }

    // ------------------database close-----------------
    public function __destruct()
    {
        if ($this->conn) {
            $this->mysqli->close();
            $this->conn = false;
            return true;
        } else {
            return false;
        }
    }
}
