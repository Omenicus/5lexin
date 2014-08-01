define(function(require) {
	var elgg = require('elgg');
	var $ = require('jquery');

	return {
		toolbar: [['Bold', 'Italic', 'Underline'], ['Strike', 'NumberedList', 'BulletedList', 'Undo', 'Redo', 'Link', 'Unlink', 'Image','Table', 'Blockquote', 'Paste', 'PasteFromWord', 'Maximize']],
		removeButtons: 'Subscript,Superscript', // To have Underline back
    removeDialogTabs: 'image:advanced;image:Link;link:advanced;link:target',
    /*plugins: 'about,basicstyles,clipboard,floatingspace,list,indentlist,enterkey,entities,link,toolbar,undo,wysiwygarea',
    removeButtons: 'Anchor,Underline,Strike,Subscript,Superscript',
    toolbarGroups: [
      { name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
      { name: 'editing',     groups: [ 'find', 'selection' ] },
     
      { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
      { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
      { name: 'links' },
      { name: 'insert' }
      
    ],*/
    allowedContent: true,
		baseHref: elgg.config.wwwroot,
		//removePlugins: 'contextmenu,tabletools,resize',
		defaultLanguage: 'zh-cn',
    language = 'zh-cn';
		//language: elgg.config.language,
		skin: 'moono',
		uiColor: '#EEEEEE',
		contentsCss: elgg.get_simplecache_url('css', 'elgg/wysiwyg.css'),
		disableNativeSpellChecker: false,
		disableNativeTableHandles: false,
		
		autoGrow_maxHeight: $(window).height() - 100
	};
});
