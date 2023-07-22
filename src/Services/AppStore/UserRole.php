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

class UserRole extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $ADMIN = "ADMIN";
	public static $FINANCE = "FINANCE";
	public static $ACCOUNT_HOLDER = "ACCOUNT_HOLDER";
	public static $SALES = "SALES";
	public static $MARKETING = "MARKETING";
	public static $APP_MANAGER = "APP_MANAGER";
	public static $DEVELOPER = "DEVELOPER";
	public static $ACCESS_TO_REPORTS = "ACCESS_TO_REPORTS";
	public static $CUSTOMER_SUPPORT = "CUSTOMER_SUPPORT";
	public static $IMAGE_MANAGER = "IMAGE_MANAGER";
	public static $CREATE_APPS = "CREATE_APPS";
	public static $CLOUD_MANAGED_DEVELOPER_ID = "CLOUD_MANAGED_DEVELOPER_ID";
	public static $CLOUD_MANAGED_APP_DISTRIBUTION = "CLOUD_MANAGED_APP_DISTRIBUTION";


}
class_alias(UserRole::class, 'AppleService_AppStore_UserRole');

