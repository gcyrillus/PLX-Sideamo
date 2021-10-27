<?php if (!defined('PLX_ROOT')) exit; ?>
	<footer>
		<ul class="menu">
			<li>
				<?php $plxShow->mainTitle('link'); ?> - <?php $plxShow->subTitle(); ?> &copy; 2018 - <?php echo date('Y') ?>
			</li>
			<li>
				<?php $plxShow->lang('POWERED_BY') ?>&nbsp;<a href="<?= PLX_URL_REPO?>" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
				<?php $plxShow->lang('IN') ?>&nbsp;<?php $plxShow->chrono(); ?>&nbsp;
				<?php $plxShow->httpEncoding() ?>&nbsp;-
				<a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a>
			</li>
			<li><a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a></li>
			</ul>
	</footer>	
</body>
</html>
