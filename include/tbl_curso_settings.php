<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_curso = array();
	$tdatatbl_curso[".truncateText"] = true;
	$tdatatbl_curso[".NumberOfChars"] = 80;
	$tdatatbl_curso[".ShortName"] = "tbl_curso";
	$tdatatbl_curso[".OwnerID"] = "";
	$tdatatbl_curso[".OriginalTable"] = "tbl_curso";

//	field labels
$fieldLabelstbl_curso = array();
$fieldToolTipstbl_curso = array();
$pageTitlestbl_curso = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstbl_curso["Portuguese(Brazil)"] = array();
	$fieldToolTipstbl_curso["Portuguese(Brazil)"] = array();
	$pageTitlestbl_curso["Portuguese(Brazil)"] = array();
	$fieldLabelstbl_curso["Portuguese(Brazil)"]["idCurso"] = "Id Curso";
	$fieldToolTipstbl_curso["Portuguese(Brazil)"]["idCurso"] = "";
	$fieldLabelstbl_curso["Portuguese(Brazil)"]["nomeCurso"] = "Nome Curso";
	$fieldToolTipstbl_curso["Portuguese(Brazil)"]["nomeCurso"] = "";
	$fieldLabelstbl_curso["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipstbl_curso["Portuguese(Brazil)"]["cidade"] = "";
	if (count($fieldToolTipstbl_curso["Portuguese(Brazil)"]))
		$tdatatbl_curso[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_curso[""] = array();
	$fieldToolTipstbl_curso[""] = array();
	$pageTitlestbl_curso[""] = array();
	if (count($fieldToolTipstbl_curso[""]))
		$tdatatbl_curso[".isUseToolTips"] = true;
}


	$tdatatbl_curso[".NCSearch"] = true;



$tdatatbl_curso[".shortTableName"] = "tbl_curso";
$tdatatbl_curso[".nSecOptions"] = 0;
$tdatatbl_curso[".recsPerRowPrint"] = 1;
$tdatatbl_curso[".mainTableOwnerID"] = "";
$tdatatbl_curso[".moveNext"] = 1;
$tdatatbl_curso[".entityType"] = 0;

$tdatatbl_curso[".strOriginalTableName"] = "tbl_curso";

	



$tdatatbl_curso[".showAddInPopup"] = false;

$tdatatbl_curso[".showEditInPopup"] = false;

$tdatatbl_curso[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_curso[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_curso[".fieldsForRegister"] = array();

	$tdatatbl_curso[".listAjax"] = true;

	$tdatatbl_curso[".audit"] = false;

	$tdatatbl_curso[".locking"] = false;

$tdatatbl_curso[".edit"] = true;
$tdatatbl_curso[".afterEditAction"] = 1;
$tdatatbl_curso[".closePopupAfterEdit"] = 1;
$tdatatbl_curso[".afterEditActionDetTable"] = "";

$tdatatbl_curso[".add"] = true;
$tdatatbl_curso[".afterAddAction"] = 1;
$tdatatbl_curso[".closePopupAfterAdd"] = 1;
$tdatatbl_curso[".afterAddActionDetTable"] = "";

$tdatatbl_curso[".list"] = true;

$tdatatbl_curso[".inlineEdit"] = true;
$tdatatbl_curso[".inlineAdd"] = true;
$tdatatbl_curso[".view"] = true;

$tdatatbl_curso[".import"] = true;

$tdatatbl_curso[".exportTo"] = true;

$tdatatbl_curso[".printFriendly"] = true;

$tdatatbl_curso[".delete"] = true;

$tdatatbl_curso[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_curso[".searchSaving"] = false;
//

$tdatatbl_curso[".showSearchPanel"] = true;
		$tdatatbl_curso[".flexibleSearch"] = true;

$tdatatbl_curso[".isUseAjaxSuggest"] = true;

$tdatatbl_curso[".rowHighlite"] = true;



$tdatatbl_curso[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_curso[".isUseTimeForSearch"] = false;



$tdatatbl_curso[".badgeColor"] = "4169E1";


$tdatatbl_curso[".allSearchFields"] = array();
$tdatatbl_curso[".filterFields"] = array();
$tdatatbl_curso[".requiredSearchFields"] = array();

$tdatatbl_curso[".allSearchFields"][] = "idCurso";
	$tdatatbl_curso[".allSearchFields"][] = "nomeCurso";
	$tdatatbl_curso[".allSearchFields"][] = "cidade";
	

$tdatatbl_curso[".googleLikeFields"] = array();
$tdatatbl_curso[".googleLikeFields"][] = "idCurso";
$tdatatbl_curso[".googleLikeFields"][] = "nomeCurso";
$tdatatbl_curso[".googleLikeFields"][] = "cidade";


$tdatatbl_curso[".advSearchFields"] = array();
$tdatatbl_curso[".advSearchFields"][] = "idCurso";
$tdatatbl_curso[".advSearchFields"][] = "nomeCurso";
$tdatatbl_curso[".advSearchFields"][] = "cidade";

$tdatatbl_curso[".tableType"] = "list";

$tdatatbl_curso[".printerPageOrientation"] = 0;
$tdatatbl_curso[".nPrinterPageScale"] = 100;

$tdatatbl_curso[".nPrinterSplitRecords"] = 40;

$tdatatbl_curso[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_curso[".geocodingEnabled"] = false;





$tdatatbl_curso[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_curso[".pageSize"] = 20;

$tdatatbl_curso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_curso[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_curso[".orderindexes"] = array();

$tdatatbl_curso[".sqlHead"] = "SELECT idCurso,   nomeCurso,   cidade";
$tdatatbl_curso[".sqlFrom"] = "FROM tbl_curso";
$tdatatbl_curso[".sqlWhereExpr"] = "";
$tdatatbl_curso[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_curso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_curso[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_curso[".highlightSearchResults"] = true;

$tableKeystbl_curso = array();
$tableKeystbl_curso[] = "idCurso";
$tdatatbl_curso[".Keys"] = $tableKeystbl_curso;

$tdatatbl_curso[".listFields"] = array();
$tdatatbl_curso[".listFields"][] = "idCurso";
$tdatatbl_curso[".listFields"][] = "nomeCurso";
$tdatatbl_curso[".listFields"][] = "cidade";

$tdatatbl_curso[".hideMobileList"] = array();


$tdatatbl_curso[".viewFields"] = array();
$tdatatbl_curso[".viewFields"][] = "idCurso";
$tdatatbl_curso[".viewFields"][] = "nomeCurso";
$tdatatbl_curso[".viewFields"][] = "cidade";

$tdatatbl_curso[".addFields"] = array();
$tdatatbl_curso[".addFields"][] = "nomeCurso";
$tdatatbl_curso[".addFields"][] = "cidade";

$tdatatbl_curso[".masterListFields"] = array();
$tdatatbl_curso[".masterListFields"][] = "idCurso";
$tdatatbl_curso[".masterListFields"][] = "nomeCurso";
$tdatatbl_curso[".masterListFields"][] = "cidade";

$tdatatbl_curso[".inlineAddFields"] = array();
$tdatatbl_curso[".inlineAddFields"][] = "nomeCurso";
$tdatatbl_curso[".inlineAddFields"][] = "cidade";

$tdatatbl_curso[".editFields"] = array();
$tdatatbl_curso[".editFields"][] = "nomeCurso";
$tdatatbl_curso[".editFields"][] = "cidade";

$tdatatbl_curso[".inlineEditFields"] = array();
$tdatatbl_curso[".inlineEditFields"][] = "nomeCurso";
$tdatatbl_curso[".inlineEditFields"][] = "cidade";

$tdatatbl_curso[".exportFields"] = array();
$tdatatbl_curso[".exportFields"][] = "idCurso";
$tdatatbl_curso[".exportFields"][] = "nomeCurso";
$tdatatbl_curso[".exportFields"][] = "cidade";

$tdatatbl_curso[".importFields"] = array();
$tdatatbl_curso[".importFields"][] = "idCurso";
$tdatatbl_curso[".importFields"][] = "nomeCurso";
$tdatatbl_curso[".importFields"][] = "cidade";

$tdatatbl_curso[".printFields"] = array();
$tdatatbl_curso[".printFields"][] = "idCurso";
$tdatatbl_curso[".printFields"][] = "nomeCurso";
$tdatatbl_curso[".printFields"][] = "cidade";

//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "tbl_curso";
	$fdata["Label"] = GetFieldLabel("tbl_curso","idCurso");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCurso";

	
	
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




	$tdatatbl_curso["idCurso"] = $fdata;
//	nomeCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nomeCurso";
	$fdata["GoodName"] = "nomeCurso";
	$fdata["ownerTable"] = "tbl_curso";
	$fdata["Label"] = GetFieldLabel("tbl_curso","nomeCurso");
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

		$fdata["strField"] = "nomeCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomeCurso";

	
	
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




	$tdatatbl_curso["nomeCurso"] = $fdata;
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "tbl_curso";
	$fdata["Label"] = GetFieldLabel("tbl_curso","cidade");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cidade";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_curso["cidade"] = $fdata;


$tables_data["tbl_curso"]=&$tdatatbl_curso;
$field_labels["tbl_curso"] = &$fieldLabelstbl_curso;
$fieldToolTips["tbl_curso"] = &$fieldToolTipstbl_curso;
$page_titles["tbl_curso"] = &$pageTitlestbl_curso;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_curso"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_curso"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_curso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCurso,   nomeCurso,   cidade";
$proto0["m_strFrom"] = "FROM tbl_curso";
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
	"m_strName" => "idCurso",
	"m_strTable" => "tbl_curso",
	"m_srcTableName" => "tbl_curso"
));

$proto6["m_sql"] = "idCurso";
$proto6["m_srcTableName"] = "tbl_curso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nomeCurso",
	"m_strTable" => "tbl_curso",
	"m_srcTableName" => "tbl_curso"
));

$proto8["m_sql"] = "nomeCurso";
$proto8["m_srcTableName"] = "tbl_curso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "tbl_curso",
	"m_srcTableName" => "tbl_curso"
));

$proto10["m_sql"] = "cidade";
$proto10["m_srcTableName"] = "tbl_curso";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tbl_curso";
$proto13["m_srcTableName"] = "tbl_curso";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "idCurso";
$proto13["m_columns"][] = "nomeCurso";
$proto13["m_columns"][] = "cidade";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tbl_curso";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tbl_curso";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_curso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_curso = createSqlQuery_tbl_curso();


	
		;

			

$tdatatbl_curso[".sqlquery"] = $queryData_tbl_curso;

$tableEvents["tbl_curso"] = new eventsBase;
$tdatatbl_curso[".hasEvents"] = false;

?>