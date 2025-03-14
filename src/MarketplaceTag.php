<?php
/**
 * MarketplaceTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class MarketplaceTag extends TagAbstract
{
    public function directory(): MarketplaceDirectoryTag
    {
        return new MarketplaceDirectoryTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function my(): MarketplaceMyTag
    {
        return new MarketplaceMyTag(
            $this->httpClient,
            $this->parser
        );
    }


}
