<?php

require_once 'app/init.php';

// User::create([
// 	'username' => 'markopolo',
// 	'email' => 'myaddress@gmail.com',
// 	'public' => 0,
// 	'status' => 1
// ]);

echo 'first user = ' . User::find(1)->username;
