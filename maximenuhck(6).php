
.clr {clear:both;}

/*---------------------------------------------
---	 	menu container						---
----------------------------------------------*/

/* menu */
div#contact_menu_h {
	font-size:14px; 
	line-height:21px;
	text-align:left;
}

/* container style */
div#contact_menu_h ul.maximenuck {
    overflow: visible !important;
    display: block !important;
    visibility: visible !important;
    list-style:none;
    margin:0 auto;
    zoom:1;
    text-align: center;
}

div#contact_menu_h ul.maximenuck:after {
    content: " ";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
    font-size: 0;
}

/*---------------------------------------------
---	 	Root items - level 1				---
----------------------------------------------*/

div#contact_menu_h ul.maximenuck li.maximenuck.level1 {
    list-style : none;
    display:block;
    cursor: pointer;

    width: 48%;
    float: none !important;
    max-width: 355px;
    margin: 5px;
}

div#contact_menu_h ul.maximenuck li.maximenuck.level1.first {

}

div#contact_menu_h ul.maximenuck li.maximenuck.level1:hover,
div#contact_menu_h ul.maximenuck li.maximenuck.level1.active {

}

div#contact_menu_h ul.maximenuck li.maximenuck.level1 > a,
div#contact_menu_h ul.maximenuck li.maximenuck.level1 > span.separator {
	display:block;
	text-decoration:none;
    outline : none;
    border : none;
    white-space: normal;
}

/* parent item on mouseover (if subemnus exists) */
div#contact_menu_h ul.maximenuck li.maximenuck.level1.parent:hover,
div#contact_menu_h ul.maximenuck li.maximenuck.level1.parent:hover {

}

/* item color on mouseover */
div#contact_menu_h ul.maximenuck li.maximenuck.level1:hover > a span.titreck,
div#contact_menu_h ul.maximenuck li.maximenuck.level1.active > a span.titreck,
div#contact_menu_h ul.maximenuck li.maximenuck.level1:hover > span.separator,
div#contact_menu_h ul.maximenuck li.maximenuck.level1.active > span.separator {

}

/* arrow image for parent item */
div#contact_menu_h ul.maximenuck li.level1.parent > a,
div#contact_menu_h ul.maximenuck li.level1.parent > span.separator {
	padding-right:21px;
	background:url("../images/drop.gif") no-repeat right 8px;
}

div#contact_menu_h ul.maximenuck li.level1.parent:hover > a,
div#contact_menu_h ul.maximenuck li.level1.parent:hover > span.separator {
	background:url("../images/drop.gif") no-repeat right 8px;
}

/* arrow image for submenu parent item */
div#contact_menu_h ul.maximenuck li.level1.parent li.parent > a,
div#contact_menu_h ul.maximenuck li.level1.parent li.parent > span.separator,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li.parent:hover > a,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li.parent.active > a {
	padding-right:21px;
	background:url("../images/drop-right.gif") no-repeat right 8px;
}

/* styles for right position */
div#contact_menu_h ul.maximenuck li.menu_right {
	float:right !important;
	margin-right:0px !important;
}

div#contact_menu_h ul.maximenuck li.align_right div.floatck, 
div#contact_menu_h ul.maximenuck li div.floatck.fixRight {
	left:auto;
	right:-1px;
	top:auto;
}


/* arrow image for submenu parent item to open left */
div#contact_menu_h ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > a,
div#contact_menu_h ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > span.separator,
div#contact_menu_h ul.maximenuck li.level1.parent.menu_right li.parent > a,
div#contact_menu_h ul.maximenuck li.level1.parent.menu_right li.parent > span.separator {
	padding-left:21px;
	background:url("../images/drop-left.gif") no-repeat left 8px;
}

/* margin for right elements that rolls to the left */
div#contact_menu_h ul.maximenuck li.maximenuck div.floatck div.floatck.fixRight,
div#contact_menu_h ul.maximenuck li.level1.parent.menu_right div.floatck div.floatck  {
    margin-right : 180px;
}

div#contact_menu_h ul.maximenuck li div.floatck.fixRight{

}


/*---------------------------------------------
---	 	Sublevel items - level 2 to n		---
----------------------------------------------*/

div#contact_menu_h ul.maximenuck li div.floatck ul.maximenuck2 {
    /*background : transparent;*/
    margin : 0 !important;
    padding : 0 !important;
    border : none !important;
    box-shadow: none !important;
    width : 100%; /* important for Chrome and Safari compatibility */
    position: static !important;
    overflow: visible !important;
    display: block !important;
    float: none !important;
    visibility: visible !important;
}

div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.maximenuck {
	position:relative;
	float:none !important;
    list-style : none;
	display: block !important;
}

div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.maximenuck:hover {
}

/* all links styles */
div#contact_menu_h ul.maximenuck li.maximenuck a,
div#contact_menu_h ul.maximenuck li.maximenuck span.separator {
	display:block;
	text-decoration:none;
    outline : none;
    white-space: normal;
}

/* submenu link */
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li a {

}

div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 a {
	display: block;
}

div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > a,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h2 a,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h3 a,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 li.active > a {

}


/* link image style */
div#contact_menu_h ul.maximenuck li.maximenuck > a img {
    border : none;

    background-size: contain;
    width: 100%;
    height: auto;
}

/* img style without link (in separator) */
div#contact_menu_h ul.maximenuck li.maximenuck img {
    border : none;
}

/* item title */
div#contact_menu_h span.titreck {
    text-decoration : none;
    /*min-height : 17px;*/
    float : none !important;
    float : left;
}

/* item description */
div#contact_menu_h span.descck {
    display : block;
    text-transform : none;
    font-size : 10px;
    text-decoration : none;
    height : 12px;
    line-height : 12px;
    float : none !important;
    float : left;
}

