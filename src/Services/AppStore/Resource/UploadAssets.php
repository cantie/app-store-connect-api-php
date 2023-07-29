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

/**
 * The "uploadAssets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appStoreService = new Cantie\AppStoreConnect\Service\AppStore(...);
 *   $uploadAssets = $appStoreService->uploadAssets;
 *  </code>
 */
class UploadAssets extends \Cantie\AppStoreConnect\Services\Resource
{

    /**
     * @return null
     */
    public function upload($uploadOperation, $fileContentOrPath)
    {
        if (file_exists($fileContentOrPath)) {
            $fileContent = file_get_contents($fileContentOrPath);
        } else {
            $fileContent = $fileContentOrPath;
        }
        $length = $uploadOperation->getLength();
        $offset = $uploadOperation->getOffset();
        $data = substr($fileContent, $offset, $length);

        $param = [
            'data' => $data,
            'mimeType' => $uploadOperation->getRequestHeaders()[0]->getValue(),
            'alt' => 'media'
        ];
        return $this->call('upload', [$param], null);
    }
}

