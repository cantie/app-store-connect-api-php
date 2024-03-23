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

class AgeRatingDeclaration_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $alcoholTobaccoOrDrugUseOrReferences; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $contests; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $gamblingAndContests;
	public $gambling;
	public $gamblingSimulated; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $kidsAgeBand; // 
	public $medicalOrTreatmentInformation; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $profanityOrCrudeHumor; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $sexualContentGraphicAndNudity; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $sexualContentOrNudity; // NONE, INFREQUENT_OR_MILD, FREQUENT_OR_INTENSE
	public $seventeenPlus;
	public $ageRatingOverride; // NONE, SEVENTEEN_PLUS, UNRATED
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
		return $this;
	}
	public function getContests()
	{
		return $this->contests;
	}
	public function setContests($contests)
	{
		$this->contests = $contests;
		return $this;
	}
	public function getGamblingAndContests()
	{
		return $this->gamblingAndContests;
	}
	public function setGamblingAndContests($gamblingAndContests)
	{
		$this->gamblingAndContests = $gamblingAndContests;
		return $this;
	}
	public function getGambling()
	{
		return $this->gambling;
	}
	public function setGambling($gambling)
	{
		$this->gambling = $gambling;
		return $this;
	}
	public function getGamblingSimulated()
	{
		return $this->gamblingSimulated;
	}
	public function setGamblingSimulated($gamblingSimulated)
	{
		$this->gamblingSimulated = $gamblingSimulated;
		return $this;
	}
	/**
	* @return  string
	*/
	public function getKidsAgeBand()
	{
		return $this->kidsAgeBand;
	}
	/**
	* @param  string
	*/
	public function setKidsAgeBand($kidsAgeBand)
	{
		$this->kidsAgeBand = $kidsAgeBand;
		return $this;
	}
	public function getMedicalOrTreatmentInformation()
	{
		return $this->medicalOrTreatmentInformation;
	}
	public function setMedicalOrTreatmentInformation($medicalOrTreatmentInformation)
	{
		$this->medicalOrTreatmentInformation = $medicalOrTreatmentInformation;
		return $this;
	}
	public function getProfanityOrCrudeHumor()
	{
		return $this->profanityOrCrudeHumor;
	}
	public function setProfanityOrCrudeHumor($profanityOrCrudeHumor)
	{
		$this->profanityOrCrudeHumor = $profanityOrCrudeHumor;
		return $this;
	}
	public function getSexualContentGraphicAndNudity()
	{
		return $this->sexualContentGraphicAndNudity;
	}
	public function setSexualContentGraphicAndNudity($sexualContentGraphicAndNudity)
	{
		$this->sexualContentGraphicAndNudity = $sexualContentGraphicAndNudity;
		return $this;
	}
	public function getSexualContentOrNudity()
	{
		return $this->sexualContentOrNudity;
	}
	public function setSexualContentOrNudity($sexualContentOrNudity)
	{
		$this->sexualContentOrNudity = $sexualContentOrNudity;
		return $this;
	}
	public function getSeventeenPlus()
	{
		return $this->seventeenPlus;
	}
	public function setSeventeenPlus($seventeenPlus)
	{
		$this->seventeenPlus = $seventeenPlus;
		return $this;
	}
	public function getAgeRatingOverride()
	{
		return $this->ageRatingOverride;
	}
	public function setAgeRatingOverride($ageRatingOverride)
	{
		$this->ageRatingOverride = $ageRatingOverride;
		return $this;
	}
	public function getHorrorOrFearThemes()
	{
		return $this->horrorOrFearThemes;
	}
	public function setHorrorOrFearThemes($horrorOrFearThemes)
	{
		$this->horrorOrFearThemes = $horrorOrFearThemes;
		return $this;
	}
	public function getMatureOrSuggestiveThemes()
	{
		return $this->matureOrSuggestiveThemes;
	}
	public function setMatureOrSuggestiveThemes($matureOrSuggestiveThemes)
	{
		$this->matureOrSuggestiveThemes = $matureOrSuggestiveThemes;
		return $this;
	}
	public function getUnrestrictedWebAccess()
	{
		return $this->unrestrictedWebAccess;
	}
	public function setUnrestrictedWebAccess($unrestrictedWebAccess)
	{
		$this->unrestrictedWebAccess = $unrestrictedWebAccess;
		return $this;
	}
	public function getViolenceCartoonOrFantasy()
	{
		return $this->violenceCartoonOrFantasy;
	}
	public function setViolenceCartoonOrFantasy($violenceCartoonOrFantasy)
	{
		$this->violenceCartoonOrFantasy = $violenceCartoonOrFantasy;
		return $this;
	}
	public function getViolenceRealisticProlongedGraphicOrSadistic()
	{
		return $this->violenceRealisticProlongedGraphicOrSadistic;
	}
	public function setViolenceRealisticProlongedGraphicOrSadistic($violenceRealisticProlongedGraphicOrSadistic)
	{
		$this->violenceRealisticProlongedGraphicOrSadistic = $violenceRealisticProlongedGraphicOrSadistic;
		return $this;
	}
	public function getViolenceRealistic()
	{
		return $this->violenceRealistic;
	}
	public function setViolenceRealistic($violenceRealistic)
	{
		$this->violenceRealistic = $violenceRealistic;
		return $this;
	}

}

class AgeRatingDeclaration extends \Cantie\AppStoreConnect\Model
{
	public $type = 'ageRatingDeclarations';
	public $id;
	protected $attributesType = AgeRatingDeclaration_Attributes::class;
	protected $attributesDataType = 'object';
	protected $linksType = ResourceLinks::class;
	protected $linksDataType = '';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/**
	* @return  AgeRatingDeclaration_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  AgeRatingDeclaration_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}
	/**
	* @return  ResourceLinks
	*/
	public function getLinks()
	{
		return $this->links;
	}
	/**
	* @param  ResourceLinks
	*/
	public function setLinks($links)
	{
		$this->links = $links;
		return $this;
	}

}

