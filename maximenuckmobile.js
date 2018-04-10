var MobileMaxiMenu = new Class({
        Implements: Options,
        options: { 	
            resolution : 640,
            useimages : false,
            container : 'body',
            showdesc : true,
            usemodules : false 
        },
        initialize: function(element,options) {
            if (!element) return false;
            this.setOptions(options); //enregistre les options utilisateur

            //var resolution = this.options.resolution;
            var useimages = this.options.useimages;
            var usemodules = this.options.usemodules;
            var container = this.options.container;
            var showdesc = this.options.showdesc;

            var activeitem;
            if (document.getElement('#mobilemaximenuck')) return;
            var menuitems = element.getElements('ul.maximenuck li');
            var mobilemenu = new Element('div', {'id':'mobilemaximenuck'});
            mobilemenu.adopt(new Element('div',{
                'class' : 'topbar'
            }).set('html','<span id="mobilemaximenucktitle">'+Joomla.JText._('PLG_MAXIMENUCK_MENU', 'Menu')+'</span><span id="mobilemaximenuckclose"></span>'));
            menuitems.each(function(itemtmp) {
                item = itemtmp.clone();
                itemanchor = item.getFirst('a.maximenuck') || item.getFirst('span.separator') || item.getFirst().getFirst('a.maximenuck') || item.getFirst();
                if (itemanchor && !item.hasClass('nomobileck') &&
                ((itemanchor.getElement('span.titreck') || useimages)
                || (item.getFirst('div.maximenuck_mod') && usemodules))
                ) {
                    if (!showdesc && itemanchor) {if(itemanchor.getElement('span.descck')) itemanchor.getElement('span.descck').destroy();}
                    if (useimages && item.getElement('a.maximenuck > img')) {
                        datatocopy = itemanchor.innerHTML;
                        mobilemenu.adopt(new Element('div',{
                            'class' : item.className
                        }).set('html','<a href="'+itemanchor.href+'">'+datatocopy+'</a>'));
                    } else if (usemodules && item.getFirst('div.maximenuck_mod')) {
                        datatocopy = item.getFirst('div.maximenuck_mod').innerHTML;
                        mobilemenu.adopt(new Element('div',{
                            'class' : item.className
                        }).set('html',datatocopy));
                    } else if (itemanchor.hasClass('separator')) {
                        datatocopy = itemanchor.getElement('span.titreck').innerHTML;
                        mobilemenu.adopt(new Element('div',{
                            'class' : item.className
                        }).set('html','<a>'+datatocopy+'</a>'));
                    } else if (itemanchor.getElement('span.titreck') && !item.hasClass('maximenuckmodule')) {
                        datatocopy = itemanchor.getElement('span.titreck').innerHTML;
                        mobilemenu.adopt(new Element('div',{
                            'class' : item.className
                        }).set('html','<a href="'+itemanchor.href+'">'+datatocopy+'</a>'));
                    }
                    

                    if (item.hasClass('current')) activeitem = item;
                }
            });
            mobilemenu.setStyles({
                'position': 'absolute',
                'z-index': '100000',
                'top': '0',
                'left': '0'
            });
            if (activeitem) {
                if (useimages) {
                    activeitemtext = activeitem.getElement('a.maximenuck').get('html');
                } else {
                    activeitemtext = activeitem.getElement('span.titreck').get('html');
                }
                
            } else {
                activeitemtext = Joomla.JText._('PLG_MAXIMENUCK_MENU', 'Menu');
            }
            document.id(document.body).adopt(mobilemenu);
            mobilemenu.setStyles({'opacity': '0', 'display': 'none'});
            var mobilebutton = new Element('div', {
                    'id': 'mobilebarmenuck'
                }).set('html','<span class="mobilebarmenutitleck">'+activeitemtext+'</span>')
                .adopt(new Element('div', {
                    'id': 'mobilebuttonmenuck'
                }).addEvent('click', function() {
                    mobilemenu.setStyle('display', 'block').fade('in');
                }));

            document.id('mobilemaximenuckclose').addEvent('click', function() {
                mobilemenu.fade('out').setStyle('display', 'block');
            });
            if (container == 'body') {
                document.id(document.body).adopt(mobilebutton);
            } else {
                mobilebutton.setStyle('position','static');
                mobilebutton.inject(element,'after');
            }
    }
});
MobileMaxiMenu.implement(new Options); //ajoute les options utilisateur