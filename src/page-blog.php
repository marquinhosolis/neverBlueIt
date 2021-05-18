<?php
/*
Template Name: Blog Page
*/
?>
<?php 
	if($_GET['search']){
		$search = $_GET['search'];
	}
?>
<?php get_header(); ?>
	<section class="coverBlog">
		<div class="container">
			<h1 class="titleAnimated">Blog</h1>
			<div class="blogFilter">
				<a href="#" class="filterDropdown">
					Filter by category <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>
                <ul>
                    <?php wp_list_categories( array(
                        'orderby'    => 'name',
                        'hide_title_if_empty' => true,
                        'title_li' => ''
                    ) ); ?> 
                </ul>
			</div>
			<div class="blogSearch">
				<form action="#">
					<input type="search" name="search" placeholder="Search">
					<button type="submit"><i class="fa fa-play-circle" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</section>
	<?php
		if($search){ ?>
			<section class="searchResult">
				<div class="container">
					<h2>Showing posts for: <span>"<?php echo $search; ?>"</span></h2>
				</div>
			</section>
		<?php }
	?>
	<section class="blogArticles">
		<div class="container">
            <div class="homeBlogArticles">
                <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => -1,
                        'category'       => single_cat_title(''),
                        's'              => $search
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
							$featured_img = get_the_post_thumbnail_url(''); 
							?>
                            <article>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="homeBlogArticleImage" style="background-image: url(<?php echo $featured_img; ?>);">
                                        <div class="content"></div>
                                    </div>
                                    <div class="homeBlogArticleText">
                                        <div class="date">
                                            <?php the_date(); ?>
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <p>
                                        <?php the_excerpt(); ?> 
                                        </p>
                                        <a href="<?php the_permalink(); ?>" class="hvr-forward">Read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </a>
                            </article>
                        <?php }
                    } 
                    wp_reset_postdata();
                ?>
            </div>
            <a href="#" class="btn-orange hvr-hang loadMoreBlogs">Load more blogs</a>
        </div>
	</section>
<?php get_footer(); ?>