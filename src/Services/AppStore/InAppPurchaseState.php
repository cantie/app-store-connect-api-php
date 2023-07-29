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

class InAppPurchaseState extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $MISSING_METADATA = "MISSING_METADATA";
	public static $WAITING_FOR_UPLOAD = "WAITING_FOR_UPLOAD";
	public static $PROCESSING_CONTENT = "PROCESSING_CONTENT";
	public static $READY_TO_SUBMIT = "READY_TO_SUBMIT";
	public static $WAITING_FOR_REVIEW = "WAITING_FOR_REVIEW";
	public static $IN_REVIEW = "IN_REVIEW";
	public static $DEVELOPER_ACTION_NEEDED = "DEVELOPER_ACTION_NEEDED";
	public static $PENDING_BINARY_APPROVAL = "PENDING_BINARY_APPROVAL";
	public static $APPROVED = "APPROVED";
	public static $DEVELOPER_REMOVED_FROM_SALE = "DEVELOPER_REMOVED_FROM_SALE";
	public static $REMOVED_FROM_SALE = "REMOVED_FROM_SALE";
	public static $REJECTED = "REJECTED";


}

