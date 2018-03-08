<?php 
require_once("action/viewPostAction.php");

$action = new viewPostAction();
$action->execute();
require_once("partial/header.php");
?>

<div class="background container">
	<div class="row">
		<div class="col-md-2"></div>

		<div class="col-md-8">
			<div class="row mainPost">
				<div class="media ">
					<img class="d-flex mr-3 col user-icon" src="images/captain.png" alt="Generic placeholder image">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><?=$action->postCreator["user_name"]?></strong> <span class="text-muted">created on <?=$action->post["post_creation_time"]?></span>

						</div>
						<div class="media-body">

							<?=$action->post["post_content"]?>
							<div class="interuptLine"> </div>

							<div class="row">
								<div class="col">
									<button type="button" class="btn btn-primary btn-sm"><i class="fa fa-thumbs-up"></i>Like | <?=$action->post["post_nb_likes"]?></button>
									<button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-down"></i> </button>
								</div>							
								<div class="col">

									<a href="https://facebook.com/" target="_blank" class="button pull-right"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="https://google.com/" target="_blank" class="button pull-right"><i class="fa fa-google" aria-hidden="true"></i></a>
									<a href="https://twitter.com/" target="_blank" class="button pull-right"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								</div>
							</div>
							<div class="interuptLine"> </div>
							<div class="row">
								<div class="col-2">
									<img class="align-self-center mr-3 user-icon" src="images/captain.png" alt="Generic placeholder image">
								</div>
								<form class="form col" action="commentDBA.php" method="post">
									<input type="hidden" name="parent_id" value="post"></input>
									<div class="form-group ">
										<label for="commentContent"></label>
										<textarea class="form-control" name="commentContent"  rows="3" placeholder="Write comments..."></textarea>
									</div> 
									<button type="submit" class="btn btn-primary">Comment</button>


								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php
			foreach ($action->allComments as $comment) {

				$allSubcomments=$action->getSubComments($comment["comment_id"]);
				$commentCreator = $action->getUserByID($comment["comment_creator"]);
				?>
				<div class="row ">
					<div class="media "><div class="col">
						<img class="d-flex mr-3 user-icon" src="images/captain.png" alt="Generic placeholder image">
						<img class="d-flex mr-3 no1-icon" src="images/no1.png" alt="Generic placeholder image">
						
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong><?=$commentCreator["user_name"]?></strong> <span class="text-muted">commented on <?=$comment["comment_creation_time"]?></span>

						</div>
						<div class="media-body">

							<?=$comment["comment_content"]?>
							<div class="col secondaryLikes">
								<button type="button" class="btn btn-primary btn-sm "><i class="fa fa-thumbs-up "></i>Like | <?=$comment["comment_nb_likes"]?></button>
								<button type="button" class="btn btn-secondary btn-sm "><i class="fa fa-thumbs-down "></i> </button>
							</div>	
							<?php 
							foreach ($allSubcomments as $subComment) {
								$subCommentCreator = $action->getUserByID($subComment["comment_creator"]);
								?>

								<div class="row">
									<div class="media no-border">
										<img class="d-flex mr-3" src="images/captain.png" alt="Generic placeholder image">
										<div class="panel panel-default">
											<div class="panel-heading">
												<strong><?=$subCommentCreator["user_name"]?></strong> <span class="text-muted">commented on <?=$subComment["comment_creation_time"]?></span>
											</div>
											<div class="media-body">
												<?=$subComment["comment_content"]?>

												<div class="col secondaryLikes">
													<button type="button" class="btn btn-primary btn-sm "><i class="fa fa-thumbs-up "></i>Like | <?=$subComment["comment_nb_likes"]?></button>
													<button type="button" class="btn btn-secondary btn-sm "><i class="fa fa-thumbs-down "></i> </button>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<?php
							}
							?>
							<div class="interuptLine"> </div>
							<div class="row">
								<div class="col-2">
									<img class="align-self-center mr-3 user-icon" src="images/captain.png" alt="Generic placeholder image">
								</div>
								<form class="form col" action="commentDBA.php" method="post">
									<input type="hidden" name="parent_id" value="<?=$comment["comment_id"]?>"></input>
    								<div class="form-group ">
										<label for="commentContent"></label>
										<textarea class="form-control" name="commentContent" rows="3" placeholder="Write comments..."></textarea>
									</div> 
									<button type="submit" class="btn btn-primary">Comment</button>
								</form>
							</div>
						</div>

						

					</div>
				</div>
			</div>
			<?php 
		}
		?>

	</div>
</div>
</div>
<div class="col-md-2"></div>

<?php
require_once("partial/footer.php");
?>