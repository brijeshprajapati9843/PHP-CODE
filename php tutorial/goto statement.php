<?php
for ($i=1; $i<= 10 ; $i++) {
  if ($i==4) {
    goto abc;
  }
  echo $i;
}
echo "Hello";
abc:
echo "This is a new code";
 ?>
