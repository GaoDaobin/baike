<?php
$params = 'grant_type=client_credentials' + '&client_id=ADewPyPfKKb7yIm8gjS2EeqL'+'&client_secret=OyrUcDGKnTwtjb46HbG9S2VPZ6phybCe';
$url = 'https://aip.baidubce.com/oauth/2.0/token?' + $params;
$html = file_get_contents($url);
echo $html;
