<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog Posts</h3>
                </div>
                <div class="card-body">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <article class="post">
                            <div class="row">
                                <?php if(has_post_thumbnail()): ?>
                                <div class="col-md-3">
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h2>
                                    <a href="<?php echo the_permalink(); ?>">
                                        <?php echo the_title(); ?>
                                    </a>
                                    </h2>
                                    <p class="meta">
                                        Posted at
                                        <?php the_time(); ?> on
                                        <?php the_date(); ?> by
                                        <strong><?php the_author(); ?></strong>
                                    </p>
                                    <div class="excerpt">
									<?php echo get_the_excerpt();?>
									</div>
                                    <br>
                                    <a class="btn btn-primary" type="button" href="<?php the_permalink(); ?>">
                                    Read More &raquo;
                                    </a>
                                </div>
                                <?php else: ?>
                                <div class="col-md-12">
                                                <h2>
													<a href="<?php echo the_permalink(); ?>">
														<?php echo the_title(); ?>
													</a>
												</h2>

												<p class="meta">
												Posted at 
												<?php the_time(); ?> on
												<?php the_date(); ?> by
												 <strong><?php the_author(); ?></strong>
												</p>

												<div class="excerpt">
												<?php echo get_the_excerpt(); ?>
												</div>
												<br>
												<a class="btn btn-primary" type="button" href="<?php the_permalink(); ?>">
												Read More &raquo;
												</a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php if(is_active_sidebar('sidebar')): ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
        