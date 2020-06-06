if (typeof Technorati == "undefined") {
    Technorati = {
        
        xhtmlNS: "http://www.w3.org/1999/xhtml",
        loadFunctions: [],
        domLoaded: false,
        
        init: function() {
            for (var i = 0; i < Technorati.loadFunctions.length; i++) {
                Technorati.loadFunctions[i]();
            }
        },

        loadData: function (url) {
            var s = this.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.setAttribute("src", url);
            this.addElement(s);
        },

        createElement: function (type) {
            if (document.createElementNS) {
                return document.createElementNS(this.xhtmlNS, type);
            } else if (document.createElement) {
                return document.createElement(type);
            }
        },
        
        formatNumber: function (n) {
            var t = "";
            if (typeof n == "string") { n = parseInt(n) }
            if (typeof n == "number") {
                s = n.toString();
                for (var i = s.length - 3; i > 0; i -= 3) {
                    s = s.substring(0, i) + "," + s.substring(i);
                }
            }
            return s;
        },
        
        addElement: function (e) {
            var t = document.getElementsByTagName("*");
            var n = t[t.length - 1].parentNode;
            n.appendChild(e);
        },
        
        addLoadFunction: function(f) {
            
            if (this.loadFunctions.length == 0) {
                if (document.addEventListener) {
                	document.addEventListener("DOMContentLoaded", Technorati.init, false);
                }

                if (/WebKit/i.test(navigator.userAgent)) {
                	var _trTimer = setInterval(function() {
                		if (/loaded|complete/.test(document.readyState)) {
                			clearInterval(_trTimer);
                			Technorati.init();
                		}
                	}, 10);
                }

                /*@cc_on @*/
                /*@if (@_win32)
                document.write("<script id=__tr-ie defer src=javascript:void(0)><\/script>");
                var s = document.getElementById("__tr-ie");
                s.onreadystatechange = function() {
                	if (this.readyState == "complete") { Technorati.init(); }
                };
                /*@end @*/
            }
            this.loadFunctions.push(f);
        }

    };
}

if (typeof Technorati.LinkCount == "undefined") {
    Technorati.LinkCount = {

        initialized: false,
        dataURL: "http://technorati.com/linkcountdata/",
        iconURL: "http://static.technorati.com/static/css/img/icn/",
        searchURL: "http://technorati.com/search/",
        defaultText: "View blog reactions",
        titleText: "View blog reactions via Technorati",
        linkPattern: /technorati.com\/search\/(.+)/,
        permalinks: {},

        init: function() {
            if (this.initialized == false) {
                this.initialized = true;
                Technorati.addLoadFunction(Technorati.LinkCount.getLinks);
            }
        },

        // Grab links from the DOM and load them into the linkqueue
        getLinks: function() {
            
            var loadQueue = [];
            var links = document.getElementsByTagName("a");
            for (var i = 0; i < links.length; i++) {
                var link = links[i];
                if ( (link.getAttribute("rel") && link.getAttribute("rel").indexOf("linkcount") != -1) 
                    || (link.className && link.className.indexOf("tr-linkcount") != -1) ) {
                    if (matches = link.getAttribute("href").match(Technorati.LinkCount.linkPattern)) {
                        var url = matches[1];
                        if (url.indexOf("?sub=nscosmos") != -1) {
                            url = url.slice(0, url.indexOf("?sub=nscosmos"));
                        }
                        url = encodeURIComponent(url);
                        // Store this link for future reference
                        Technorati.LinkCount.permalinks[url] = link;
                        loadQueue.push(url);
                    }
                }
            }
            
            var query = loadQueue.join("&");
            Technorati.loadData(Technorati.LinkCount.dataURL + query);
        },
        
        setCounts: function(data) {
            for (var i = 0; i < data.length; i++) {

                var url = encodeURIComponent(data[i].url);
                var count = data[i].count;

                var target;
                if (target = this.permalinks[url]) {
                    var link = Technorati.createElement("a");
                    var icon = this.iconURL + ((count !== 0) ? "talkbubble.png" : "talkbubble-gray.png");
                    var color = (count !== 0) ? "#389c04" : "#666";
                    if (count > 0) {
                        text = Technorati.formatNumber(count) + " blog" + ((count == 1) ? " reaction" : " reactions");
                    } else {
                        text = this.defaultText;
                    }

                    // link.style.color = color;
                    // link.style.padding = "0 18px 0 0";
                    // link.style.background = "url(" + icon + ") no-repeat right center";

                    link.setAttribute("href", this.searchURL + url + "?sub=jscosmos");
                    link.setAttribute("title", this.titleText);
                    link.appendChild(document.createTextNode(text));
                    target.parentNode.replaceChild(link, target);
                    
                    // Garbage collection
                    this.permalinks[url] = null;
                }
            }
            
            this.permalinks = [];
        }
    };
}

Technorati.LinkCount.init();
