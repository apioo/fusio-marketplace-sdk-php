<?php
/**
 * MarketplaceDirectoryActionTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace Fusio\Marketplace;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class MarketplaceDirectoryActionTag extends TagAbstract
{
    /**
     * Installs an existing action
     *
     * @param MarketplaceInstall $payload
     * @return MarketplaceAction
     * @throws MessageException
     * @throws ClientException
     */
    public function install(MarketplaceInstall $payload): MarketplaceAction
    {
        $url = $this->parser->url('/marketplace/directory/action', [
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

            return $this->parser->parse($data, MarketplaceAction::class);
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
     * Returns details of a specific action
     *
     * @param string $user
     * @param string $name
     * @return MarketplaceAction
     * @throws MessageException
     * @throws ClientException
     */
    public function get(string $user, string $name): MarketplaceAction
    {
        $url = $this->parser->url('/marketplace/directory/action/:user/:name', [
            'user' => $user,
            'name' => $name,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, MarketplaceAction::class);
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
     * Returns all available actions
     *
     * @param int|null $startIndex
     * @param int|null $count
     * @param string|null $query
     * @return MarketplaceActionCollection
     * @throws MessageException
     * @throws ClientException
     */
    public function getAll(?int $startIndex = null, ?int $count = null, ?string $query = null): MarketplaceActionCollection
    {
        $url = $this->parser->url('/marketplace/directory/action', [
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

            return $this->parser->parse($data, MarketplaceActionCollection::class);
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
