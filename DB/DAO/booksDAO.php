<?php
require_once("dao.php");
class booksDAO extends BaseDAO {


	function messagesDAO($dbMng) {
		parent::BaseDAO($dbMng);
	}
	
	public function getBooks(){
	
	
		$sqlQuery = "SELECT *";
		$sqlQuery .= "FROM book ";
		$sqlQuery .= "ORDER BY book.title ";		
		
		$result = $this->getDbManager()->executeSelectQuery($sqlQuery);
		return $result;
		
	}
	
	public function insertNewBook($author, $title, $genre){
		$sqlQuery = "INSERT INTO book (author, title, genre) ";
		$sqlQuery .= "VALUES ('$author', '$title', '$genre')";
	
		$result = $this->getDbManager()->executeQuery($sqlQuery);
			
		return $result;
	}
	
	public function updateBook($b_id, $author, $title, $genre) {
		$sqlQuery = "UPDATE book SET author='$author', title='$title', genre='$genre' where id = '$b_id' ";
		$result = $this->getDbManager()->executeQuery($sqlQuery);
		return $result;
	}
	
	public function deleteBook($b_id) {
		$sqlQuery = "DELETE FROM book WHERE id='$b_id'";
		$result = $this->getDbManager()->executeQuery($sqlQuery);
		return $result;
	}
}
?>