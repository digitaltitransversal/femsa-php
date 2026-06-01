<?php

namespace DigitalFemsa\Test\Mocks;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\FulfilledPromise;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Mock Guzzle HTTP Client for testing
 */
class MockGuzzleClient implements ClientInterface
{
    /**
     * @var ResponseInterface[]
     */
    private array $responses = [];

    /**
     * @var int
     */
    private int $currentIndex = 0;

    /**
     * @var RequestInterface[]
     */
    private array $requests = [];

    /**
     * Add a response to the queue
     *
     * @param ResponseInterface $response
     * @return self
     */
    public function addResponse(ResponseInterface $response): self
    {
        $this->responses[] = $response;
        return $this;
    }

    /**
     * Add multiple responses to the queue
     *
     * @param ResponseInterface[] $responses
     * @return self
     */
    public function addResponses(array $responses): self
    {
        foreach ($responses as $response) {
            $this->addResponse($response);
        }
        return $this;
    }

    /**
     * Get the next response from the queue
     *
     * @return ResponseInterface
     * @throws \RuntimeException
     */
    private function getNextResponse(): ResponseInterface
    {
        if (!isset($this->responses[$this->currentIndex])) {
            throw new \RuntimeException('No more responses in queue');
        }

        return $this->responses[$this->currentIndex++];
    }

    /**
     * Get all captured requests
     *
     * @return RequestInterface[]
     */
    public function getRequests(): array
    {
        return $this->requests;
    }

    /**
     * Get the last captured request
     *
     * @return RequestInterface|null
     */
    public function getLastRequest(): ?RequestInterface
    {
        return end($this->requests) ?: null;
    }

    /**
     * Reset the mock client
     *
     * @return self
     */
    public function reset(): self
    {
        $this->responses = [];
        $this->requests = [];
        $this->currentIndex = 0;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function send(RequestInterface $request, array $options = []): ResponseInterface
    {
        $this->requests[] = $request;
        return $this->getNextResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function sendAsync(RequestInterface $request, array $options = []): PromiseInterface
    {
        $this->requests[] = $request;
        return new FulfilledPromise($this->getNextResponse());
    }

    /**
     * {@inheritdoc}
     */
    public function request($method, $uri, array $options = []): ResponseInterface
    {
        return $this->getNextResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function requestAsync($method, $uri, array $options = []): PromiseInterface
    {
        return new FulfilledPromise($this->getNextResponse());
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig($option = null)
    {
        return null;
    }
}
