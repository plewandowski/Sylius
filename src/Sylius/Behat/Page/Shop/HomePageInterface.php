<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Page\Shop;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface HomePageInterface extends SymfonyPageInterface
{
    /**
     * @return string
     */
    public function getContents();

    public function hasLogoutButton(): bool;

    public function logOut();

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @return string
     */
    public function getActiveCurrency();

    /**
     * @return array
     */
    public function getAvailableCurrencies();

    /**
     * @param string $currencyCode
     */
    public function switchCurrency($currencyCode);

    /**
     * @return string
     */
    public function getActiveLocale();

    /**
     * @return array
     */
    public function getAvailableLocales();

    /**
     * @param string $localeCode
     */
    public function switchLocale($localeCode);

    /**
     * @return array
     */
    public function getLatestProductsNames();
}
