<?php include __DIR__.'/header.php'; ?>
	<main>
					<article class="article">
						<header>
							<h2>
								<?php $plxShow->lang('ERROR'); ?>
							</h2>
						</header>
						<p>
							<?php $plxShow->erreurMessage(); ?>
						</p>
					</article>
				</div>
	</main>
<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>

