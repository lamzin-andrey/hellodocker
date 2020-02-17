<!--
   index.html
   
   Copyright 2020 Live session user <xubuntu@xubuntu>
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
   
   
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Hello Docker</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.32" />
</head>

<body>
	Hello Docker!! <?php echo date('Y-m-d H:i:s'); ?>
	<p><?php 
		function setConnection() {
			$config = array(
			'test' => array(
				'ip'   => '127.0.0.1',
				'port' => '27017',
				'name' => 'hello2020',
			),
			'dev' => array(
				'ip'   => '192.168.0.253',
				'name' => 'basename',
				'port' => '27017'
			));
			$is_test = true;
			$server = $is_test ? 'test' : 'dev';
			$host = $config[$server]['ip'];
			$port = $config[$server]['port'];
			$dbname   = $config[$server]['name'];
			
			
			$manager = new MongoDB\Driver\Manager("mongodb://172.16.0.14:27017");
			$filter = ['id' => 2];
			$options = [];
			/*$options = [
				'projection' => ['_id' => 0],
				'sort' => ['x' => -1],
			];*/
			$query = new MongoDB\Driver\Query($filter, $options);
			$cursor = $manager->executeQuery('hello2020.goods', $query);
			

			foreach ($cursor as $entry) {
				var_dump($entry);
			}
		}
		
		//phpinfo();
		setConnection();
	?>
	
	<?php throw new Exception('Hello XDebug'); ?>
</body>

</html>
