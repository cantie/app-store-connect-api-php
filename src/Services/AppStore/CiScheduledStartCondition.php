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

class CiScheduledStartCondition_Schedule extends \Cantie\AppStoreConnect\Model
{
	public $frequency; // WEEKLY, DAILY, HOURLY
	protected $daysType = '';
	protected $daysDataType = 'array';
	public $hour;
	public $minute;
	public $timezone;

	public function getFrequency()
	{
		return $this->frequency;
	}
	public function setFrequency($frequency)
	{
		$this->frequency = $frequency;
		return $frequency;
	}
	/**
	* @return  []
	*/
	public function getDays()
	{
		return $this->days;
	}
	/**
	* @param  []
	*/
	public function setDays($days)
	{
		$this->days = $days;
		return $days;
	}
	public function getHour()
	{
		return $this->hour;
	}
	public function setHour($hour)
	{
		$this->hour = $hour;
		return $hour;
	}
	public function getMinute()
	{
		return $this->minute;
	}
	public function setMinute($minute)
	{
		$this->minute = $minute;
		return $minute;
	}
	public function getTimezone()
	{
		return $this->timezone;
	}
	public function setTimezone($timezone)
	{
		$this->timezone = $timezone;
		return $timezone;
	}

}
class_alias(CiScheduledStartCondition_Schedule::class, 'AppleService_AppStore_CiScheduledStartCondition_Schedule');

class CiScheduledStartCondition extends \Cantie\AppStoreConnect\Model
{
	protected $sourceType = CiBranchPatterns::class;
	protected $sourceDataType = '';
	protected $scheduleType = CiScheduledStartCondition_Schedule::class;
	protected $scheduleDataType = 'object';

	/**
	* @return  CiBranchPatterns
	*/
	public function getSource()
	{
		return $this->source;
	}
	/**
	* @param  CiBranchPatterns
	*/
	public function setSource($source)
	{
		$this->source = $source;
		return $source;
	}
	/**
	* @return  CiScheduledStartCondition_Schedule
	*/
	public function getSchedule()
	{
		return $this->schedule;
	}
	/**
	* @param  CiScheduledStartCondition_Schedule
	*/
	public function setSchedule($schedule)
	{
		$this->schedule = $schedule;
		return $schedule;
	}

}
class_alias(CiScheduledStartCondition::class, 'AppleService_AppStore_CiScheduledStartCondition');