/* submenus container */
div#contact_menu_h ul.maximenuck li div.floatck {
	/*width : 180px;*/ /* default width */
	text-align:left;
}

/*---------------------------------------------
---	 	Columns management					---
----------------------------------------------*/

/* child blocks position (from level2 to n) */
div#contact_menu_h ul.maximenuck li.maximenuck div.floatck div.floatck {
    margin : -30px 0 0 180px;
}

div#contact_menu_h ul.maximenuck li div.floatck div.maximenuck2 {
    /*width : 180px;*/ /* default width */
	margin: 0;
	padding: 0;
}


/* h2 title */
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 h2 a,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 h2 span.separator {
	font-size:21px;
	font-weight:400;
	letter-spacing:-1px;
	margin:7px 0 14px 0;
	padding-bottom:14px;
	line-height:21px;
	text-align:left;
}

/* h3 title */
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 h3 a,
div#contact_menu_h ul.maximenuck li.maximenuck ul.maximenuck2 h3 span.separator {
	font-size:14px;
	margin:7px 0 14px 0;
	padding-bottom:7px;
	line-height:21px;
	text-align:left;
}

/* paragraph */
div#contact_menu_h ul.maximenuck li ul.maximenuck2 li p {
	line-height:18px;
	margin:0 0 10px 0;
	font-size:12px;
	text-align:left;
}




/* image shadow with specific class */
div#contact_menu_h ul.maximenuck .imgshadow { /* Better style on light background */
	background:#FFFFFF !important;
	padding:4px;
	border:1px solid #777777;
	margin-top:5px;
	-moz-box-shadow:0px 0px 5px #666666;
	-webkit-box-shadow:0px 0px 5px #666666;
	box-shadow:0px 0px 5px #666666;
}

/* blackbox style */
div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.blackbox {
	background-color:#333333 !important;
	color: #eeeeee;
	text-shadow: 1px 1px 1px #000;
	padding:4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
	-webkit-box-shadow:inset 0 0 3px #000000;
	-moz-box-shadow:inset 0 0 3px #000000;
	box-shadow:inset 0 0 3px #000000;
}

div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.blackbox:hover {
	background-color:#333333 !important;
}

div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.blackbox a {
	color: #fff;
	text-shadow: 1px 1px 1px #000;
	display: inline !important;
}

div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.blackbox:hover > a {
	text-decoration: underline;
}

/* greybox style */
div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.greybox {
	background:#f0f0f0 !important;
	border:1px solid #bbbbbb;
	padding: 4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;
}

div#contact_menu_h ul.maximenuck li ul.maximenuck2 li.greybox:hover {
	background:#ffffff !important;
	border:1px solid #aaaaaa;
}


/*---------------------------------------------
---	 	Module in submenus					---
----------------------------------------------*/

/* module title */
div#contact_menu_h ul.maximenuck div.maximenuck_mod > div > h3 {
    width : 100%;
    font-weight : bold;
	font-size: 16px;
}

div#contact_menu_h div.maximenuck_mod {
    width : 100%;
    padding : 0;
    white-space : normal;
}

div#contact_menu_h div.maximenuck_mod div.moduletable {
    border : none;
    background : none;
}

div#contact_menu_h div.maximenuck_mod  fieldset{
    width : 100%;
    padding : 0;
    margin : 0 auto;
    overflow : hidden;
    background : transparent;
    border : none;
}

div#contact_menu_h ul.maximenuck2 div.maximenuck_mod a {
    border : none;
    margin : 0;
    padding : 0;
    display : inline;
    background : transparent;
    font-weight : normal;
}

div#contact_menu_h ul.maximenuck2 div.maximenuck_mod a:hover {

}

div#contact_menu_h ul.maximenuck2 div.maximenuck_mod ul {
    margin : 0;
    padding : 0;
    width : 100%;
    background : none;
    border : none;
    text-align : left;
}

div#contact_menu_h ul.maximenuck2 div.maximenuck_mod li {
    margin : 0 0 0 15px;
    padding : 0;
    background : none;
    border : none;
    text-align : left;
    font-size : 11px;
    float : none;
    display : block;
    line-height : 20px;
    white-space : normal;
}

/* login module */
div#contact_menu_h ul.maximenuck2 div.maximenuck_mod #form-login ul {
    left : 0;
    margin : 0;
    padding : 0;
    width : 100%;
}

div#contact_menu_h ul.maximenuck2 div.maximenuck_mod #form-login ul li {
    margin : 2px 0;
    padding : 0 5px;
    height : 20px;
    background : transparent;
}



/*---------------------------------------------
---	 	Fancy styles (floating cursor)		---
----------------------------------------------*/

div#contact_menu_h .maxiFancybackground {
    list-style : none;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important;
}

div#contact_menu_h .maxiFancybackground .maxiFancycenter {
    border-top: 1px solid #fff;
}



/*---------------------------------------------
---	 	Button to close on click			---
----------------------------------------------*/

div#contact_menu_h span.maxiclose {
    color: #fff;
}

/*---------------------------------------------
---	 Stop the dropdown                  ---
----------------------------------------------*/

div#contact_menu_h ul.maximenuck li.maximenuck.nodropdown div.floatck,
div#contact_menu_h ul.maximenuck li.maximenuck div.floatck li.maximenuck.nodropdown div.floatck {
    position: static;
    background:  none;
    border: none;
    left: auto;
    margin: 3px;
}

div#contact_menu_h ul.maximenuck li.level1.parent ul.maximenuck2 li.maximenuck.nodropdown li.maximenuck {
    background: none;
    text-indent: 5px;
}

div#contact_menu_h ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > a,
div#contact_menu_h ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > span.separator {
    background:  none;
}
