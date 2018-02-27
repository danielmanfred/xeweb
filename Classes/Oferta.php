<?php
require_once('Item.php');

class Oferta {
    private $itens;
    
    public function adicionarItem(Item $item) {
        $this->itens[] = $item;
    }
    
    public function apresentarItens() {
        foreach ($this->itens as $item) {
            echo '<pre>';
            echo $item->getNome() . '<br>';
            echo $item->getCategoria()->getNome() . '<br>';
            echo '</pre>';
        }
    }
}
