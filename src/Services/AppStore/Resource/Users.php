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

use Cantie\AppStoreConnect\Services\AppStore\UsersResponse;
use Cantie\AppStoreConnect\Services\AppStore\UserResponse;
use Cantie\AppStoreConnect\Services\AppStore\UserUpdateRequest;
use Cantie\AppStoreConnect\Services\AppStore\UserVisibleAppsLinkagesResponse;
use Cantie\AppStoreConnect\Services\AppStore\UserVisibleAppsLinkagesRequest;
use Cantie\AppStoreConnect\Services\AppStore\AppsResponse;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $users = $appStoreService->users;
 *  </code>
 */
class Users extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return UsersResponse
     */
    public function listUsers($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listUsers', [$params], UsersResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return UserResponse
     */
    public function getUsers($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getUsers', [$params], UserResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param UserUpdateRequest $postBody
     * @return UserResponse
     */
    public function updateUsers($id, UserUpdateRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateUsers', [$params], UserResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
     * @return null
     */
    public function deleteUsers($id)
    {
		$params = ['id' => $id];
        return $this->call('deleteUsers', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return UserVisibleAppsLinkagesResponse
     */
    public function listUsersVisibleAppsLinkages($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listUsersVisibleAppsLinkages', [$params], UserVisibleAppsLinkagesResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param UserVisibleAppsLinkagesRequest $postBody
     * @return null
     */
    public function createListUsersVisibleApps($id, UserVisibleAppsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListUsersVisibleApps', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param UserVisibleAppsLinkagesRequest $postBody
     * @return null
     */
    public function updateListUsersVisibleApps($id, UserVisibleAppsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('updateListUsersVisibleApps', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param UserVisibleAppsLinkagesRequest $postBody
     * @return null
     */
    public function deleteListUsersVisibleApps($id, UserVisibleAppsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('deleteListUsersVisibleApps', [$params], null);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppsResponse
     */
    public function listUsersVisibleApps($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('listUsersVisibleApps', [$params], AppsResponse::class);
    }
}

class_alias(Users::class, 'AppleService_AppStore_ResourceUsers');
