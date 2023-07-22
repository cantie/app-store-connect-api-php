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

namespace Cantie\AppStoreConnect\Services\AppStore;

class CertificateType extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $IOS_DEVELOPMENT = "IOS_DEVELOPMENT";
	public static $IOS_DISTRIBUTION = "IOS_DISTRIBUTION";
	public static $MAC_APP_DISTRIBUTION = "MAC_APP_DISTRIBUTION";
	public static $MAC_INSTALLER_DISTRIBUTION = "MAC_INSTALLER_DISTRIBUTION";
	public static $MAC_APP_DEVELOPMENT = "MAC_APP_DEVELOPMENT";
	public static $DEVELOPER_ID_KEXT = "DEVELOPER_ID_KEXT";
	public static $DEVELOPER_ID_APPLICATION = "DEVELOPER_ID_APPLICATION";
	public static $DEVELOPMENT = "DEVELOPMENT";
	public static $DISTRIBUTION = "DISTRIBUTION";
	public static $PASS_TYPE_ID = "PASS_TYPE_ID";
	public static $PASS_TYPE_ID_WITH_NFC = "PASS_TYPE_ID_WITH_NFC";


}
class_alias(CertificateType::class, 'AppleService_AppStore_CertificateType');

