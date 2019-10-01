<?php $this->set('title_for_layout',"Me contacter"); ?>
<?php $this->Form->create('contact'); ?>
    <?php $this->Form->input('name',array('label'=>"votre nom"); ?>
    <?php $this->Form->input('email',array('label'=>"votre email"); ?>
    <?php $this->Form->input('content',array('label'=>"votre message"); ?>
<?php $this->Form->end('Envoyer'); ?>