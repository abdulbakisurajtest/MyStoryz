<?php include('../../../mystoryz/conn.php'); ?>
<?php include(ROOT_PATH.'/includes/public_function.php'); ?>
<?php checkAuthor(); ?>
<?php
if(!isset($_GET['title'])):
	header('Location: '.BASE_URL.'/author/manage/');
	exit(0);
endif;
?>
<?php include(ROOT_PATH.'/author/includes/delete.php'); ?>

<?php include(ROOT_PATH.'/includes/html_head.php'); ?>
	<title>MyStoryz | Delete</title>
</head>
<body>
	<div class="container">

		<!-- Display delete prompt -->
		<div class="delete-prompt">
			<h2>Delete Confirmation !!!"</h2>
			<p>
				You are about to delete "<strong style="text-decoration: underline;"><?php echo htmlentities($del_story_title); ?></strong>", the following actions would take place:
			</p>
			<ul>
				<li>all comments and replies under this story would be deleted,</li>
				<li>the data associated with the story would be completely removed from Mystoryz's database, and</li>
				<li>no data will be saved in any archive or recoverable system.</li>
			</ul>
			<form class="del-form" method="post" autocomplete="off">
				<p>
					To proceed, copy and paste the text " <strong class="copy"><?php echo htmlentities($del_author_username); ?>/<?php echo htmlentities($del_story_slug); ?></strong> " into the box below.
				</p>
				<?php include(ROOT_PATH.'/includes/error.php'); ?>
				<label>
					<input style="font-size: inherit;" type="text" name="confirm_text" placeholder="paste text here" required>
				</label><br/>					
				<a href="<?php echo BASE_URL.'/author/manage'; ?>">Cancel</a>
				<button type="submit" name="delete_story" >Delete</button>
			</form>
		</div>
		<!-- Display delete prompt -->
	</div>

<?php include(ROOT_PATH.'/includes/html_bottom.php'); ?>