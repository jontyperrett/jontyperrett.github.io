

.clr {clear:both;}

/*---------------------------------------------
---	 	menu container						---
----------------------------------------------*/

/* menu */
div#main_menu {
	font-size:14px; 
	line-height:21px;
	text-align: center;
        zoom:1;
}

/* container style */
div#main_menu ul.maximenuck {
    overflow: visible !important;
    display: block !important;
    float: none !important;
    visibility: visible !important;
    /*position: static !important;*/
    list-style:none;
    /*width:940px; */
    margin:0 auto;
    /*height:43px;*/
    height: auto;
    padding:0px 20px 0px 20px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    background: #c20a0a;
    background: -moz-linear-gradient(top,  #E92020 0%, #690e0e 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#E92020), color-stop(100%,#690e0e));
    background: -webkit-linear-gradient(top,  #E92020 0%,#690e0e 100%);
    background: -o-linear-gradient(top,  #E92020 0%,#690e0e 100%);
    background: -ms-linear-gradient(top,  #E92020 0%,#690e0e 100%);
    background: linear-gradient(top,  #E92020 0%,#690e0e 100%);
    border: 1px solid #000;
    -moz-box-shadow:inset 0px 0px 1px #edf9ff;
    -webkit-box-shadow:inset 0px 0px 1px #edf9ff;
    box-shadow:inset 0px 0px 1px #edf9ff;
    text-align: center;
    zoom: 1;
}

div#main_menu ul.maximenuck:after {
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

div#main_menu ul.maximenuck li.maximenuck.level1 {
    background : none;
    list-style : none;
    border: 1px solid transparent;
    /*float:left;*/
    text-align:center;
    padding: 4px 6px 2px 6px;
    margin: 2px;
    cursor: pointer;
    vertical-align: middle;
    box-shadow: none;
    filter: none;
}

div#main_menu ul.maximenuck li.maximenuck.level1:hover,
div#main_menu ul.maximenuck li.maximenuck.level1.active {
	border: 1px solid #777777;
	background: #F4F4F4;
	background: -moz-linear-gradient(top, #F4F4F4, #EEEEEE);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F4F4F4), to(#EEEEEE));
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
}

div#main_menu ul.maximenuck li.maximenuck.level1 > a,
div#main_menu ul.maximenuck li.maximenuck.level1 > span.separator {
	font-size:14px; 
	color: #EEEEEE;
	display:block;
	text-decoration:none;
	text-shadow: 1px 1px 1px #000;
	min-height : 22px;
    outline : none;
    background : none;
    border : none;
    padding : 0;
    white-space: normal;
}

/* parent item on mouseover (if subemnus exists) */
div#main_menu ul.maximenuck li.maximenuck.level1.parent:hover,
div#main_menu ul.maximenuck li.maximenuck.level1.parent:hover {
	-moz-border-radius: 2px 2px 0px 0px;
	-webkit-border-radius: 2px 2px 0px 0px;
	border-radius: 2px 2px 0px 0px;
}

/* item color on mouseover */
div#main_menu ul.maximenuck li.maximenuck.level1:hover > a span.titreck,
div#main_menu ul.maximenuck li.maximenuck.level1.active > a span.titreck,
div#main_menu ul.maximenuck li.maximenuck.level1:hover > span.separator,
div#main_menu ul.maximenuck li.maximenuck.level1.active > span.separator {
    color : #161616;
	text-shadow: 1px 1px 1px #ffffff;
}

/* arrow image for parent item */
div#main_menu ul.maximenuck li.level1.parent > a,
div#main_menu ul.maximenuck li.level1.parent > span.separator {
	padding-right:21px;
	background:url("../images/drop.gif") no-repeat right 8px;
}

div#main_menu ul.maximenuck li.level1.parent:hover > a,
div#main_menu ul.maximenuck li.level1.parent:hover > span.separator {
	background:url("../images/drop.gif") no-repeat right 8px;
}

/* arrow image for submenu parent item */
div#main_menu ul.maximenuck li.level1.parent li.parent > a,
div#main_menu ul.maximenuck li.level1.parent li.parent > span.separator,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li.parent:hover > a,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li.parent.active > a {
	padding-right:21px;
	background:url("../images/drop-right.gif") no-repeat right 8px;
}

/* styles for right position */
div#main_menu ul.maximenuck li.menu_right {
	float:right !important;
	margin-right:0px !important;
}

div#main_menu ul.maximenuck li.align_right div.floatck, 
div#main_menu ul.maximenuck li div.floatck.fixRight {
	left:auto;
	right:-1px;
	top:auto;
	-moz-border-radius: 5px 0px 5px 5px;
    -webkit-border-radius: 5px 0px 5px 5px;
    border-radius: 5px 0px 5px 5px;
}


