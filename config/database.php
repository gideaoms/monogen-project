<?php

return [
	/*
	|
	|----------------------------
	| PDO Fetch
	|----------------------------
	|Configura o Fetch padrão do banco de dados
	|
	*/
	'fetch' => PDO::FETCH_CLASS,
	/*
	|
	|----------------------------
	| Banco de dados padrão
	|----------------------------
	| Define o banco de dados padrão do sistema
	|
	*/
	'default' => 'mysql',
	/*
	|
	|----------------------------
	| Conexões disponíveis
	|----------------------------
	| Lista as conexões que o sistema suporta
	|
	*/
	'connections' => [
		'mysql' => [
			'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'example',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
		]
	]
];