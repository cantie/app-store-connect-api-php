<?php

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewResponse;
use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewsResponse;
use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewResponseV1Response;
use Cantie\AppStoreConnect\Services\AppStore\CustomerReviewResponseV1CreateRequest;

/**
 * The "customerReviews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $customerReviews = $appStoreService->customerReviews;
 *  </code>
 */
class CustomerReviews extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
     * Get a list of customer reviews for a specific app.
     * 
     * @param string $appId The opaque resource ID that uniquely identifies the apps resource that represents your app
     * @param array $optParams Optional parameters.
     * @return CustomerReviewsResponse
     */
    public function listReviewsForApp($appId, $optParams = [])
    {
        $params = ['id' => $appId];
        $params = array_merge($params, $optParams);
        return $this->call('listReviewsForApp', [$params], CustomerReviewsResponse::class);
    }
    /**
     * Get a list of customer reviews for a specific version of your app.
     * 
     * @param string $appStoreVersionId The opaque resource ID that uniquely identifies the appStoreVersions resource that represents a version of your app
     * @param array $optParams Optional parameters.
     * @return CustomerReviewsResponse
     */
    public function listReviewsForAppStoreVersion($appStoreVersionId, $optParams = [])
    {
        $params = ['id' => $appStoreVersionId];
        $params = array_merge($params, $optParams);
        return $this->call('listReviewsForAppStoreVersion', [$params], CustomerReviewsResponse::class);
    }
    /**
     * Get information about a specific customer review, including the review content.
     * 
     * @param string $reviewId The resource ID representing a unique customer review.
     * @param array $optParams Optional parameters.
     * @return CustomerReviewResponse
     */
    public function readReviewInfo($reviewId, $optParams = [])
    {
        $params = ['id' => $reviewId];
        $params = array_merge($params, $optParams);
        return $this->call('readReviewInfo', [$params], CustomerReviewResponse::class);
    }
    /**
     * Get the response to a specific customer review.
     * 
     * @param string $reviewId resource ID that uniquely identifies a customerReviews resource
     * @param array $optParams Optional parameters.
     * @return CustomerReviewResponseV1Response
     */
    public function getReviewResponse($reviewId, $optParams = [])
    {
        $params = ['id' => $reviewId];
        $params = array_merge($params, $optParams);
        return $this->call('getReviewResponse', [$params], CustomerReviewResponseV1Response::class);
    }
    /**
     * Get information about a specific response you wrote to a customer review, including the response content and its state.
     * 
     * @param string $reviewResponseId resource ID that uniquely identifies a customerReviewResponses resource
     * @param array $optParams Optional parameters.
     * @return CustomerReviewResponseV1Response
     */
    public function readReviewResponseInfo($reviewResponseId, $optParams = [])
    {
        $params = ['id' => $reviewResponseId];
        $params = array_merge($params, $optParams);
        return $this->call('readReviewResponseInfo', [$params], CustomerReviewResponseV1Response::class);
    }
    /**
     * Create a response or replace an existing response you wrote to a customer review.
     *
     * @param CustomerReviewResponseV1CreateRequest $postBody
     * @return CustomerReviewResponseV1Response
     */
    public function responseReview(CustomerReviewResponseV1CreateRequest $postBody)
    {
        $params = ['postBody' => $postBody];
        return $this->call('responseReview', [$params], CustomerReviewResponseV1Response::class);
    }
    /**
     * Delete a specific response you wrote to a customer review.
     *
     * @param string $reviewResponseId resource ID that uniquely identifies a customerReviewResponses resource
     * @return null
     */
    public function deleteResponseReview($reviewResponseId)
    {
        $params = ['id' => $reviewResponseId];
        return $this->call('deleteResponseReview', [$params], null);
    }
}

class_alias(CustomerReviews::class, 'AppleService_AppStore_CustomerReviews');
