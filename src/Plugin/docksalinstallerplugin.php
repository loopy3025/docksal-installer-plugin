<?php

namespace webny\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class DocksalInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new DocksalInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}