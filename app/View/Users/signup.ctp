<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('username', array('label' => 'Email'));
        echo $this->Form->input('password');
        echo $this->Form->radio('role', array('0' => 'アソビを探したい方', '1' => 'アソビを提供したい方'), array('legend' => false));
    ?></fieldset>
<?php echo $this->Form->end(__('会員登録')); ?>
</div>

