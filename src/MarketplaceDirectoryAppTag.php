<?php
/**
 * MarketplaceDirectoryAppTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class MarketplaceDirectoryAppTag extends TagAbstract
{
    /**
     * Installs an existing app
     *
     * @param MarketplaceInstall $payload
     * @return MarketplaceApp
     * @throws MessageException
     * @throws ClientException
     */
    public function install(MarketplaceInstall $payload): MarketplaceApp
    {
        $url = $this->parser->url('/marketplace/directory/app', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, MarketplaceApp::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Returns details of a specific app
     *
     * @param string $appId
     * @return MarketplaceApp
     * @throws MessageException
     * @throws ClientException
     */
    public function get(string $appId): MarketplaceApp
    {
        $url = $this->parser->url('/marketplace/directory/app/:app_id', [
            'app_id' => $appId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, MarketplaceApp::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
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
     * @throws MessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $query = null): MarketplaceAppCollection
    {
        $url = $this->parser->url('/marketplace/directory/app', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'startIndex' => $startIndex,
                'count' => $count,
                'query' => $query,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, MarketplaceAppCollection::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 404:
                    throw new MessageException($this->parser->parse($data, Message::class));
                case 500:
                    throw new MessageException($this->parser->parse($data, Message::class));
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}