<?php
$output = 'console.log(' . json_encode($var) . ');';
$output = sprintf('<script>%s</script>', $output);
echo $output;
?>
<script type="text/javascript">
  console.log(<?=json_encode($var)?>);
</script>

<?php

echo 'toy';
