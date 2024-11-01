<?php
/**
 * Client automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function marketplace(): MarketplaceTag
    {
        return new MarketplaceTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function authorization(): AuthorizationTag
    {
        return new AuthorizationTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function meta(): MetaTag
    {
        return new MetaTag(
            $this->httpClient,
            $this->parser
        );
    }



    public static function build(string $clientId, string $clientSecret, ?TokenStoreInterface $tokenStore = null, ?array $scopes = null): self
    {
        return new self('https://api.fusio-project.org/', new Credentials\OAuth2($clientId, $clientSecret, 'https://api.fusio-project.org/authorization/token', '', $tokenStore, $scopes));
    }

    public static function buildAnonymous(): self
    {
        return new self('https://api.fusio-project.org/', new Credentials\Anonymous());
    }
}
