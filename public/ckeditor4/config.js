/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// config.height = 200;
	//console.log(config);
	var browseUrl = '/cricketapp';
	config.filebrowserBrowseUrl = browseUrl + '/public/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = browseUrl + '/public/ckfinder/ckfinder.html?Type=Images';
	config.filebrowserFlashBrowseUrl = browseUrl + '/public/ckfinder/ckfinder.html?Type=Flash';
	config.filebrowserUploadUrl = browseUrl + '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = browseUrl + '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = browseUrl + '/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
};
