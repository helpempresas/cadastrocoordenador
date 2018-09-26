<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_unidade = array();
	$tdatatbl_unidade[".truncateText"] = true;
	$tdatatbl_unidade[".NumberOfChars"] = 80;
	$tdatatbl_unidade[".ShortName"] = "tbl_unidade";
	$tdatatbl_unidade[".OwnerID"] = "";
	$tdatatbl_unidade[".OriginalTable"] = "tbl_unidade";

//	field labels
$fieldLabelstbl_unidade = array();
$fieldToolTipstbl_unidade = array();
$pageTitlestbl_unidade = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstbl_unidade["Portuguese(Brazil)"] = array();
	$fieldToolTipstbl_unidade["Portuguese(Brazil)"] = array();
	$pageTitlestbl_unidade["Portuguese(Brazil)"] = array();
	$fieldLabelstbl_unidade["Portuguese(Brazil)"]["idUnidade"] = "Id Unidade";
	$fieldToolTipstbl_unidade["Portuguese(Brazil)"]["idUnidade"] = "";
	$fieldLabelstbl_unidade["Portuguese(Brazil)"]["nomeUnidade"] = "Nome Unidade";
	$fieldToolTipstbl_unidade["Portuguese(Brazil)"]["nomeUnidade"] = "";
	if (count($fieldToolTipstbl_unidade["Portuguese(Brazil)"]))
		$tdatatbl_unidade[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_unidade[""] = array();
	$fieldToolTipstbl_unidade[""] = array();
	$pageTitlestbl_unidade[""] = array();
	if (count($fieldToolTipstbl_unidade[""]))
		$tdatatbl_unidade[".isUseToolTips"] = true;
}


	$tdatatbl_unidade[".NCSearch"] = true;



$tdatatbl_unidade[".shortTableName"] = "tbl_unidade";
$tdatatbl_unidade[".nSecOptions"] = 0;
$tdatatbl_unidade[".recsPerRowPrint"] = 1;
$tdatatbl_unidade[".mainTableOwnerID"] = "";
$tdatatbl_unidade[".moveNext"] = 1;
$tdatatbl_unidade[".entityType"] = 0;

$tdatatbl_unidade[".strOriginalTableName"] = "tbl_unidade";

	



$tdatatbl_unidade[".showAddInPopup"] = false;

$tdatatbl_unidade[".showEditInPopup"] = false;