/* arrow image for submenu parent item to open left */
div#main_menu ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > a,
div#main_menu ul.maximenuck li.level1.parent div.floatck.fixRight li.parent > span.separator,
div#main_menu ul.maximenuck li.level1.parent.menu_right li.parent > a,
div#main_menu ul.maximenuck li.level1.parent.menu_right li.parent > span.separator {
	padding-left:21px;
	background:url("../images/drop-left.gif") no-repeat left 8px;
}

/* margin for right elements that rolls to the left */
div#main_menu ul.maximenuck li.maximenuck div.floatck div.floatck.fixRight,
div#main_menu ul.maximenuck li.level1.parent.menu_right div.floatck div.floatck  {
    margin-right : 180px;
}

div#main_menu ul.maximenuck li div.floatck.fixRight{
	-moz-border-radius: 5px 0px 5px 5px;
    -webkit-border-radius: 5px 0px 5px 5px;
    border-radius: 5px 0px 5px 5px;
}


/*---------------------------------------------
---	 	Sublevel items - level 2 to n		---
----------------------------------------------*/

div#main_menu ul.maximenuck li div.floatck ul.maximenuck2 {
    background : transparent;
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

div#main_menu ul.maximenuck li ul.maximenuck2 li.maximenuck {
	font-size:12px;
	position:relative;
	text-shadow: 1px 1px 1px #ffffff;
	padding: 5px 0px;
	margin: 0px 0px 4px 0px;
	float:none !important;
	text-align:left;
	background : none;
    list-style : none;
	display: block !important;
}

div#main_menu ul.maximenuck li ul.maximenuck2 li.maximenuck:hover {
	background: transparent;
}

/* all links styles */
div#main_menu ul.maximenuck li.maximenuck a,
div#main_menu ul.maximenuck li.maximenuck span.separator {
	font-size:14px; 
	font-weight : normal;
	color: #a1a1a1;
	display:block;
	text-decoration:none;
	text-transform : none;
	/*text-shadow: 1px 1px 1px #000;*/
    outline : none;
    background : none;
    border : none;
    padding : 0 5px;
    white-space: normal;
}

/* submenu link */
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li a {
	color:#015b86;
	text-shadow: 1px 1px 1px #ffffff;
}

div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 a {
	font-size:12px;
	color:#161616;
	display: block;
}

div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > a,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h2 a,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li:hover > h3 a,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 li.active > a {
	color:#029feb !important;
	background: transparent !important;
}


/* link image style */
div#main_menu ul.maximenuck li.maximenuck > a img {
    margin : 3px;
    border : none;
}

/* img style without link (in separator) */
div#main_menu ul.maximenuck li.maximenuck img {
    border : none;
}

/* item title */
div#main_menu span.titreck {
    /*text-transform : none;
    font-weight : normal;
    font-size : 14px;
    line-height : 18px;*/
    text-decoration : none;
    min-height : 17px;
    float : none !important;
    float : left;
    text-transform: uppercase;
    font-weight: bold;
}

/* item description */
div#main_menu span.descck {
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
div#main_menu ul.maximenuck li div.floatck {
	width : 180px; /* default width */
	margin: 2px 0 0 -7px;
	text-align:left;
	padding:5px 5px 0 5px;
	border:1px solid #777777;
	border-top:none;
	background:#F4F4F4;
	background: -moz-linear-gradient(top, #EEEEEE, #BBBBBB);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EEEEEE), to(#BBBBBB));
	-moz-border-radius: 0px 2px 2px 2px;
	-webkit-border-radius: 0px 2px 2px 2px;
	border-radius: 0px 2px 2px 2px;
    filter: none;
}

/*---------------------------------------------
---	 	Columns management					---
----------------------------------------------*/

/* child blocks position (from level2 to n) */
div#main_menu ul.maximenuck li.maximenuck div.floatck div.floatck {
    margin : -30px 0 0 180px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	border:1px solid #777777;
}

div#main_menu ul.maximenuck li div.floatck div.maximenuck2 {
    width : 180px; /* default width */
	margin: 0;
	padding: 0;
}


/* h2 title */
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 h2 a,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 h2 span.separator {
	font-size:21px;
	font-weight:400;
	letter-spacing:-1px;
	margin:7px 0 14px 0;
	padding-bottom:14px;
	border-bottom:1px solid #666666;
	line-height:21px;
	text-align:left;
}

/* h3 title */
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 h3 a,
div#main_menu ul.maximenuck li.maximenuck ul.maximenuck2 h3 span.separator {
	font-size:14px;
	margin:7px 0 14px 0;
	padding-bottom:7px;
	border-bottom:1px solid #888888;
	line-height:21px;
	text-align:left;
}

