<?
function DBClose($link){
    @mysqli_close($link) or die(mysql_error($link));
}
function DBConnect(){
    $link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_DATABASE) or die(mysql_connect_error());
    mysqli_set_charset($link, DB_CHARSET) or die(mysql_error($link));

    retirn $link;
}

?>