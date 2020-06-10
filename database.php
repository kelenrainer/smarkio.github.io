<?
function DBCreate($table, array $data){
    $table = DB_PREFIX.'_' .$table;
    $data = DBEscape($data);

    $fildes = implode(',', array_key($data));
    $values = "'" .implode(',', $data)."'";
    $query = "INSET INTO {$table}({$fildes}) VALUES({$values})";
}

function DBExecutar($query){
    $link = DBConnect();
    $result = @mysql_query($link, $query) ordie(mysqli_erro());

    DBClose($link);
    return $result;
}

?>