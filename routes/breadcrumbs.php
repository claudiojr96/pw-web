<?php

/* Home */
Breadcrumbs::for( 'home', function( $breadcrumbs )
{
    $breadcrumbs->push( trans( 'main.home' ), url( '/' ) );
});

Breadcrumbs::for( 'account.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.account' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* News */
Breadcrumbs::for( 'news.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.news' ) );
});

/* Shop */
Breadcrumbs::for( 'shop.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.shop' ) );
});

Breadcrumbs::for( 'shop.mask', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'shop.index' );
});

/* Donate */
Breadcrumbs::for( 'donate.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.donate' ) );
});

/* Vote */
Breadcrumbs::for( 'vote.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.vote' ) );
});

Breadcrumbs::for( 'vote.success', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'vote.index' );
    $breadcrumbs->push( trans( 'vote.success.title' ) );
});

/* Voucher */
Breadcrumbs::for( 'voucher.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.voucher' ) );
});

/* Services */
Breadcrumbs::for( 'services.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.services' ) );
});

/* Ranking */
Breadcrumbs::for( 'ranking.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( trans( 'main.apps.ranking' ) );
});

/*
|--------------------------------------------------------------------------
| Admin Breadcrumbs
|--------------------------------------------------------------------------
*/
Breadcrumbs::for( 'admin.index', function( $breadcrumbs )
{
    $breadcrumbs->push( trans( 'main.dashboard' ), route( 'admin.index' ) );
});

/* Members */
Breadcrumbs::for( 'admin.members.manage', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.members' ) );
    $breadcrumbs->push( trans( 'members.manage' ) );
});

/* System */
Breadcrumbs::for( 'admin.system.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

Breadcrumbs::for( 'admin.system.apps', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'system.apps' ) );
});

Breadcrumbs::for( 'admin.system.widget', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'system.widget' ) );
});

/* News */
Breadcrumbs::for( 'admin.news', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.news' ) );
});

Breadcrumbs::for( 'admin.news.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'news.index' ) );
});

Breadcrumbs::for( 'admin.news.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'news.create' ) );
});

Breadcrumbs::for( 'admin.news.edit', function( $breadcrumbs, \App\Article $article )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'news.edit', ['title' => $article->title] ) );
});

Breadcrumbs::for( 'admin.news.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.news' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Shop */
Breadcrumbs::for( 'admin.shop', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.shop' ) );
});

Breadcrumbs::for( 'admin.shop.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'shop.index' ) );
});

Breadcrumbs::for( 'admin.shop.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'shop.create' ) );
});

Breadcrumbs::for( 'admin.shop.edit', function( $breadcrumbs, \App\ShopItem $item )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'shop.edit', ['name' => $item->name] ) );
});

Breadcrumbs::for( 'admin.shop.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.shop' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Donate */
Breadcrumbs::for( 'admin.donate.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.donate' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Voucher */
Breadcrumbs::for( 'admin.voucher', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.voucher' ) );
});

Breadcrumbs::for( 'admin.voucher.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.voucher' );
    $breadcrumbs->push( trans( 'voucher.index' ) );
});

Breadcrumbs::for( 'admin.voucher.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.voucher' );
    $breadcrumbs->push( trans( 'voucher.create' ) );
});

Breadcrumbs::for( 'admin.voucher.edit', function( $breadcrumbs, \App\Voucher $voucher )
{
    $breadcrumbs->parent( 'admin.voucher' );
    $breadcrumbs->push( trans( 'voucher.edit', ['code' => $voucher->code] ) );
});

/* Vote */
Breadcrumbs::for( 'admin.vote', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.vote' ) );
});

Breadcrumbs::for( 'admin.vote.index', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.vote' );
    $breadcrumbs->push( trans( 'vote.index' ) );
});

Breadcrumbs::for( 'admin.vote.create', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.vote' );
    $breadcrumbs->push( trans( 'vote.create' ) );
});

Breadcrumbs::for( 'admin.vote.edit', function( $breadcrumbs, \App\VoteSite $site )
{
    $breadcrumbs->parent( 'admin.vote' );
    $breadcrumbs->push( trans( 'vote.edit', ['name' => $site->name] ) );
});

/* Services */
Breadcrumbs::for( 'admin.services', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.services' ) );
});

Breadcrumbs::for( 'admin.services.edit', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.services' );
    $breadcrumbs->push( trans( 'services.edit' ) );
});

Breadcrumbs::for( 'admin.services.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.services' );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Ranking */
Breadcrumbs::for( 'admin.ranking.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.ranking' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});

/* Management */
Breadcrumbs::for( 'admin.management', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'main.apps.manage' ) );
});

Breadcrumbs::for( 'admin.management.broadcast', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.broadcast' ) );
});

Breadcrumbs::for( 'admin.management.mailer', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.mailer' ) );
});

Breadcrumbs::for( 'admin.management.forbid', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.forbid' ) );
});

Breadcrumbs::for( 'admin.management.gm.view', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.gm' ) );
});

Breadcrumbs::for( 'admin.management.gm.edit', function( $breadcrumbs, App\User $user )
{
    $breadcrumbs->parent( 'admin.management' );
    $breadcrumbs->push( trans( 'management.edit_gm', ['user' => $user->name] ) );
});

Breadcrumbs::for( 'admin.management.chat.watch', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'management.chat' ) );
    $breadcrumbs->push( trans( 'management.watch' ) );
});

Breadcrumbs::for( 'admin.management.chat.settings', function( $breadcrumbs )
{
    $breadcrumbs->parent( 'admin.index' );
    $breadcrumbs->push( trans( 'management.chat' ) );
    $breadcrumbs->push( trans( 'main.settings' ) );
});
