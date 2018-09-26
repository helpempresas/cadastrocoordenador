<?php

function getMenuNodes_welcome_page($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["welcome_page"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "cursos";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "cursos";

	$menuNode["comments"] = "Project description";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Coordenador";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tbl_coordenador";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-user";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "#"."9ACD32";
	
	$menuNode["title"] = "Coordenador";

	$menuNode["comments"] = "Change this text on the Welcome page in the Visual Editor.";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Curso";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tbl_curso";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-book";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "#"."4169E1";
	
	$menuNode["title"] = "Curso";

	$menuNode["comments"] = "Tbl Curso description";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "Unidade";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "tbl_unidade";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-tree-conifer";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "#"."6493EA";
	
	$menuNode["title"] = "Unidade";

	$menuNode["comments"] = "Tbl Unidade description";


	$menuNodesObject->menuNodes["welcome_page"][] = $menuNode;
}
?>
