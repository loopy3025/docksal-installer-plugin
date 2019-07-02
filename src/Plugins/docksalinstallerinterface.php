<?php

namespace webny\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class TemplateInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return '.docksal';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'webny-docksal' === $packageType;
    }
}