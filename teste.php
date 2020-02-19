<?php
require_once "Model/Connection.php";
require_once "Model/AgendaDAO.php";
echo '<pre>';
print_r(AgendaDAO::all());
echo '</pre>';
