<?php
  if (isset($variable_cookies)) {
    //membuat situasi kondisi terhadap var $variable_cookies
    echo 'Variable cookiesnya "$variable_cookies" nilainya adalah' .$variable_cookies;
    //menuliskan kalimat jika kondisi terpenuhi
  } else {
    echo "Variable cookies belum diterapkan";
    //menuliskan kalimat jika kondisi tidak terpenuhi
  }
?>
