<?php
$mysqli = new mysqli("localhost:3306", "root", "", "skillup");
$mysqli->query("insert into users (email, password) values ('ksjqbxkxb','skj');");