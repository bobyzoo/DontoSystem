<?php
class View {
    public function load($model, $acao, $data = null) {
        require_once "templates/$model/$acao.php";
    }
}