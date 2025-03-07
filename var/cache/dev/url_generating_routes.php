<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\IndexController::home'], [], [['text', '/']], [], [], []],
    'articleSave' => [[], ['_controller' => 'App\\Controller\\IndexController::save'], [], [['text', '/article/save']], [], [], []],
    'new_article' => [[], ['_controller' => 'App\\Controller\\IndexController::new'], [], [['text', '/article/new']], [], [], []],
    'article_show' => [['id'], ['_controller' => 'App\\Controller\\IndexController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'edit_article' => [['id'], ['_controller' => 'App\\Controller\\IndexController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/edit']], [], [], []],
    'delete_article' => [['id'], ['_controller' => 'App\\Controller\\IndexController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/delete']], [], [], []],
    'new_category' => [[], ['_controller' => 'App\\Controller\\IndexController::newCategory'], [], [['text', '/category/newCat']], [], [], []],
    'article_par_cat' => [[], ['_controller' => 'App\\Controller\\IndexController::articlesParCategorie'], [], [['text', '/art_cat/']], [], [], []],
    'article_par_prix' => [[], ['_controller' => 'App\\Controller\\IndexController::articlesParPrix'], [], [['text', '/art_prix/']], [], [], []],
    'App\Controller\IndexController::home' => [[], ['_controller' => 'App\\Controller\\IndexController::home'], [], [['text', '/']], [], [], []],
    'App\Controller\IndexController::save' => [[], ['_controller' => 'App\\Controller\\IndexController::save'], [], [['text', '/article/save']], [], [], []],
    'App\Controller\IndexController::new' => [[], ['_controller' => 'App\\Controller\\IndexController::new'], [], [['text', '/article/new']], [], [], []],
    'App\Controller\IndexController::show' => [['id'], ['_controller' => 'App\\Controller\\IndexController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    'App\Controller\IndexController::edit' => [['id'], ['_controller' => 'App\\Controller\\IndexController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/edit']], [], [], []],
    'App\Controller\IndexController::delete' => [['id'], ['_controller' => 'App\\Controller\\IndexController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article/delete']], [], [], []],
    'App\Controller\IndexController::newCategory' => [[], ['_controller' => 'App\\Controller\\IndexController::newCategory'], [], [['text', '/category/newCat']], [], [], []],
    'App\Controller\IndexController::articlesParCategorie' => [[], ['_controller' => 'App\\Controller\\IndexController::articlesParCategorie'], [], [['text', '/art_cat/']], [], [], []],
    'App\Controller\IndexController::articlesParPrix' => [[], ['_controller' => 'App\\Controller\\IndexController::articlesParPrix'], [], [['text', '/art_prix/']], [], [], []],
];
