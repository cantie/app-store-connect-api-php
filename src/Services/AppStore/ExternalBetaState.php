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

class ExternalBetaState extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $PROCESSING = "PROCESSING";
	public static $PROCESSING_EXCEPTION = "PROCESSING_EXCEPTION";
	public static $MISSING_EXPORT_COMPLIANCE = "MISSING_EXPORT_COMPLIANCE";
	public static $READY_FOR_BETA_TESTING = "READY_FOR_BETA_TESTING";
	public static $IN_BETA_TESTING = "IN_BETA_TESTING";
	public static $EXPIRED = "EXPIRED";
	public static $READY_FOR_BETA_SUBMISSION = "READY_FOR_BETA_SUBMISSION";
	public static $IN_EXPORT_COMPLIANCE_REVIEW = "IN_EXPORT_COMPLIANCE_REVIEW";
	public static $WAITING_FOR_BETA_REVIEW = "WAITING_FOR_BETA_REVIEW";
	public static $IN_BETA_REVIEW = "IN_BETA_REVIEW";
	public static $BETA_REJECTED = "BETA_REJECTED";
	public static $BETA_APPROVED = "BETA_APPROVED";


}
class_alias(ExternalBetaState::class, 'AppleService_AppStore_ExternalBetaState');

