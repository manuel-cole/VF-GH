<?php
/**
 * Created by IntelliJ IDEA.
 * User: emmanuel.gamor
 * Date: 14/09/2016
 * Time: 13:27
 */
class Mysql
{
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
}
//function getRequestsCEO()
//{
//    global $db;
//    $sql = "SELECT * FROM roaming";
//    $rs = $db->query($sql);
//    return $rs;
//}