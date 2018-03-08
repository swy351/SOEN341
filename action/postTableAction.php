<?php

require_once("action/commonAction.php");
require_once("dba/MySQLrequests.php");

class postTableAction extends commonAction{

	const NB_POSTS_TO_GET = 10;
	const WHERE_TO_START_GETTING_POSTS = 0;

	public function __construct() {
		parent::__construct(commonAction::$VISIBILITY_PUBLIC);
	}

	protected function executeAction() {
		if (isset($_REQUEST["post_id"])) {
			$_SESSION["post_id"]=$_REQUEST["post_id"];
			header("location:viewPost.php");}


			$this->posts=MySQLrequests::getLastPosts(self::NB_POSTS_TO_GET,self::WHERE_TO_START_GETTING_POSTS);
	}

	public function getUserByID($id){
		return MySQLrequests::getUserByID($id);
	}
}
