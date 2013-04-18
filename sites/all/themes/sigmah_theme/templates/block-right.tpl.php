<?php if(!$is_contact) : ?>
<?php if (!empty($block->subject) && ($block->subject == 'My groups' || $block->subject == 'Forums')){ ?>
	<div class="forum_list">
		<h5><a href="og"><?php echo strip_tags($block->subject); ?></a></h5>
		<div class="content">
			<?php print $block->content; ?>
		</div>
<form action="/sigmah-website/admin" accept-charset="UTF-8" method="post" target="_self">
 <input type="text" maxlength="128" name="custom_search_blocks_form_1" id="edit-custom-search-blocks-form-1-1"  class="pravinpatil">
<input type="hidden" name="delta" id="edit-delta" value="1">
<input type="hidden" name="form_build_id" id="form-43893f3c46014c27af1d281d5ab8591d" value="form-43893f3c46014c27af1d281d5ab8591d">
<input type="hidden" name="form_token" id="edit-custom-search-blocks-form-1-form-token" value="0688842ecd0f57a725d9e1206d5362cf">
<input type="hidden" name="form_id" id="edit-custom-search-blocks-form-1" value="custom_search_blocks_form_1">
<input type="hidden" name="default_text" id="edit-default-text" value="" class="default-text">
<input type="submit" name="op" id="forumButton" value="Search" name="recherche" >
</form>
		<?php print $edit_links; ?>
	</div> <!-- /block -->
<?php }else{ ?>
	<div class="espace">
		<?php if (!empty($block->subject)): ?>
		  <h5 class="title block-title"><?php print strip_tags($block->subject); ?></h5>
		<?php endif; ?>

		<div class="espaceMidle">
		  <?php print $block->content; ?>
		</div>

		<?php print $edit_links; ?>
	</div>
<?php } ?>
<?php endif; ?>
