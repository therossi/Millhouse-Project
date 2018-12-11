<?php foreach($index_posts as $post): ?>
		<!-- <div class="col-12 col-md-6 col-lg-4 post-box pl-0 pr-0"> -->
             <div class="card">
               <a href="../views/single_post.php?post_id=<?=$post["id"]?>">
			   <img class="card-img-top" src="../images/<?= $post["image"]; ?>" alt="Blogpost image">
               </a>

             <div class="card-body">
			   <h2 class="card-title"><?= $post["title"]; ?></h2>

			   <?php $str = $post["description"];
				if( strlen($str) > 150) {
   				$str = explode( "\n", wordwrap($str, 150));
   				$str = $str[0] . '...';
				} ?>

				<p class="card-text"><?= $str; ?></p>

				<a href="../views/single_post.php?post_id=<?=$post["id"]?>">Read more...</a>

				<hr>
				<div class="date-text">
				<?php echo "Posted: " . $post["post_date"] . "<br>"; ?>
				</div>
				<p class="card-text"><small class="text-muted">By <?= $post["created_by"]; ?></small></p>


                 </div>
				<?php if($user->isAdmin()){?>

				<div class="card-footer">

                    <i class="fas fa-wrench"><a href="../views/edit_post.php?post_id=<?=$post["id"]?>" class="btn btn-default"><span>Edit post</span></a></i>

      			<i class="far fa-trash-alt"><a href="../index.php?delete_post=<?=$post["id"]?>" class="btn btn-default"><span>Delete post</span></a></i>

    	     	</div>

				<?php } ?>

             </div>
             <!-- </div> -->



<?php endforeach;?>
