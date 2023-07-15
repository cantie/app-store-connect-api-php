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

class DiagnosticLogCallStackNode extends \Cantie\AppStoreConnect\Model
{
	public $sampleCount;
	public $isBlameFrame;
	public $symbolName;
	public $insightsCategory;
	public $offsetIntoSymbol;
	public $binaryName;
	public $fileName;
	public $binaryUUID;
	public $lineNumber;
	public $address;
	public $offsetIntoBinaryTextSegment;
	public $rawFrame;
	protected $subFramesType = DiagnosticLogCallStackNode::class;
	protected $subFramesDataType = 'array';

	public function getSampleCount()
	{
		return $this->sampleCount;
	}
	public function setSampleCount($sampleCount)
	{
		$this->sampleCount = $sampleCount;
		return $sampleCount;
	}
	public function getIsBlameFrame()
	{
		return $this->isBlameFrame;
	}
	public function setIsBlameFrame($isBlameFrame)
	{
		$this->isBlameFrame = $isBlameFrame;
		return $isBlameFrame;
	}
	public function getSymbolName()
	{
		return $this->symbolName;
	}
	public function setSymbolName($symbolName)
	{
		$this->symbolName = $symbolName;
		return $symbolName;
	}
	public function getInsightsCategory()
	{
		return $this->insightsCategory;
	}
	public function setInsightsCategory($insightsCategory)
	{
		$this->insightsCategory = $insightsCategory;
		return $insightsCategory;
	}
	public function getOffsetIntoSymbol()
	{
		return $this->offsetIntoSymbol;
	}
	public function setOffsetIntoSymbol($offsetIntoSymbol)
	{
		$this->offsetIntoSymbol = $offsetIntoSymbol;
		return $offsetIntoSymbol;
	}
	public function getBinaryName()
	{
		return $this->binaryName;
	}
	public function setBinaryName($binaryName)
	{
		$this->binaryName = $binaryName;
		return $binaryName;
	}
	public function getFileName()
	{
		return $this->fileName;
	}
	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		return $fileName;
	}
	public function getBinaryUUID()
	{
		return $this->binaryUUID;
	}
	public function setBinaryUUID($binaryUUID)
	{
		$this->binaryUUID = $binaryUUID;
		return $binaryUUID;
	}
	public function getLineNumber()
	{
		return $this->lineNumber;
	}
	public function setLineNumber($lineNumber)
	{
		$this->lineNumber = $lineNumber;
		return $lineNumber;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function setAddress($address)
	{
		$this->address = $address;
		return $address;
	}
	public function getOffsetIntoBinaryTextSegment()
	{
		return $this->offsetIntoBinaryTextSegment;
	}
	public function setOffsetIntoBinaryTextSegment($offsetIntoBinaryTextSegment)
	{
		$this->offsetIntoBinaryTextSegment = $offsetIntoBinaryTextSegment;
		return $offsetIntoBinaryTextSegment;
	}
	public function getRawFrame()
	{
		return $this->rawFrame;
	}
	public function setRawFrame($rawFrame)
	{
		$this->rawFrame = $rawFrame;
		return $rawFrame;
	}
	/**
	* @return  DiagnosticLogCallStackNode[]
	*/
	public function getSubFrames()
	{
		return $this->subFrames;
	}
	/**
	* @param  DiagnosticLogCallStackNode[]
	*/
	public function setSubFrames($subFrames)
	{
		$this->subFrames = $subFrames;
		return $subFrames;
	}

}
class_alias(DiagnosticLogCallStackNode::class, 'AppleService_AppStore_DiagnosticLogCallStackNode');

