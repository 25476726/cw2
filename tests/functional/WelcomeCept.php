<?php 
$I = new FunctionalTester($scenario);
$I->am('an admin');
$I->wantTo('test Laravel working');

//When
$I->amOnPage('/');

//Then
$I->seeCurrentUrlEquals('/');
$I->See('Laravel', '.title');
