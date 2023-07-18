<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services\AppStore\Resource;

use Cantie\AppStoreConnect\Services\AppStore\ProfilesResponse;
use Cantie\AppStoreConnect\Services\AppStore\ProfileResponse;
use Cantie\AppStoreConnect\Services\AppStore\ProfileCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\BundleIdResponse;
use Cantie\AppStoreConnect\Services\AppStore\CertificatesResponse;
use Cantie\AppStoreConnect\Services\AppStore\DevicesResponse;

/**
 * The "profiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $profiles = $appStoreService->profiles;
 *  </code>
 */
class Profiles extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return ProfilesResponse
     */
    public function listProfiles($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listProfiles', [$params], ProfilesResponse::class);
    }
    /**
	 * @param ProfileCreateRequest $postBody
     * @return ProfileResponse
     */
    public function createProfiles(ProfileCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createProfiles', [$params], ProfileResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return ProfileResponse
     */
    public function getProfiles($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getProfiles', [$params], ProfileResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteProfiles($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteProfiles', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return BundleIdResponse
     */
    public function getProfilesBundleId($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getProfilesBundleId', [$params], BundleIdResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return CertificatesResponse
     */
    public function listProfilesCertificates($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listProfilesCertificates', [$params], CertificatesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return DevicesResponse
     */
    public function listProfilesDevices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listProfilesDevices', [$params], DevicesResponse::class);
    }
}

class_alias(Profiles::class, 'AppleService_AppStore_ResourceProfiles');
