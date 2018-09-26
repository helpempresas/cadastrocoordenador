<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatbl_coordenador = array();
	$tdatatbl_coordenador[".truncateText"] = true;
	$tdatatbl_coordenador[".NumberOfChars"] = 80;
	$tdatatbl_coordenador[".ShortName"] = "tbl_coordenador";
	$tdatatbl_coordenador[".OwnerID"] = "";
	$tdatatbl_coordenador[".OriginalTable"] = "tbl_coordenador";

//	field labels
$fieldLabelstbl_coordenador = array();
$fieldToolTipstbl_coordenador = array();
$pageTitlestbl_coordenador = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"] = array();
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"] = array();
	$pageTitlestbl_coordenador["Portuguese(Brazil)"] = array();
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["idCoordenador"] = "Id Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["idCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["nomeCoordenador"] = "Nome Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["nomeCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["cursoCoordenador"] = "Curso Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["cursoCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["fotoCoordenador"] = "Foto Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["fotoCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["descCoordenador"] = "Desc Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["descCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["telefoneCoordenador"] = "Telefone Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["telefoneCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["emailCoordenador"] = "Email Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["emailCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["unidadeCoordenador"] = "Unidade Coordenador";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["unidadeCoordenador"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["nomeCurso"] = "Nome Curso";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["nomeCurso"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["cidade"] = "Cidade";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelstbl_coordenador["Portuguese(Brazil)"]["idCurso"] = "Id Curso";
	$fieldToolTipstbl_coordenador["Portuguese(Brazil)"]["idCurso"] = "";
	if (count($fieldToolTipstbl_coordenador["Portuguese(Brazil)"]))
		$tdatatbl_coordenador[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstbl_coordenador[""] = array();
	$fieldToolTipstbl_coordenador[""] = array();
	$pageTitlestbl_coordenador[""] = array();
	$fieldLabelstbl_coordenador[""]["nomeCurso"] = "Nome Curso";
	$fieldToolTipstbl_coordenador[""]["nomeCurso"] = "";
	$fieldLabelstbl_coordenador[""]["cidade"] = "Cidade";
	$fieldToolTipstbl_coordenador[""]["cidade"] = "";
	$fieldLabelstbl_coordenador[""]["idCurso"] = "Id Curso";
	$fieldToolTipstbl_coordenador[""]["idCurso"] = "";
	if (count($fieldToolTipstbl_coordenador[""]))
		$tdatatbl_coordenador[".isUseToolTips"] = true;
}


	$tdatatbl_coordenador[".NCSearch"] = true;



$tdatatbl_coordenador[".shortTableName"] = "tbl_coordenador";
$tdatatbl_coordenador[".nSecOptions"] = 0;
$tdatatbl_coordenador[".recsPerRowPrint"] = 1;
$tdatatbl_coordenador[".mainTableOwnerID"] = "";
$tdatatbl_coordenador[".moveNext"] = 1;
$tdatatbl_coordenador[".entityType"] = 0;

$tdatatbl_coordenador[".strOriginalTableName"] = "tbl_coordenador";

	



$tdatatbl_coordenador[".showAddInPopup"] = false;

$tdatatbl_coordenador[".showEditInPopup"] = false;

$tdatatbl_coordenador[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatbl_coordenador[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatbl_coordenador[".fieldsForRegister"] = array();

$tdatatbl_coordenador[".listAjax"] = false;

	$tdatatbl_coordenador[".audit"] = false;

	$tdatatbl_coordenador[".locking"] = false;

$tdatatbl_coordenador[".edit"] = true;
$tdatatbl_coordenador[".afterEditAction"] = 1;
$tdatatbl_coordenador[".closePopupAfterEdit"] = 1;
$tdatatbl_coordenador[".afterEditActionDetTable"] = "";

$tdatatbl_coordenador[".add"] = true;
$tdatatbl_coordenador[".afterAddAction"] = 1;
$tdatatbl_coordenador[".closePopupAfterAdd"] = 1;
$tdatatbl_coordenador[".afterAddActionDetTable"] = "";

$tdatatbl_coordenador[".list"] = true;

$tdatatbl_coordenador[".inlineEdit"] = true;
$tdatatbl_coordenador[".inlineAdd"] = true;
$tdatatbl_coordenador[".view"] = true;

$tdatatbl_coordenador[".import"] = true;

$tdatatbl_coordenador[".exportTo"] = true;

$tdatatbl_coordenador[".printFriendly"] = true;

$tdatatbl_coordenador[".delete"] = true;

$tdatatbl_coordenador[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatbl_coordenador[".searchSaving"] = false;
//

$tdatatbl_coordenador[".showSearchPanel"] = true;
		$tdatatbl_coordenador[".flexibleSearch"] = true;

$tdatatbl_coordenador[".isUseAjaxSuggest"] = true;

$tdatatbl_coordenador[".rowHighlite"] = true;



$tdatatbl_coordenador[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatbl_coordenador[".isUseTimeForSearch"] = false;



$tdatatbl_coordenador[".badgeColor"] = "9ACD32";


$tdatatbl_coordenador[".allSearchFields"] = array();
$tdatatbl_coordenador[".filterFields"] = array();
$tdatatbl_coordenador[".requiredSearchFields"] = array();

$tdatatbl_coordenador[".allSearchFields"][] = "fotoCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "descCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "telefoneCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "emailCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "unidadeCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "nomeCurso";
	$tdatatbl_coordenador[".allSearchFields"][] = "cidade";
	$tdatatbl_coordenador[".allSearchFields"][] = "nomeCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "cursoCoordenador";
	$tdatatbl_coordenador[".allSearchFields"][] = "idCurso";
	

$tdatatbl_coordenador[".googleLikeFields"] = array();
$tdatatbl_coordenador[".googleLikeFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "descCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "nomeCurso";
$tdatatbl_coordenador[".googleLikeFields"][] = "cidade";
$tdatatbl_coordenador[".googleLikeFields"][] = "idCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".googleLikeFields"][] = "idCurso";


$tdatatbl_coordenador[".advSearchFields"] = array();
$tdatatbl_coordenador[".advSearchFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "descCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "nomeCurso";
$tdatatbl_coordenador[".advSearchFields"][] = "cidade";
$tdatatbl_coordenador[".advSearchFields"][] = "idCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".advSearchFields"][] = "idCurso";

$tdatatbl_coordenador[".tableType"] = "list";

$tdatatbl_coordenador[".printerPageOrientation"] = 0;
$tdatatbl_coordenador[".nPrinterPageScale"] = 100;

$tdatatbl_coordenador[".nPrinterSplitRecords"] = 40;

$tdatatbl_coordenador[".nPrinterPDFSplitRecords"] = 40;



$tdatatbl_coordenador[".geocodingEnabled"] = false;





$tdatatbl_coordenador[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatbl_coordenador[".pageSize"] = 20;

$tdatatbl_coordenador[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatbl_coordenador[".strOrderBy"] = $tstrOrderBy;

$tdatatbl_coordenador[".orderindexes"] = array();

$tdatatbl_coordenador[".sqlHead"] = "SELECT tbl_coordenador.fotoCoordenador,  tbl_coordenador.descCoordenador,  tbl_coordenador.telefoneCoordenador,  tbl_coordenador.emailCoordenador,  tbl_coordenador.unidadeCoordenador,  tbl_curso.nomeCurso,  tbl_curso.cidade,  tbl_coordenador.idCoordenador,  tbl_coordenador.nomeCoordenador,  tbl_coordenador.cursoCoordenador,  tbl_curso.idCurso";
$tdatatbl_coordenador[".sqlFrom"] = "FROM tbl_coordenador  INNER JOIN tbl_curso ON tbl_coordenador.cursoCoordenador = tbl_curso.idCurso";
$tdatatbl_coordenador[".sqlWhereExpr"] = "";
$tdatatbl_coordenador[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatbl_coordenador[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatbl_coordenador[".arrGroupsPerPage"] = $arrGPP;

$tdatatbl_coordenador[".highlightSearchResults"] = true;

$tableKeystbl_coordenador = array();
$tableKeystbl_coordenador[] = "idCoordenador";
$tdatatbl_coordenador[".Keys"] = $tableKeystbl_coordenador;

$tdatatbl_coordenador[".listFields"] = array();
$tdatatbl_coordenador[".listFields"][] = "nomeCurso";
$tdatatbl_coordenador[".listFields"][] = "cidade";
$tdatatbl_coordenador[".listFields"][] = "idCurso";
$tdatatbl_coordenador[".listFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".listFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".listFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".listFields"][] = "descCoordenador";
$tdatatbl_coordenador[".listFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".listFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".listFields"][] = "unidadeCoordenador";

$tdatatbl_coordenador[".hideMobileList"] = array();


$tdatatbl_coordenador[".viewFields"] = array();
$tdatatbl_coordenador[".viewFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "descCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "nomeCurso";
$tdatatbl_coordenador[".viewFields"][] = "cidade";
$tdatatbl_coordenador[".viewFields"][] = "idCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".viewFields"][] = "idCurso";

$tdatatbl_coordenador[".addFields"] = array();
$tdatatbl_coordenador[".addFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".addFields"][] = "descCoordenador";
$tdatatbl_coordenador[".addFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".addFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".addFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".addFields"][] = "nomeCurso";
$tdatatbl_coordenador[".addFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".addFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".addFields"][] = "idCurso";

$tdatatbl_coordenador[".masterListFields"] = array();
$tdatatbl_coordenador[".masterListFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "descCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "nomeCurso";
$tdatatbl_coordenador[".masterListFields"][] = "cidade";
$tdatatbl_coordenador[".masterListFields"][] = "idCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".masterListFields"][] = "idCurso";

$tdatatbl_coordenador[".inlineAddFields"] = array();
$tdatatbl_coordenador[".inlineAddFields"][] = "nomeCurso";
$tdatatbl_coordenador[".inlineAddFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".inlineAddFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".inlineAddFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".inlineAddFields"][] = "descCoordenador";
$tdatatbl_coordenador[".inlineAddFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".inlineAddFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".inlineAddFields"][] = "unidadeCoordenador";

$tdatatbl_coordenador[".editFields"] = array();
$tdatatbl_coordenador[".editFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".editFields"][] = "descCoordenador";
$tdatatbl_coordenador[".editFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".editFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".editFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".editFields"][] = "nomeCurso";
$tdatatbl_coordenador[".editFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".editFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".editFields"][] = "idCurso";

$tdatatbl_coordenador[".inlineEditFields"] = array();
$tdatatbl_coordenador[".inlineEditFields"][] = "nomeCurso";
$tdatatbl_coordenador[".inlineEditFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".inlineEditFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".inlineEditFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".inlineEditFields"][] = "descCoordenador";
$tdatatbl_coordenador[".inlineEditFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".inlineEditFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".inlineEditFields"][] = "unidadeCoordenador";

$tdatatbl_coordenador[".exportFields"] = array();
$tdatatbl_coordenador[".exportFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "descCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "nomeCurso";
$tdatatbl_coordenador[".exportFields"][] = "cidade";
$tdatatbl_coordenador[".exportFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".exportFields"][] = "idCurso";

$tdatatbl_coordenador[".importFields"] = array();
$tdatatbl_coordenador[".importFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".importFields"][] = "descCoordenador";
$tdatatbl_coordenador[".importFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".importFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".importFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".importFields"][] = "nomeCurso";
$tdatatbl_coordenador[".importFields"][] = "cidade";
$tdatatbl_coordenador[".importFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".importFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".importFields"][] = "idCurso";

$tdatatbl_coordenador[".printFields"] = array();
$tdatatbl_coordenador[".printFields"][] = "fotoCoordenador";
$tdatatbl_coordenador[".printFields"][] = "descCoordenador";
$tdatatbl_coordenador[".printFields"][] = "telefoneCoordenador";
$tdatatbl_coordenador[".printFields"][] = "emailCoordenador";
$tdatatbl_coordenador[".printFields"][] = "unidadeCoordenador";
$tdatatbl_coordenador[".printFields"][] = "nomeCurso";
$tdatatbl_coordenador[".printFields"][] = "cidade";
$tdatatbl_coordenador[".printFields"][] = "nomeCoordenador";
$tdatatbl_coordenador[".printFields"][] = "cursoCoordenador";
$tdatatbl_coordenador[".printFields"][] = "idCurso";

//	fotoCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fotoCoordenador";
	$fdata["GoodName"] = "fotoCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","fotoCoordenador");
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

		$fdata["strField"] = "fotoCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.fotoCoordenador";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_coordenador["fotoCoordenador"] = $fdata;
//	descCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descCoordenador";
	$fdata["GoodName"] = "descCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","descCoordenador");
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

		$fdata["strField"] = "descCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.descCoordenador";

	
	
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




	$tdatatbl_coordenador["descCoordenador"] = $fdata;
//	telefoneCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "telefoneCoordenador";
	$fdata["GoodName"] = "telefoneCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","telefoneCoordenador");
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

		$fdata["strField"] = "telefoneCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.telefoneCoordenador";

	
	
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




	$tdatatbl_coordenador["telefoneCoordenador"] = $fdata;
//	emailCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "emailCoordenador";
	$fdata["GoodName"] = "emailCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","emailCoordenador");
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

		$fdata["strField"] = "emailCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.emailCoordenador";

	
	
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




	$tdatatbl_coordenador["emailCoordenador"] = $fdata;
//	unidadeCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidadeCoordenador";
	$fdata["GoodName"] = "unidadeCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","unidadeCoordenador");
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

		$fdata["strField"] = "unidadeCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.unidadeCoordenador";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_unidade";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idUnidade";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nomeUnidade";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_coordenador["unidadeCoordenador"] = $fdata;
//	nomeCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nomeCurso";
	$fdata["GoodName"] = "nomeCurso";
	$fdata["ownerTable"] = "tbl_curso";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","nomeCurso");
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
	$fdata["FullName"] = "tbl_curso.nomeCurso";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_coordenador["nomeCurso"] = $fdata;
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "tbl_curso";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","cidade");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_curso.cidade";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_coordenador["cidade"] = $fdata;
//	idCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idCoordenador";
	$fdata["GoodName"] = "idCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","idCoordenador");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
		$fdata["bViewPage"] = true;

	
	
	
		$fdata["strField"] = "idCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.idCoordenador";

	
	
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








	$tdatatbl_coordenador["idCoordenador"] = $fdata;
//	nomeCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nomeCoordenador";
	$fdata["GoodName"] = "nomeCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","nomeCoordenador");
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

		$fdata["strField"] = "nomeCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.nomeCoordenador";

	
	
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




	$tdatatbl_coordenador["nomeCoordenador"] = $fdata;
//	cursoCoordenador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cursoCoordenador";
	$fdata["GoodName"] = "cursoCoordenador";
	$fdata["ownerTable"] = "tbl_coordenador";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","cursoCoordenador");
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

		$fdata["strField"] = "cursoCoordenador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_coordenador.cursoCoordenador";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tbl_curso";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idCurso";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nomeCurso";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_coordenador["cursoCoordenador"] = $fdata;
//	idCurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idCurso";
	$fdata["GoodName"] = "idCurso";
	$fdata["ownerTable"] = "tbl_curso";
	$fdata["Label"] = GetFieldLabel("tbl_coordenador","idCurso");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "idCurso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tbl_curso.idCurso";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatbl_coordenador["idCurso"] = $fdata;


$tables_data["tbl_coordenador"]=&$tdatatbl_coordenador;
$field_labels["tbl_coordenador"] = &$fieldLabelstbl_coordenador;
$fieldToolTips["tbl_coordenador"] = &$fieldToolTipstbl_coordenador;
$page_titles["tbl_coordenador"] = &$pageTitlestbl_coordenador;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tbl_coordenador"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tbl_coordenador"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tbl_coordenador()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tbl_coordenador.fotoCoordenador,  tbl_coordenador.descCoordenador,  tbl_coordenador.telefoneCoordenador,  tbl_coordenador.emailCoordenador,  tbl_coordenador.unidadeCoordenador,  tbl_curso.nomeCurso,  tbl_curso.cidade,  tbl_coordenador.idCoordenador,  tbl_coordenador.nomeCoordenador,  tbl_coordenador.cursoCoordenador,  tbl_curso.idCurso";
$proto0["m_strFrom"] = "FROM tbl_coordenador  INNER JOIN tbl_curso ON tbl_coordenador.cursoCoordenador = tbl_curso.idCurso";
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
	"m_strName" => "fotoCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto6["m_sql"] = "tbl_coordenador.fotoCoordenador";
$proto6["m_srcTableName"] = "tbl_coordenador";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto8["m_sql"] = "tbl_coordenador.descCoordenador";
$proto8["m_srcTableName"] = "tbl_coordenador";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "telefoneCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto10["m_sql"] = "tbl_coordenador.telefoneCoordenador";
$proto10["m_srcTableName"] = "tbl_coordenador";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "emailCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto12["m_sql"] = "tbl_coordenador.emailCoordenador";
$proto12["m_srcTableName"] = "tbl_coordenador";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "unidadeCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto14["m_sql"] = "tbl_coordenador.unidadeCoordenador";
$proto14["m_srcTableName"] = "tbl_coordenador";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nomeCurso",
	"m_strTable" => "tbl_curso",
	"m_srcTableName" => "tbl_coordenador"
));

$proto16["m_sql"] = "tbl_curso.nomeCurso";
$proto16["m_srcTableName"] = "tbl_coordenador";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "tbl_curso",
	"m_srcTableName" => "tbl_coordenador"
));

$proto18["m_sql"] = "tbl_curso.cidade";
$proto18["m_srcTableName"] = "tbl_coordenador";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto20["m_sql"] = "tbl_coordenador.idCoordenador";
$proto20["m_srcTableName"] = "tbl_coordenador";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nomeCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto22["m_sql"] = "tbl_coordenador.nomeCoordenador";
$proto22["m_srcTableName"] = "tbl_coordenador";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cursoCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto24["m_sql"] = "tbl_coordenador.cursoCoordenador";
$proto24["m_srcTableName"] = "tbl_coordenador";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "idCurso",
	"m_strTable" => "tbl_curso",
	"m_srcTableName" => "tbl_coordenador"
));

$proto26["m_sql"] = "tbl_curso.idCurso";
$proto26["m_srcTableName"] = "tbl_coordenador";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "tbl_coordenador";
$proto29["m_srcTableName"] = "tbl_coordenador";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "idCoordenador";
$proto29["m_columns"][] = "nomeCoordenador";
$proto29["m_columns"][] = "cursoCoordenador";
$proto29["m_columns"][] = "fotoCoordenador";
$proto29["m_columns"][] = "descCoordenador";
$proto29["m_columns"][] = "telefoneCoordenador";
$proto29["m_columns"][] = "emailCoordenador";
$proto29["m_columns"][] = "unidadeCoordenador";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "tbl_coordenador";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "tbl_coordenador";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "tbl_curso";
$proto33["m_srcTableName"] = "tbl_coordenador";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "idCurso";
$proto33["m_columns"][] = "nomeCurso";
$proto33["m_columns"][] = "cidade";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN tbl_curso ON tbl_coordenador.cursoCoordenador = tbl_curso.idCurso";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tbl_coordenador";
$proto34=array();
$proto34["m_sql"] = "tbl_coordenador.cursoCoordenador = tbl_curso.idCurso";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cursoCoordenador",
	"m_strTable" => "tbl_coordenador",
	"m_srcTableName" => "tbl_coordenador"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= tbl_curso.idCurso";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tbl_coordenador";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tbl_coordenador = createSqlQuery_tbl_coordenador();


	
		;

											

$tdatatbl_coordenador[".sqlquery"] = $queryData_tbl_coordenador;

$tableEvents["tbl_coordenador"] = new eventsBase;
$tdatatbl_coordenador[".hasEvents"] = false;

?>