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

class AgeRatingDeclarationUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $alcoholTobaccoOrDrugUseOrReferences; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $contests; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $gamblingAndContests;
	public $gambling;
	public $gamblingSimulated; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	protected $kidsAgeBandType = KidsAgeBand::class;
	protected $kidsAgeBandDataType = '';
	public $medicalOrTreatmentInformation; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $profanityOrCrudeHumor; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $sexualContentGraphicAndNudity; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $sexualContentOrNudity; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $seventeenPlus;
	public $horrorOrFearThemes; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $matureOrSuggestiveThemes; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $unrestrictedWebAccess;
	public $violenceCartoonOrFantasy; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $violenceRealisticProlongedGraphicOrSadistic; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $violenceRealistic; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE

	public function getAlcoholTobaccoOrDrugUseOrReferences()
	{
		return $this->alcoholTobaccoOrDrugUseOrReferences;
	}
	public function setAlcoholTobaccoOrDrugUseOrReferences($alcoholTobaccoOrDrugUseOrReferences)
	{
		$this->alcoholTobaccoOrDrugUseOrReferences = $alcoholTobaccoOrDrugUseOrReferences;
		return $alcoholTobaccoOrDrugUseOrReferences;
	}
	public function getContests()
	{
		return $this->contests;
	}
	public function setContests($contests)
	{
		$this->contests = $contests;
		return $contests;
	}
	public function getGamblingAndContests()
	{
		return $this->gamblingAndContests;
	}
	public function setGamblingAndContests($gamblingAndContests)
	{
		$this->gamblingAndContests = $gamblingAndContests;
		return $gamblingAndContests;
	}
	public function getGambling()
	{
		return $this->gambling;
	}
	public function setGambling($gambling)
	{
		$this->gambling = $gambling;
		return $gambling;
	}
	public function getGamblingSimulated()
	{
		return $this->gamblingSimulated;
	}
	public function setGamblingSimulated($gamblingSimulated)
	{
		$this->gamblingSimulated = $gamblingSimulated;
		return $gamblingSimulated;
	}
	/**
	* @return  KidsAgeBand
	*/
	public function getKidsAgeBand()
	{
		return $this->kidsAgeBand;
	}
	/**
	* @param  KidsAgeBand
	*/
	public function setKidsAgeBand($kidsAgeBand)
	{
		$this->kidsAgeBand = $kidsAgeBand;
		return $kidsAgeBand;
	}
	public function getMedicalOrTreatmentInformation()
	{
		return $this->medicalOrTreatmentInformation;
	}
	public function setMedicalOrTreatmentInformation($medicalOrTreatmentInformation)
	{
		$this->medicalOrTreatmentInformation = $medicalOrTreatmentInformation;
		return $medicalOrTreatmentInformation;
	}
	public function getProfanityOrCrudeHumor()
	{
		return $this->profanityOrCrudeHumor;
	}
	public function setProfanityOrCrudeHumor($profanityOrCrudeHumor)
	{
		$this->profanityOrCrudeHumor = $profanityOrCrudeHumor;
		return $profanityOrCrudeHumor;
	}
	public function getSexualContentGraphicAndNudity()
	{
		return $this->sexualContentGraphicAndNudity;
	}
	public function setSexualContentGraphicAndNudity($sexualContentGraphicAndNudity)
	{
		$this->sexualContentGraphicAndNudity = $sexualContentGraphicAndNudity;
		return $sexualContentGraphicAndNudity;
	}
	public function getSexualContentOrNudity()
	{
		return $this->sexualContentOrNudity;
	}
	public function setSexualContentOrNudity($sexualContentOrNudity)
	{
		$this->sexualContentOrNudity = $sexualContentOrNudity;
		return $sexualContentOrNudity;
	}
	public function getSeventeenPlus()
	{
		return $this->seventeenPlus;
	}
	public function setSeventeenPlus($seventeenPlus)
	{
		$this->seventeenPlus = $seventeenPlus;
		return $seventeenPlus;
	}
	public function getHorrorOrFearThemes()
	{
		return $this->horrorOrFearThemes;
	}
	public function setHorrorOrFearThemes($horrorOrFearThemes)
	{
		$this->horrorOrFearThemes = $horrorOrFearThemes;
		return $horrorOrFearThemes;
	}
	public function getMatureOrSuggestiveThemes()
	{
		return $this->matureOrSuggestiveThemes;
	}
	public function setMatureOrSuggestiveThemes($matureOrSuggestiveThemes)
	{
		$this->matureOrSuggestiveThemes = $matureOrSuggestiveThemes;
		return $matureOrSuggestiveThemes;
	}
	public function getUnrestrictedWebAccess()
	{
		return $this->unrestrictedWebAccess;
	}
	public function setUnrestrictedWebAccess($unrestrictedWebAccess)
	{
		$this->unrestrictedWebAccess = $unrestrictedWebAccess;
		return $unrestrictedWebAccess;
	}
	public function getViolenceCartoonOrFantasy()
	{
		return $this->violenceCartoonOrFantasy;
	}
	public function setViolenceCartoonOrFantasy($violenceCartoonOrFantasy)
	{
		$this->violenceCartoonOrFantasy = $violenceCartoonOrFantasy;
		return $violenceCartoonOrFantasy;
	}
	public function getViolenceRealisticProlongedGraphicOrSadistic()
	{
		return $this->violenceRealisticProlongedGraphicOrSadistic;
	}
	public function setViolenceRealisticProlongedGraphicOrSadistic($violenceRealisticProlongedGraphicOrSadistic)
	{
		$this->violenceRealisticProlongedGraphicOrSadistic = $violenceRealisticProlongedGraphicOrSadistic;
		return $violenceRealisticProlongedGraphicOrSadistic;
	}
	public function getViolenceRealistic()
	{
		return $this->violenceRealistic;
	}
	public function setViolenceRealistic($violenceRealistic)
	{
		$this->violenceRealistic = $violenceRealistic;
		return $violenceRealistic;
	}

}
class_alias(AgeRatingDeclarationUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_AgeRatingDeclarationUpdateRequest_Data_Attributes');

class AgeRatingDeclarationUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ageRatingDeclarations';
	public $id;
	protected $attributesType = AgeRatingDeclarationUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $type;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $id;
	}
	/**
	* @return  AgeRatingDeclarationUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AgeRatingDeclarationUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $attributes;
	}

}
class_alias(AgeRatingDeclarationUpdateRequest_Data::class, 'AppleService_AppStore_AgeRatingDeclarationUpdateRequest_Data');

class AgeRatingDeclarationUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = AgeRatingDeclarationUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  AgeRatingDeclarationUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  AgeRatingDeclarationUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $data;
	}

}
class_alias(AgeRatingDeclarationUpdateRequest::class, 'AppleService_AppStore_AgeRatingDeclarationUpdateRequest');

