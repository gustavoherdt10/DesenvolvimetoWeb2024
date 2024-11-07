<?php

class htmlTable extends htmlElement {
    private $numColunas;
    private $numLinhas;

    public function renderHtml () {
        $html = "<table>"
                    $this->getTableBody
                "</table>"
    }
}

?>