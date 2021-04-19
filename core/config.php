<?php

/*
*----------------------------------------------------------------
*  @description: Configuração do display error
*----------------------------------------------------------------
*/

// habilitando o log pra teste
//DISPLAY_ERRORS = true | false
const DISPLAY_ERRORS = true;

if (DISPLAY_ERRORS == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

/*
*----------------------------------------------------------------
*  @description: dominio da aplicação
*----------------------------------------------------------------
*/
const BASE_URL = 'http://localhost/~dionesio/youfitness/app';
// const BASE_URL = 'https://yfitness.com.br/app';

/*
*----------------------------------------------------------------
*  @description: Configurando API
*----------------------------------------------------------------
*/

const URL_API = 'http://localhost/~dionesio/youfitness/api';
// const URL_API = 'https://yfitness.com.br/api';
const PORT_API = '';
