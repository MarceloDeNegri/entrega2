<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'habitos', 'where'=>['id' => '[0-9]+']],function() {

        Route::any('',                      ['as'=>'habitos',           'uses'=>'HabitosController@index']);
        Route::get('create',                ['as'=>'habitos.create',    'uses'=>'HabitosController@create']);
        Route::get('relatorio',             ['as'=>'habitos.relatorio',    'uses'=>'HabitosController@geraPdf']);
        Route::get('{id}/destroy',          ['as'=>'habitos.destroy',   'uses'=>'HabitosController@destroy']);
        Route::get('{id}/edit',             ['as'=>'habitos.edit',      'uses'=>'HabitosController@edit']);
        Route::put('{id}/update',           ['as'=>'habitos.update',    'uses'=>'HabitosController@update']);
        Route::post('store',                ['as'=>'habitos.store',     'uses'=>'HabitosController@store']);

        });

        Route::group(['prefix'=>'especializacaos', 'where'=>['id' => '[0-9]+']],function() {

            Route::any('',                      ['as'=>'especializacaos',           'uses'=>'especializacaoController@index']);
            Route::get('create',                ['as'=>'especializacaos.create',    'uses'=>'especializacaoController@create']);
            Route::get('relatorio',             ['as'=>'especializacaos.relatorio',    'uses'=>'especializacaoController@geraPdf']);
            Route::get('{id}/destroy',          ['as'=>'especializacaos.destroy',   'uses'=>'especializacaoController@destroy']);
            Route::get('{id}/edit',             ['as'=>'especializacaos.edit',      'uses'=>'especializacaoController@edit']);
            Route::put('{id}/update',           ['as'=>'especializacaos.update',    'uses'=>'especializacaoController@update']);
            Route::post('store',                ['as'=>'especializacaos.store',     'uses'=>'especializacaoController@store']);

            });

            Route::group(['prefix'=>'convenios', 'where'=>['id' => '[0-9]+']],function() {

                Route::any('',                      ['as'=>'convenios',           'uses'=>'convenioController@index']);
                Route::get('create',                ['as'=>'convenios.create',    'uses'=>'convenioController@create']);
                Route::get('{id}/destroy',          ['as'=>'convenios.destroy',   'uses'=>'convenioController@destroy']);
                Route::get('{id}/edit',             ['as'=>'convenios.edit',      'uses'=>'convenioController@edit']);
                Route::put('{id}/update',           ['as'=>'convenios.update',    'uses'=>'convenioController@update']);
                Route::post('store',                ['as'=>'convenios.store',     'uses'=>'convenioController@store']);

                });

                Route::group(['prefix'=>'agendamentos', 'where'=>['id' => '[0-9]+']],function() {

                    Route::get('',                      ['as'=>'agendamentos',           'uses'=>'AgendamentoController@index']);
                    Route::get('create',                ['as'=>'agendamentos.create',    'uses'=>'AgendamentoController@create']);
                    Route::get('{id}/destroy',          ['as'=>'agendamentos.destroy',   'uses'=>'AgendamentoController@destroy']);
                    Route::get('{id}/edit',             ['as'=>'agendamentos.edit',      'uses'=>'AgendamentoController@edit']);
                    Route::put('{id}/update',           ['as'=>'agendamentos.update',    'uses'=>'AgendamentoController@update']);
                    Route::post('store',                ['as'=>'agendamentos.store',     'uses'=>'AgendamentoController@store']);


                });

                Route::group(['prefix'=>'atendimentos', 'where'=>['id' => '[0-9]+']],function() {

                    Route::get('',                      ['as'=>'atendimentos',           'uses'=>'AtendimentoController@index']);
                    Route::get('{id}/create',           ['as'=>'atendimentos.create',    'uses'=>'AtendimentoController@create']);
                    Route::get('{id}/destroy',          ['as'=>'atendimentos.destroy',   'uses'=>'AtendimentoController@destroy']);
                    Route::get('{id}/edit',             ['as'=>'atendimentos.edit',      'uses'=>'AtendimentoController@edit']);
                    Route::put('{id}/update',           ['as'=>'atendimentos.update',    'uses'=>'AtendimentoController@update']);
                    Route::post('store',                ['as'=>'atendimentos.store',     'uses'=>'AtendimentoController@store']);


                });

                Route::group(['prefix'=>'prontuarios','where'=>['id' => '[0-9]+']],function() {

                    Route::get('',                      ['as'=>'prontuarios',           'uses'=>'ProntuarioController@index']);
                    Route::get('{id}/create',           ['as'=>'prontuarios.create',    'uses'=>'ProntuarioController@create']);
                    Route::get('{id}/destroy',          ['as'=>'prontuarios.destroy',   'uses'=>'ProntuarioController@destroy']);
                    Route::get('{id}/edit',             ['as'=>'prontuarios.edit',      'uses'=>'ProntuarioController@edit']);
                    Route::put('{id}/update',           ['as'=>'prontuarios.update',    'uses'=>'ProntuarioController@update']);
                    Route::post('store',                ['as'=>'prontuarios.store',     'uses'=>'ProntuarioController@store']);
                    Route::get('{id}/delete',           ['as'=>'prontuarios.delete',    'uses'=>'ProntuarioController@delete']);
                    Route::get('{id}/detail',           ['as'=>'prontuarios.detail',    'uses'=>'ProntuarioController@detail']);
                    Route::get('{id}/pdf',              ['as'=>'prontuarios.pdf',       'uses'=>'ProntuarioController@relatorio']);

                });

            Route::group(['prefix'=>'responsaveis', 'where'=>['id' => '[0-9]+']],function() {

                Route::any('',                      ['as'=>'responsaveis',           'uses'=>'responsavelController@index']);
                Route::get('create',                ['as'=>'responsaveis.create',    'uses'=>'responsavelController@create']);
                Route::get('relatorio',             ['as'=>'responsaveis.relatorio',    'uses'=>'responsavelController@geraPdf']);
                Route::get('{id}/destroy',          ['as'=>'responsaveis.destroy',   'uses'=>'responsavelController@destroy']);
                Route::get('{id}/edit',             ['as'=>'responsaveis.edit',      'uses'=>'responsavelController@edit']);
                Route::put('{id}/update',           ['as'=>'responsaveis.update',    'uses'=>'responsavelController@update']);
                Route::post('store',                ['as'=>'responsaveis.store',     'uses'=>'responsavelController@store']);

                });

            Route::group(['prefix'=>'pacientes', 'where'=>['id' => '[0-9]+']],function() {

                Route::any('',                      ['as'=>'pacientes',           'uses'=>'pacienteController@index']);
                Route::get('create',                ['as'=>'pacientes.create',    'uses'=>'pacienteController@create']);
                Route::get('relatorio',             ['as'=>'pacientes.relatorio',    'uses'=>'pacienteController@geraPdf']);
                Route::get('{id}/destroy',          ['as'=>'pacientes.destroy',   'uses'=>'pacienteController@destroy']);
                Route::get('{id}/edit',             ['as'=>'pacientes.edit',      'uses'=>'pacienteController@edit']);
                Route::put('{id}/update',           ['as'=>'pacientes.update',    'uses'=>'pacienteController@update']);
                Route::post('store',                ['as'=>'pacientes.store',     'uses'=>'pacienteController@store']);

                });

        Route::group(['prefix'=>'historicos', 'where'=>['id' => '[0-9]+']],function() {

            Route::get('',                      ['as'=>'historicos',           'uses'=>'HistoricosController@index']);
            Route::get('create',                ['as'=>'historicos.create',    'uses'=>'HistoricosController@create']);
            Route::get('{id}/destroy',          ['as'=>'historicos.destroy',   'uses'=>'HistoricosController@destroy']);
            Route::get('{id}/edit',             ['as'=>'historicos.edit',      'uses'=>'HistoricosController@edit']);
            Route::put('{id}/update',           ['as'=>'historicos.update',    'uses'=>'HistoricosController@update']);
            Route::post('store',                ['as'=>'historicos.store',     'uses'=>'HistoricosController@store']);

            Route::get('createMaster',          ['as'=>'historicos.createMaster', 'uses'=>'HistoricosController@createMaster']);
            Route::post('masterDetail',         ['as'=>'historicos.masterDetail', 'uses'=>'HistoricosController@masterDetail']);


        });

        Route::group(['prefix'=>'medicos', 'where'=>['id' => '[0-9]+']],function() {

            Route::get('',                      ['as'=>'medicos',           'uses'=>'medicoController@index']);
            Route::get('create',                ['as'=>'medicos.create',    'uses'=>'medicoController@create']);
            Route::get('{id}/destroy',          ['as'=>'medicos.destroy',   'uses'=>'medicoController@destroy']);
            Route::get('{id}/edit',             ['as'=>'medicos.edit',      'uses'=>'medicoController@edit']);
            Route::put('{id}/update',           ['as'=>'medicos.update',    'uses'=>'medicoController@update']);
            Route::post('store',                ['as'=>'medicos.store',     'uses'=>'medicoController@store']);

            Route::get('createMaster',          ['as'=>'medicos.createMaster', 'uses'=>'medicoController@createMaster']);
            Route::post('masterDetail',         ['as'=>'medicos.masterDetail', 'uses'=>'medicoController@masterDetail']);


        });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
