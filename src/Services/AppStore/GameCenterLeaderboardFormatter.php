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

class GameCenterLeaderboardFormatter extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $INTEGER = "INTEGER";
	public static $DECIMAL_POINT_1_PLACE = "DECIMAL_POINT_1_PLACE";
	public static $DECIMAL_POINT_2_PLACE = "DECIMAL_POINT_2_PLACE";
	public static $DECIMAL_POINT_3_PLACE = "DECIMAL_POINT_3_PLACE";
	public static $ELAPSED_TIME_MILLISECOND = "ELAPSED_TIME_MILLISECOND";
	public static $ELAPSED_TIME_MINUTE = "ELAPSED_TIME_MINUTE";
	public static $ELAPSED_TIME_SECOND = "ELAPSED_TIME_SECOND";
	public static $MONEY_POUND_DECIMAL = "MONEY_POUND_DECIMAL";
	public static $MONEY_POUND = "MONEY_POUND";
	public static $MONEY_DOLLAR_DECIMAL = "MONEY_DOLLAR_DECIMAL";
	public static $MONEY_DOLLAR = "MONEY_DOLLAR";
	public static $MONEY_EURO_DECIMAL = "MONEY_EURO_DECIMAL";
	public static $MONEY_EURO = "MONEY_EURO";
	public static $MONEY_FRANC_DECIMAL = "MONEY_FRANC_DECIMAL";
	public static $MONEY_FRANC = "MONEY_FRANC";
	public static $MONEY_KRONER_DECIMAL = "MONEY_KRONER_DECIMAL";
	public static $MONEY_KRONER = "MONEY_KRONER";
	public static $MONEY_YEN = "MONEY_YEN";


}

