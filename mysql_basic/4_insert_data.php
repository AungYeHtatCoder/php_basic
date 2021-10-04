<?php
require_once('1_connection.php');


$sql = "INSERT INTO users(firstname, lastname, email) VALUES('Ashin', 'Indavaudha','moyokhing@gnail.com'),
('Myo', 'Khing','ashin@gnail.com'),
('Lin', 'thu','linthu@gnail.com'),
('Mg', 'AungThu','angthu@gnail.com'),
('Ko', 'Myo','komyo@gnail.com')
";

if ($conn->query($sql) === TRUE) {
 	echo "users table ထဲကို ဒေတာထဲ့တာ အောင်မြင်ပါသည်";
 }else{
 	echo "ဒေတာထဲ့တာ မအောင်မြင်ပါ" . "<br>" .$conn->error;
 }