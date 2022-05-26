<?php
// Arquivo com variáveis globais que podem ser alteradas quando o sistema for para produção

putenv('DISPLAY_ERRORS_DETAILS'. false); // Mostra os detalhes dos erros. Quando for para produção display erros vira false.

putenv('BANCO_SQLSVR_SERVER='); // Servidor/Host
putenv('BANCO_SQLSVR_DATABASE='); // Nome do banco
putenv('BANCO_SQLSVR_USER='); // Usuário do banco
putenv('BANCO_SQLSVR_PASSWORD='); // Senha do banco