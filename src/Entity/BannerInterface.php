<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusBannerPlugin\Entity;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Locale\Model\LocaleInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface BannerInterface extends ResourceInterface
{
    public function getPath(): ?string;

    public function setPath(?string $path): void;

    public function getAlt(): ?string;

    public function setAlt(?string $alt): void;

    public function getFileName(): ?string;

    public function setFileName(?string $fileName): void;

    public function getLocale(): ?LocaleInterface;

    public function setLocale(?LocaleInterface $locale): void;

    public function getSection(): ?SectionInterface;

    public function setSection(?SectionInterface $section): void;

    public function getAds(): Collection;

    public function addAds(AdInterface $ad): void;

    public function removeAd(AdInterface $ad): void;

    public function hasAd(AdInterface $ad): bool;
}