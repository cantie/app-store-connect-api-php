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

use Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationsResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationDocumentResponse;
use Cantie\AppStoreConnect\Services\AppStore\AppEncryptionDeclarationBuildsLinkagesRequest;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $apps = $appStoreService->apps;
 *  </code>
 */
class AppEncryptionDeclarations extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
	 * @param array $optParams Optional parameters.
     * @return AppEncryptionDeclarationsResponse
     */
    public function listAppEncryptionDeclarations($optParams = [])
    {
		$params = [];
		$params = array_merge($params, $optParams);
        return $this->call('listAppEncryptionDeclarations', [$params], AppEncryptionDeclarationsResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEncryptionDeclarationResponse
     */
    public function getAppEncryptionDeclarations($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppEncryptionDeclarations', [$params], AppEncryptionDeclarationResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppResponse
     */
    public function getAppEncryptionDeclarationsApp($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppEncryptionDeclarationsApp', [$params], AppResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param array $optParams Optional parameters.
     * @return AppEncryptionDeclarationDocumentResponse
     */
    public function getAppEncryptionDeclarationsAppEncryptionDeclarationDocument($id, $optParams = [])
    {
		$params = ['id' => $id];
		$params = array_merge($params, $optParams);
        return $this->call('getAppEncryptionDeclarationsAppEncryptionDeclarationDocument', [$params], AppEncryptionDeclarationDocumentResponse::class);
    }
    /**
	 * @param string $id the id of the requested resource
	 * @param AppEncryptionDeclarationBuildsLinkagesRequest $postBody
     * @return null
     */
    public function createListAppEncryptionDeclarationsBuilds($id, AppEncryptionDeclarationBuildsLinkagesRequest $postBody)
    {
		$params = ['id' => $id, 'postBody' => $postBody];
        return $this->call('createListAppEncryptionDeclarationsBuilds', [$params], null);
    }
}

class_alias(AppEncryptionDeclarations::class, 'AppleService_AppStore_ResourceAppEncryptionDeclarations');
