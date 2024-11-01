<?php
/**
 * MarketplaceDirectoryAppTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class MarketplaceDirectoryAppTag extends TagAbstract
{
    /**
     * Installs an existing app
     *
     * @param MarketplaceInstall $payload
     * @return MarketplaceApp
     * @throws MarketplaceMessageException
     * @throws ClientException
     */
    public function install(MarketplaceInstall $payload): MarketplaceApp
    {
        $url = $this->parser->url('/marketplace/directory/app', [
        ]);

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload,
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, MarketplaceApp::class);

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Returns details of a specific app
     *
     * @param string $user
     * @param string $name
     * @return MarketplaceApp
     * @throws MarketplaceMessageException
     * @throws ClientException
     */
    public function get(string $user, string $name): MarketplaceApp
    {
        $url = $this->parser->url('/marketplace/directory/app/:user/:name', [
            'user' => $user,
            'name' => $name,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, MarketplaceApp::class);

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Returns all available apps
     *
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $query
     * @return MarketplaceAppCollection
     * @throws MarketplaceMessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $query = null): MarketplaceAppCollection
    {
        $url = $this->parser->url('/marketplace/directory/app', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'query' => $query,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, MarketplaceAppCollection::class);

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode === 400) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            if ($statusCode === 404) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            if ($statusCode === 500) {
                $data = $this->parser->parse((string) $body, MarketplaceMessage::class);

                throw new MarketplaceMessageException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
