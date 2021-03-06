<?php if (!defined('APPLICATION')) exit(); ?>
<div class="header-block">
    <h1><?php echo $this->data('Title'); ?></h1>
    <?php echo anchor(t('Add Item'), '/dashboard/settings/bans/add', array('class' => 'btn btn-primary js-modal')); ?>
</div>
<?php
helpAsset(sprintf(t('About %s'), t('Banning')), t('You can ban IP addresses, email domains, and words from usernames using this tool.'));

echo '<noscript><div class="Errors"><ul><li>', t('This page requires Javascript.'), '</li></ul></div></noscript>';
echo $this->Form->open();
echo '<div id="BansTable">';
include dirname(__FILE__).'/banstable.php';
echo '</div id="BansTable">';

echo $this->Form->close();
