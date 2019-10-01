<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li><?= $this->Html->link(__('List Users'), ['controller'=>'users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('signup'), ['controller'=>'users','action' => 'signup']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller'=>'users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New file'), ['controller'=>'file','action' => 'index']) ?></li>
    </ul>
</nav>