/* paragraph */
div#main_menu ul.maximenuck li ul.maximenuck2 li p {
	line-height:18px;
	margin:0 0 10px 0;
	font-size:12px;
	text-align:left;
}




/* image shadow with specific class */
div#main_menu ul.maximenuck .imgshadow { /* Better style on light background */
	background:#FFFFFF !important;
	padding:4px;
	border:1px solid #777777;
	margin-top:5px;
	-moz-box-shadow:0px 0px 5px #666666;
	-webkit-box-shadow:0px 0px 5px #666666;
	box-shadow:0px 0px 5px #666666;
}

/* blackbox style */
div#main_menu ul.maximenuck li ul.maximenuck2 li.blackbox {
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

div#main_menu ul.maximenuck li ul.maximenuck2 li.blackbox:hover {
	background-color:#333333 !important;
}

div#main_menu ul.maximenuck li ul.maximenuck2 li.blackbox a {
	color: #fff;
	text-shadow: 1px 1px 1px #000;
	display: inline !important;
}

div#main_menu ul.maximenuck li ul.maximenuck2 li.blackbox:hover > a {
	text-decoration: underline;
}

/* greybox style */
div#main_menu ul.maximenuck li ul.maximenuck2 li.greybox {
	background:#f0f0f0 !important;
	border:1px solid #bbbbbb;
	padding: 4px 6px 4px 6px !important;
	margin: 0px 4px 4px 4px !important;
	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
    border-radius: 5px;
}

div#main_menu ul.maximenuck li ul.maximenuck2 li.greybox:hover {
	background:#ffffff !important;
	border:1px solid #aaaaaa;
}


/*---------------------------------------------
---	 	Module in submenus					---
----------------------------------------------*/

/* module title */
div#main_menu ul.maximenuck div.maximenuck_mod > div > h3 {
    width : 100%;
    font-weight : bold;
	color: #555;
	border-bottom: 1px solid #555;
	text-shadow: 1px 1px 1px #000;
	font-size: 16px;
}

div#main_menu div.maximenuck_mod {
    width : 100%;
    padding : 0;
    white-space : normal;
}

div#main_menu div.maximenuck_mod div.moduletable {
    border : none;
    background : none;
}

div#main_menu div.maximenuck_mod  fieldset{
    width : 100%;
    padding : 0;
    margin : 0 auto;
    overflow : hidden;
    background : transparent;
    border : none;
}

div#main_menu ul.maximenuck2 div.maximenuck_mod a {
    border : none;
    margin : 0;
    padding : 0;
    display : inline;
    background : transparent;
    font-weight : normal;
}

div#main_menu ul.maximenuck2 div.maximenuck_mod a:hover {

}

div#main_menu ul.maximenuck2 div.maximenuck_mod ul {
    margin : 0;
    padding : 0;
    width : 100%;
    background : none;
    border : none;
    text-align : left;
}

div#main_menu ul.maximenuck2 div.maximenuck_mod li {
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
div#main_menu ul.maximenuck2 div.maximenuck_mod #form-login ul {
    left : 0;
    margin : 0;
    padding : 0;
    width : 100%;
}

div#main_menu ul.maximenuck2 div.maximenuck_mod #form-login ul li {
    margin : 2px 0;
    padding : 0 5px;
    height : 20px;
    background : transparent;
}



/*---------------------------------------------
---	 	Fancy styles (floating cursor)		---
----------------------------------------------*/

div#main_menu .maxiFancybackground {
    list-style : none;
    padding: 0 !important;
    margin: 0 !important;
    border: none !important;
}

div#main_menu .maxiFancybackground .maxiFancycenter {
    border-top: 1px solid #fff;
}



/*---------------------------------------------
---	 	Button to close on click			---
----------------------------------------------*/

div#main_menu span.maxiclose {
    color: #fff;
}

/*---------------------------------------------
---	 Stop the dropdown                  ---
----------------------------------------------*/

div#main_menu ul.maximenuck li.maximenuck.nodropdown div.floatck,
div#main_menu ul.maximenuck li.maximenuck div.floatck li.maximenuck.nodropdown div.floatck {
    position: static;
    background:  none;
    border: none;
    left: auto;
    margin: 3px;
}

div#main_menu ul.maximenuck li.level1.parent ul.maximenuck2 li.maximenuck.nodropdown li.maximenuck {
    background: none;
    text-indent: 5px;
}

div#main_menu ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > a,
div#main_menu ul.maximenuck li.maximenuck.level1.parent ul.maximenuck2 li.maximenuck.parent.nodropdown > span.separator {
    background:  none;
}