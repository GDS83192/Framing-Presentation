<?PHP

$ip = $_SERVER['REMOTE_ADDR'];
$time = time();

$log = $ip." , ".time;

$file= '0.0.0.0:9090/log.txt';

file_put_contents($file, $log .PHP_EOL, FILE_APPEND);

?>

<script type="text/javascript">;
window.alert("Insert clever hacker text here");
</script>