<?php

class Mysql
{
    public final function __construct()
    {
        $this->connection = null;
        $this->saveChanges = true;
    }

    public final function connect($host = 'localhost', $db = 'fraud', $user = 'fraud', $pass = 'fraud')
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;

        $this->connection = mysql_connect($host, $user, $pass) or trigger_error(mysql_error());
        mysql_select_db($this->db, $this->connection) or trigger_error(mysql_error());
    }

    public final function disconnect()
    {
        mysql_close($this->connection);
    }

    public final function delete($tbl, $condition = null)
    {
        if (!$tbl) {
            trigger_error('define table');
            return false;
        }
        $sql = "delete from $tbl ";
        if ($condition) {
            $sql .= " where $condition";
        }
        if ($this->saveChanges) {
            $this->query($sql);
        }
        return true;
    }

    public final function query($query)
    {
        if (!$this->connection) trigger_error('Not Connected');
        $run = mysql_query($query, $this->connection);

        if (!$run) {
            trigger_error('Query failed: ' . $query . ' :: ' . mysql_error($this->connection));
        }

        if (!$this->saveChanges) {
            $bSqlCheck = ( bool )strtolower(substr(trim($query), 0, 6)) == 'select';
            if (!$bSqlCheck) {
                return null;
            }
        }
        $result = null;
        $recordset = null;
        if (is_resource($run)) {
            while ($recordset = mysql_fetch_assoc($run)) {
                $row = null;
                foreach ($recordset as $field => $value) {
                    $row[$field] = stripslashes($value);
                }
                $result [] = $row;
            }
        } else {
            $result = mysql_affected_rows($this->connection);
        }
        //$this->disconnect();
        return $result;
    }

    public final function markDeleted($tbl, $condition = null, $col = 'deleted')
    {
        if (!$tbl) {
            trigger_error('define table');
            return false;
        }
        $sql = "update $tbl set $col='1'";
        if ($condition) {
            $sql .= " where $condition";
        }
        if ($this->saveChanges) {
            $this->query($sql);
        }
        return true;
    }

    public final function add($tbl, $cols = array(), $vals = array())
    {
        if (!$tbl or !$vals) {
            trigger_error('check parameters');
            return false;
        } else {
            $keys = '';
            if ($cols) $keys = '(' . join(' , ', $cols) . ')';
            $vs = array();
            foreach ($vals as $v) {
                $vs[] = "'" . $v . "'";
            }
            $vs = '(' . join(' , ', $vs) . ')';
            $sql = "insert into $tbl $keys values $vs";

            if ($this->saveChanges) {
                $this->query($sql);
                $id = $this->query('SELECT LAST_INSERT_ID() AS TID');
            }
            return $id;
        }
    }

    public final function update($tbl, $cols, $vals, $condition = null)
    {
        if (!$tbl or !$cols or !$vals) {
            trigger_error('check parameters');
            return false;
        } else {
            if ($condition) $condition = ' where ' . $condition;
            $qr = array();
            for ($i = 0; $i < count($cols); $i++) {
                $qr[] = $cols[$i] . "='" . $vals[$i] . "'";
            }
            $sql = "update $tbl set " . join(' , ', $qr) . $condition; //echo $sql; exit;				
            if ($this->saveChanges) {
                $this->query($sql);
            }
            return true;
        }
    }
}

?>