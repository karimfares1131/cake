<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('login'), ['controller'=>'users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('signup'), ['controller'=>'users','action' => 'signup']) ?></li>
       
    </ul>
</nav>