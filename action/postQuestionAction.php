<?php
require_once("action/commonAction.php");
require_once("dba/MySQLrequests.php");



class postQuestionAction extends commonAction {

	public function __construct() {

	}
	protected function executeAction() {
		if (commonAction::isLoggedIn()) {
			

			$postTitle=$_POST['questiontopic']; 
			$postContent=$_POST['content'];
			$creatorID = $_SESSION["user_id"];
			if (isset($a) && isset($b)){

				$connection=connection::getConnection();

				$statement = $connection->prepare("INSERT INTO post(post_title, post_content, post_creator) VALUES(?,?,?)");

				$statement->bindParam(2, $postContent);
				$statement->bindParam(3, $creatorID);

				$statement->setFetchMode(PDO::FETCH_ASSOC);
				$statement->execute();
				$info = $statement->fetchAll();
				$liked=$info;

				connection::closeConnection();
			}
		}
		else
			header("location:signIn.php");
		
	}
}
