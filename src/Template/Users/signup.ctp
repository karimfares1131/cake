<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php echo $this->element('sidemenus/side_menu_logged_out'); ?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('create')) ?>
    <?= $this->Form->end() ?>
</div>
