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

use Cantie\AppStoreConnect\Services\AppStore\DevicesResponse;
use Cantie\AppStoreConnect\Services\AppStore\DeviceResponse;
use Cantie\AppStoreConnect\Services\AppStore\DeviceCreateRequest;
use Cantie\AppStoreConnect\Services\AppStore\DeviceUpdateRequest;

/**
 * The "devices" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $devices = $appStoreService->devices;
 *  </code>
 */
class Devices extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return DevicesResponse
     */
    public function listDevices($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listDevices', [$params], DevicesResponse::class);
    }
    /**
	 * @param DeviceCreateRequest $postBody
     * @return DeviceResponse
     */
    public function createDevices(DeviceCreateRequest $postBody)
    {
		$params = ['postBody' => $postBody];
        return $this->call('createDevices', [$params], DeviceResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return DeviceResponse
     */
    public function getDevices($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getDevices', [$params], DeviceResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param DeviceUpdateRequest $postBody
     * @return DeviceResponse
     */
    public function updateDevices($id, DeviceUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateDevices', [$params], DeviceResponse::class);
    }
}

class_alias(Devices::class, 'AppleService_AppStore_ResourceDevices');
