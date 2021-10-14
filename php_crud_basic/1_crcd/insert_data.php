<?php
require_once('1_connection.php');


$sql = "INSERT INTO employees(name, address, salary) VALUES('AshinIndavudha', 'Mandaly','500000'),
('MyoKhing', 'Yangon','200000'),
('Linthu', 'Naypyidaw','220000'),
('MgAungThu', 'PyinOolwin','5213'),
('KoMyo', 'MoeKe','25487')
";

if ($conn->query($sql) === TRUE) {
 	echo "users table ထဲကို ဒေတာထဲ့တာ အောင်မြင်ပါသည်";
 }else{
 	echo "ဒေတာထဲ့တာ မအောင်မြင်ပါ" . "<br>" .$conn->error;
 }