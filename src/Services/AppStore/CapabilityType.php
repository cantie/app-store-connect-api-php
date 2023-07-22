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

class CapabilityType extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $ICLOUD = "ICLOUD";
	public static $IN_APP_PURCHASE = "IN_APP_PURCHASE";
	public static $GAME_CENTER = "GAME_CENTER";
	public static $PUSH_NOTIFICATIONS = "PUSH_NOTIFICATIONS";
	public static $WALLET = "WALLET";
	public static $INTER_APP_AUDIO = "INTER_APP_AUDIO";
	public static $MAPS = "MAPS";
	public static $ASSOCIATED_DOMAINS = "ASSOCIATED_DOMAINS";
	public static $PERSONAL_VPN = "PERSONAL_VPN";
	public static $APP_GROUPS = "APP_GROUPS";
	public static $HEALTHKIT = "HEALTHKIT";
	public static $HOMEKIT = "HOMEKIT";
	public static $WIRELESS_ACCESSORY_CONFIGURATION = "WIRELESS_ACCESSORY_CONFIGURATION";
	public static $APPLE_PAY = "APPLE_PAY";
	public static $DATA_PROTECTION = "DATA_PROTECTION";
	public static $SIRIKIT = "SIRIKIT";
	public static $NETWORK_EXTENSIONS = "NETWORK_EXTENSIONS";
	public static $MULTIPATH = "MULTIPATH";
	public static $HOT_SPOT = "HOT_SPOT";
	public static $NFC_TAG_READING = "NFC_TAG_READING";
	public static $CLASSKIT = "CLASSKIT";
	public static $AUTOFILL_CREDENTIAL_PROVIDER = "AUTOFILL_CREDENTIAL_PROVIDER";
	public static $ACCESS_WIFI_INFORMATION = "ACCESS_WIFI_INFORMATION";
	public static $NETWORK_CUSTOM_PROTOCOL = "NETWORK_CUSTOM_PROTOCOL";
	public static $COREMEDIA_HLS_LOW_LATENCY = "COREMEDIA_HLS_LOW_LATENCY";
	public static $SYSTEM_EXTENSION_INSTALL = "SYSTEM_EXTENSION_INSTALL";
	public static $USER_MANAGEMENT = "USER_MANAGEMENT";
	public static $APPLE_ID_AUTH = "APPLE_ID_AUTH";


}
class_alias(CapabilityType::class, 'AppleService_AppStore_CapabilityType');

