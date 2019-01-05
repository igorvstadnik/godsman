<div class="header">
    <div class="section">

        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
        <?php endif; ?>

        <?php print render($page['header']); ?>

    </div>
</div>

<?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation">
        <div class="section">
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
        </div>
    </div>
<?php endif; ?>

<?php if ($breadcrumb): ?>
    <div class="breadcrumb">
        <?php print $breadcrumb; ?>
    </div>
<?php endif; ?>

<?php print $messages; ?>

<div id="main-wrapper">
    <div id="main">

        <div id="content" class="column">
            <div class="section">

                <?php if ($page['highlighted']): ?>
                    <div class="highlighted">
                        <?php print render($page['highlighted']); ?>
                    </div>
                <?php endif; ?>

                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1 class="title" id="page-title">
                        <?php print $title; ?>
                    </h1>
                <?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs">
                        <?php print render($tabs); ?>
                    </div>
                <?php endif; ?>
                <?php print render($page['help']); ?>

                <?php if ($action_links): ?>
                    <ul class="action-links">
                        <?php print render($action_links); ?>
                    </ul>
                <?php endif; ?>

                <?php print render($page['content']); ?>

            </div>
        </div>

        <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-first" class="column sidebar">
                <div class="section">
                    <?php print render($page['sidebar_first']); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($page['sidebar_second']): ?>
            <div id="sidebar-second" class="column sidebar">
                <div class="section">
                    <?php print render($page['sidebar_second']); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</div>

<?php if ($page['footer']): ?>
    <div class="footer">
        <div class="section">
            <?php print render($page['footer']); ?>
        </div>
    </div>
<?php endif; ?>