/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-plus' : '&#xe000;',
			'icon-phone' : '&#xe001;',
			'icon-page' : '&#xe002;',
			'icon-mail' : '&#xe003;',
			'icon-books' : '&#xe004;',
			'icon-arrow' : '&#xe005;',
			'icon-location' : '&#xe006;',
			'icon-menu' : '&#xe007;',
			'icon-nav' : '&#xe008;',
			'icon-open-book' : '&#xe009;',
			'icon-laptop' : '&#xe00a;',
			'icon-cursor' : '&#xe00b;',
			'icon-people' : '&#xe00c;',
			'icon-info' : '&#xe00d;',
			'icon-pencil-pad' : '&#xe00e;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};