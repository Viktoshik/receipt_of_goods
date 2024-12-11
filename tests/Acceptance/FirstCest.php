<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/products');
        $I->click('Добавить');
        $I->fillField('name', 'Название');
        $I->fillField('price', '100');
        $I->fillField('article', '10');
        $I->click('Сохранить');
        $I->canSee('Название');
        $I->canSee('100');
        $I->canSee('10');
    }

    // tests
    public function products(AcceptanceTester $I)
    {

        $I->click('Изменить');
        $I->fillField('name', 'Имя');
        $I->fillField('price', '200');
        $I->fillField('article', '20');
        $I->click('Сохранить');
        $I->canSee('Имя');
        $I->canSee('200');
        $I->canSee('20');
        $I->click('Удалить');
        $I->dontSee('Имя');
        $I->dontSee('200');
        $I->dontSee('20');
    }
    public function receipts(AcceptanceTester $I)
    {
        $I->click('Подробнее');
        $I->click('Добавить');
        $I->fillField('date', '12122000');
        $I->fillField('amount', '2');
        $I->click('Сохранить');
        $I->canSee('2000-12-12');
        $I->canSee('2');
        $I->click('Изменить');
        $I->fillField('date', '10102000');
        $I->fillField('amount', '4');
        $I->click('Сохранить');
        $I->canSee('2000-10-10');
        $I->canSee('4');
        $I->click('Удалить');
        $I->dontSee('2000-10-10');
        $I->dontSee('4');
        $I->amOnPage('/products');
        $I->click('Удалить');
        $I->dontSee('Название');
        $I->dontSee('100');
        $I->dontSee('10');
    }
}
