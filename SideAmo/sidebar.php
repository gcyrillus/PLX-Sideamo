<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside>
		<!-- exmples ajout formulaire de recherche -->
		<!--
		<form method="post" action="my static search">
			<input type="text" placeholder="Search..." />
			<input type="submit" value="🔎︎" />
		</form>
		-->
<!-- exemple avec plxMySearch -->
<?php eval($plxShow->callHook('MySearchForm')) ?>
<script>
	let searchIpt = document.querySelector("body>aside input[type='submit'][class='searchbutton']");
	searchIpt.value="🔎︎";
</script>
	
  		<img src="<?php $plxShow->template(); ?>/img/logo.png" id="aside-logo" alt="logo" title="logo">
		<h3>
			<?php $plxShow->lang('CATEGORIES'); ?>
		</h3>

		<ul class="cat-list unstyled-list">
			<?php $plxShow->catList('','<li id="#cat_id" class="#cat_status"><a href="#cat_url" title="#cat_name">#cat_name <span>(#art_nb)</span></a></li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('LATEST_ARTICLES'); ?>
		</h3>

		<ul class="lastart-list unstyled-list">
			<?php $plxShow->lastArtList('<li class="#art_status"><a href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>

		<details>
			<summary><?php $plxShow->lang('TAGS'); ?></summary>
			<?php $plxShow->tagList('<span class="tag #tag_size #tag_status"><a class="" href="#tag_url" title="#tag_name">#tag_name</a></span>', 10); ?>
		</details> 


		<h3>
			<?php $plxShow->lang('LATEST_COMMENTS'); ?>
		</h3>

		<ul class="lastcom-list unstyled-list">
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('ARCHIVES'); ?>
		</h3>

		<ul class="arch-list unstyled-list">
			<?php $plxShow->archList('<li id="#archives_id" class="#archives_status"><a href="#archives_url" title="#archives_name">#archives_name <span>(#archives_nbart)</span></a> </li>'); ?>
		</ul>
		<?php  if($plxShow->plxMotor->aConf['enable_rss']) { ?>
		<h3> Fils RSS </h3>
		<ul>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>"><?php $plxShow->lang('ARTICLES'); ?></a></li>

		<?php if($plxShow->plxMotor->aConf['enable_rss_comment']) { ?>
			<li><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>"><?php $plxShow->lang('COMMENTS'); ?></a></li>

		<?php  } ?>
		</ul>
		<?php } ?>
	</aside>