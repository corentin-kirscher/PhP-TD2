<?php
function start_page($title)
{
    echo ' <!DOCTYPE html> <html
lang="fr"><head><title>' . PHP_EOL . $title . '</title></head><body>' . PHP_EOL
    ;
};
?>
<?php
function end_page()
{
    echo ' </body></html>' . PHP_EOL
    ;
}; ?>
<?php
function backHome (){
    echo'<a href="Td2.php"> Home';
}