$tdatatbl_unidade[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_unidade[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_unidade[".fieldsForRegister"] = array();

$tdatatbl_unidade[".listAjax"] = false;

	$tdatatbl_unidade[".audit"] = false;

	$tdatatbl_unidade[".locking"] = false;

$tdatatbl_unidade[".edit"] = true;
$tdatatbl_unidade[".afterEditAction"] = 1;
$tdatatbl_unidade[".closePopupAfterEdit"] = 1;
$tdatatbl_unidade[".afterEditActionDetTable"] = "";

$tdatatbl_unidade[".add"] = true;
$tdatatbl_unidade[".afterAddAction"] = 1;
$tdatatbl_unidade[".closePopupAfterAdd"] = 1;
$tdatatbl_unidade[".afterAddActionDetTable"] = "";

$tdatatbl_unidade[".list"] = true;

$tdatatbl_unidade[".inlineEdit"] = true;
$tdatatbl_unidade[".inlineAdd"] = true;
$tdatatbl_unidade[".view"] = true;

$tdatatbl_unidade[".import"] = true;

$tdatatbl_unidade[".exportTo"] = true;

$tdatatbl_unidade[".printFriendly"] = true;

$tdatatbl_unidade[".delete"] = true;

$tdatatbl_unidade[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_unidade[".searchSaving"] = false;
//

$tdatatbl_unidade[".showSearchPanel"] = true;
		$tdatatbl_unidade[".flexibleSearch"] = true;

$tdatatbl_unidade[".isUseAjaxSuggest"] = true;

$tdatatbl_unidade[".rowHighlite"] = true;



$tdatatbl_unidade[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_unidade[".isUseTimeForSearch"] = false;



$tdatatbl_unidade[".badgeColor"] = "6493EA";


$tdatatbl_unidade[".allSearchFields"] = array();
$tdatatbl_unidade[".filterFields"] = array();
$tdatatbl_unidade[".requiredSearchFields"] = array();

$tdatatbl_unidade[".allSearchFields"][] = "idUnidade";
	$tdatatbl_unidade[".allSearchFields"][] = "nomeUnidade";
	

$tdatatbl_unidade[".googleLikeFields"] = array();
$tdatatbl_unidade[".googleLikeFields"][] = "idUnidade";
$tdatatbl_unidade[".googleLikeFields"][] = "nomeUnidade";


$tdatatbl_unidade[".advSearchFields"] = array();
$tdatatbl_unidade[".advSearchFields"][] = "idUnidade";
$tdatatbl_unidade[".advSearchFields"][] = "nomeUnidade";

$tdatatbl_unidade[".tableType"] = "list";

$tdatatbl_unidade[".printerPageOrientation"] = 0;
$tdatatbl_unidade[".nPrinterPageScale"] = 100;

$tdatatbl_unidade[".nPrinterSplitRecords"] = 40;

$tdatatbl_unidade[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_unidade[".geocodingEnabled"] = false;





$tdatatbl_unidade[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_unidade[".pageSize"] = 20;

$tdatatbl_unidade[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_unidade[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_unidade[".orderindexes"] = array();

$tdatatbl_unidade[".sqlHead"] = "SELECT idUnidade,  nomeUnidade";
$tdatatbl_unidade[".sqlFrom"] = "FROM tbl_unidade";
$tdatatbl_unidade[".sqlWhereExpr"] = "";
$tdatatbl_unidade[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_unidade[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_unidade[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_unidade[".highlightSearchResults"] = true;

$tableKeystbl_unidade = array();
$tableKeystbl_unidade[] = "idUnidade";
$tdatatbl_unidade[".Keys"] = $tableKeystbl_unidade;

$tdatatbl_unidade[".listFields"] = array();
$tdatatbl_unidade[".listFields"][] = "idUnidade";
$tdatatbl_unidade[".listFields"][] = "nomeUnidade";

$tdatatbl_unidade[".hideMobileList"] = array();


$tdatatbl_unidade[".viewFields"] = array();
$tdatatbl_unidade[".viewFields"][] = "idUnidade";
$tdatatbl_unidade[".viewFields"][] = "nomeUnidade";

$tdatatbl_unidade[".addFields"] = array();
$tdatatbl_unidade[".addFields"][] = "nomeUnidade";

$tdatatbl_unidade[".masterListFields"] = array();
$tdatatbl_unidade[".masterListFields"][] = "idUnidade";
$tdatatbl_unidade[".masterListFields"][] = "nomeUnidade";

$tdatatbl_unidade[".inlineAddFields"] = array();
$tdatatbl_unidade[".inlineAddFields"][] = "nomeUnidade";

$tdatatbl_unidade[".editFields"] = array();
$tdatatbl_unidade[".editFields"][] = "nomeUnidade";

$tdatatbl_unidade[".inlineEditFields"] = array();
$tdatatbl_unidade[".inlineEditFields"][] = "nomeUnidade";

$tdatatbl_unidade[".exportFields"] = array();
$tdatatbl_unidade[".exportFields"][] = "idUnidade";
$tdatatbl_unidade[".exportFields"][] = "nomeUnidade";

$tdatatbl_unidade[".importFields"] = array();
$tdatatbl_unidade[".importFields"][] = "idUnidade";
$tdatatbl_unidade[".importFields"][] = "nomeUnidade";

$tdatatbl_unidade[".printFields"] = array();
$tdatatbl_unidade[".printFields"][] = "idUnidade";
$tdatatbl_unidade[".printFields"][] = "nomeUnidade";

//	idUnidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idUnidade";
	$fdata["GoodName"] = "idUnidade";
	$fdata["ownerTable"] = "tbl_unidade";
	$fdata["Label"] = GetFieldLabel("tbl_unidade","idUnidade");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idUnidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idUnidade";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_unidade["idUnidade"] = $fdata;
//	nomeUnidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nomeUnidade";
	$fdata["GoodName"] = "nomeUnidade";
	$fdata["ownerTable"] = "tbl_unidade";
	$fdata["Label"] = GetFieldLabel("tbl_unidade","nomeUnidade");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nomeUnidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomeUnidade";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_unidade["nomeUnidade"] = $fdata;


$tables_data["tbl_unidade"]=&$tdatatbl_unidade;
$field_labels["tbl_unidade"] = &$fieldLabelstbl_unidade;
$fieldToolTips["tbl_unidade"] = &$fieldToolTipstbl_unidade;
$page_titles["tbl_unidade"] = &$pageTitlestbl_unidade;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_unidade"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_unidade"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_unidade()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idUnidade,  nomeUnidade";
$proto0["m_strFrom"] = "FROM tbl_unidade";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idUnidade",
	"m_strTable" => "tbl_unidade",
	"m_srcTableName" => "tbl_unidade"
));

$proto6["m_sql"] = "idUnidade";
$proto6["m_srcTableName"] = "tbl_unidade";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nomeUnidade",
	"m_strTable" => "tbl_unidade",
	"m_srcTableName" => "tbl_unidade"
));

$proto8["m_sql"] = "nomeUnidade";
$proto8["m_srcTableName"] = "tbl_unidade";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tbl_unidade";
$proto11["m_srcTableName"] = "tbl_unidade";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idUnidade";
$proto11["m_columns"][] = "nomeUnidade";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tbl_unidade";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tbl_unidade";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_unidade";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_unidade = createSqlQuery_tbl_unidade();


	
		;

		

$tdatatbl_unidade[".sqlquery"] = $queryData_tbl_unidade;

$tableEvents["tbl_unidade"] = new eventsBase;
$tdatatbl_unidade[".hasEvents"] = false;

?>