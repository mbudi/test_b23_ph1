<?php
	$servername = "localhost";
	$username	= "root";
	$password	= "";
	$database	= "db_dumb_library";

	$conn = mysql_connect($servername, $username, $password);
	mysql_select_db($database);
	
	$sql	= "SELECT tb_book.id, tb_book.name AS name_book, tb_book.publication_year, tb_category.name AS name_category, tb_writer.name AS name_writer, tb_book.img FROM tb_book LEFT JOIN tb_category ON tb_book.category_id=tb_category.id LEFT JOIN tb_writer ON tb_book.writer_id=tb_writer.id";
	$query	= mysql_query($sql);
	while($r = mysql_fetch_object($query)) {
		$data[] = array(
			'id'	=> $r->id,
			'name'	=> $r->name_book,
			'year'	=> $r->publication_year,
			'category'	=> $r->name_category,
			'writer'	=> $r->name_writer
		);
	}
	mysql_close();
	echo json_encode($data);
	
?>