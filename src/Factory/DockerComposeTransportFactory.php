<?php

namespace Consolidation\SiteProcess\Factory;

use Consolidation\SiteAlias\AliasRecord;
use Consolidation\SiteProcess\Transport\DockerComposeTransport;

/**
 * DockerComposeTransportFactory will create an DockerComposeTransport for
 * applicable site aliases.
 */
class DockerComposeTransportFactory implements TransportFactoryInterface
{
    /**
     * @inheritdoc
     */
    public function check(AliasRecord $siteAlias)
    {
        return $siteAlias->isContainer();
    }

    /**
     * @inheritdoc
     */
    public function create(AliasRecord $siteAlias)
    {
        return new DockerComposeTransport($siteAlias);
    }
}
