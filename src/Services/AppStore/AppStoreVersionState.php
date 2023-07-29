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

class AppStoreVersionState extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $ACCEPTED = "ACCEPTED";
	public static $DEVELOPER_REMOVED_FROM_SALE = "DEVELOPER_REMOVED_FROM_SALE";
	public static $DEVELOPER_REJECTED = "DEVELOPER_REJECTED";
	public static $IN_REVIEW = "IN_REVIEW";
	public static $INVALID_BINARY = "INVALID_BINARY";
	public static $METADATA_REJECTED = "METADATA_REJECTED";
	public static $PENDING_APPLE_RELEASE = "PENDING_APPLE_RELEASE";
	public static $PENDING_CONTRACT = "PENDING_CONTRACT";
	public static $PENDING_DEVELOPER_RELEASE = "PENDING_DEVELOPER_RELEASE";
	public static $PREPARE_FOR_SUBMISSION = "PREPARE_FOR_SUBMISSION";
	public static $PREORDER_READY_FOR_SALE = "PREORDER_READY_FOR_SALE";
	public static $PROCESSING_FOR_APP_STORE = "PROCESSING_FOR_APP_STORE";
	public static $READY_FOR_REVIEW = "READY_FOR_REVIEW";
	public static $READY_FOR_SALE = "READY_FOR_SALE";
	public static $REJECTED = "REJECTED";
	public static $REMOVED_FROM_SALE = "REMOVED_FROM_SALE";
	public static $WAITING_FOR_EXPORT_COMPLIANCE = "WAITING_FOR_EXPORT_COMPLIANCE";
	public static $WAITING_FOR_REVIEW = "WAITING_FOR_REVIEW";
	public static $REPLACED_WITH_NEW_VERSION = "REPLACED_WITH_NEW_VERSION";


}

