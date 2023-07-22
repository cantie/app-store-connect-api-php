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

class TerritoryCode extends \Cantie\AppStoreConnect\Model
{
	// enum class
	public static $ABW = "ABW";
	public static $AFG = "AFG";
	public static $AGO = "AGO";
	public static $AIA = "AIA";
	public static $ALB = "ALB";
	public static $AND = "AND";
	public static $ANT = "ANT";
	public static $ARE = "ARE";
	public static $ARG = "ARG";
	public static $ARM = "ARM";
	public static $ASM = "ASM";
	public static $ATG = "ATG";
	public static $AUS = "AUS";
	public static $AUT = "AUT";
	public static $AZE = "AZE";
	public static $BDI = "BDI";
	public static $BEL = "BEL";
	public static $BEN = "BEN";
	public static $BES = "BES";
	public static $BFA = "BFA";
	public static $BGD = "BGD";
	public static $BGR = "BGR";
	public static $BHR = "BHR";
	public static $BHS = "BHS";
	public static $BIH = "BIH";
	public static $BLR = "BLR";
	public static $BLZ = "BLZ";
	public static $BMU = "BMU";
	public static $BOL = "BOL";
	public static $BRA = "BRA";
	public static $BRB = "BRB";
	public static $BRN = "BRN";
	public static $BTN = "BTN";
	public static $BWA = "BWA";
	public static $CAF = "CAF";
	public static $CAN = "CAN";
	public static $CHE = "CHE";
	public static $CHL = "CHL";
	public static $CHN = "CHN";
	public static $CIV = "CIV";
	public static $CMR = "CMR";
	public static $COD = "COD";
	public static $COG = "COG";
	public static $COK = "COK";
	public static $COL = "COL";
	public static $COM = "COM";
	public static $CPV = "CPV";
	public static $CRI = "CRI";
	public static $CUB = "CUB";
	public static $CUW = "CUW";
	public static $CXR = "CXR";
	public static $CYM = "CYM";
	public static $CYP = "CYP";
	public static $CZE = "CZE";
	public static $DEU = "DEU";
	public static $DJI = "DJI";
	public static $DMA = "DMA";
	public static $DNK = "DNK";
	public static $DOM = "DOM";
	public static $DZA = "DZA";
	public static $ECU = "ECU";
	public static $EGY = "EGY";
	public static $ERI = "ERI";
	public static $ESP = "ESP";
	public static $EST = "EST";
	public static $ETH = "ETH";
	public static $FIN = "FIN";
	public static $FJI = "FJI";
	public static $FLK = "FLK";
	public static $FRA = "FRA";
	public static $FRO = "FRO";
	public static $FSM = "FSM";
	public static $GAB = "GAB";
	public static $GBR = "GBR";
	public static $GEO = "GEO";
	public static $GGY = "GGY";
	public static $GHA = "GHA";
	public static $GIB = "GIB";
	public static $GIN = "GIN";
	public static $GLP = "GLP";
	public static $GMB = "GMB";
	public static $GNB = "GNB";
	public static $GNQ = "GNQ";
	public static $GRC = "GRC";
	public static $GRD = "GRD";
	public static $GRL = "GRL";
	public static $GTM = "GTM";
	public static $GUF = "GUF";
	public static $GUM = "GUM";
	public static $GUY = "GUY";
	public static $HKG = "HKG";
	public static $HND = "HND";
	public static $HRV = "HRV";
	public static $HTI = "HTI";
	public static $HUN = "HUN";
	public static $IDN = "IDN";
	public static $IMN = "IMN";
	public static $IND = "IND";
	public static $IRL = "IRL";
	public static $IRQ = "IRQ";
	public static $ISL = "ISL";
	public static $ISR = "ISR";
	public static $ITA = "ITA";
	public static $JAM = "JAM";
	public static $JEY = "JEY";
	public static $JOR = "JOR";
	public static $JPN = "JPN";
	public static $KAZ = "KAZ";
	public static $KEN = "KEN";
	public static $KGZ = "KGZ";
	public static $KHM = "KHM";
	public static $KIR = "KIR";
	public static $KNA = "KNA";
	public static $KOR = "KOR";
	public static $KWT = "KWT";
	public static $LAO = "LAO";
	public static $LBN = "LBN";
	public static $LBR = "LBR";
	public static $LBY = "LBY";
	public static $LCA = "LCA";
	public static $LIE = "LIE";
	public static $LKA = "LKA";
	public static $LSO = "LSO";
	public static $LTU = "LTU";
	public static $LUX = "LUX";
	public static $LVA = "LVA";
	public static $MAC = "MAC";
	public static $MAR = "MAR";
	public static $MCO = "MCO";
	public static $MDA = "MDA";
	public static $MDG = "MDG";
	public static $MDV = "MDV";
	public static $MEX = "MEX";
	public static $MHL = "MHL";
	public static $MKD = "MKD";
	public static $MLI = "MLI";
	public static $MLT = "MLT";
	public static $MMR = "MMR";
	public static $MNE = "MNE";
	public static $MNG = "MNG";
	public static $MNP = "MNP";
	public static $MOZ = "MOZ";
	public static $MRT = "MRT";
	public static $MSR = "MSR";
	public static $MTQ = "MTQ";
	public static $MUS = "MUS";
	public static $MWI = "MWI";
	public static $MYS = "MYS";
	public static $MYT = "MYT";
	public static $NAM = "NAM";
	public static $NCL = "NCL";
	public static $NER = "NER";
	public static $NFK = "NFK";
	public static $NGA = "NGA";
	public static $NIC = "NIC";
	public static $NIU = "NIU";
	public static $NLD = "NLD";
	public static $NOR = "NOR";
	public static $NPL = "NPL";
	public static $NRU = "NRU";
	public static $NZL = "NZL";
	public static $OMN = "OMN";
	public static $PAK = "PAK";
	public static $PAN = "PAN";
	public static $PER = "PER";
	public static $PHL = "PHL";
	public static $PLW = "PLW";
	public static $PNG = "PNG";
	public static $POL = "POL";
	public static $PRI = "PRI";
	public static $PRT = "PRT";
	public static $PRY = "PRY";
	public static $PSE = "PSE";
	public static $PYF = "PYF";
	public static $QAT = "QAT";
	public static $REU = "REU";
	public static $ROU = "ROU";
	public static $RUS = "RUS";
	public static $RWA = "RWA";
	public static $SAU = "SAU";
	public static $SEN = "SEN";
	public static $SGP = "SGP";
	public static $SHN = "SHN";
	public static $SLB = "SLB";
	public static $SLE = "SLE";
	public static $SLV = "SLV";
	public static $SMR = "SMR";
	public static $SOM = "SOM";
	public static $SPM = "SPM";
	public static $SRB = "SRB";
	public static $SSD = "SSD";
	public static $STP = "STP";
	public static $SUR = "SUR";
	public static $SVK = "SVK";
	public static $SVN = "SVN";
	public static $SWE = "SWE";
	public static $SWZ = "SWZ";
	public static $SXM = "SXM";
	public static $SYC = "SYC";
	public static $TCA = "TCA";
	public static $TCD = "TCD";
	public static $TGO = "TGO";
	public static $THA = "THA";
	public static $TJK = "TJK";
	public static $TKM = "TKM";
	public static $TLS = "TLS";
	public static $TON = "TON";
	public static $TTO = "TTO";
	public static $TUN = "TUN";
	public static $TUR = "TUR";
	public static $TUV = "TUV";
	public static $TWN = "TWN";
	public static $TZA = "TZA";
	public static $UGA = "UGA";
	public static $UKR = "UKR";
	public static $UMI = "UMI";
	public static $URY = "URY";
	public static $USA = "USA";
	public static $UZB = "UZB";
	public static $VAT = "VAT";
	public static $VCT = "VCT";
	public static $VEN = "VEN";
	public static $VGB = "VGB";
	public static $VIR = "VIR";
	public static $VNM = "VNM";
	public static $VUT = "VUT";
	public static $WLF = "WLF";
	public static $WSM = "WSM";
	public static $YEM = "YEM";
	public static $ZAF = "ZAF";
	public static $ZMB = "ZMB";
	public static $ZWE = "ZWE";


}
class_alias(TerritoryCode::class, 'AppleService_AppStore_TerritoryCode');

