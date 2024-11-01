<?php
/**
 * MarketplaceMyTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class MarketplaceMyTag extends TagAbstract
{
    public function app(): MarketplaceMyAppTag
    {
        return new MarketplaceMyAppTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function action(): MarketplaceMyActionTag
    {
        return new MarketplaceMyActionTag(
            $this->httpClient,
            $this->parser
        );
    }


}
