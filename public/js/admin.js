
/* http://www.bootstrap-switch.org/ */
$("[type=checkbox]").bootstrapSwitch();

// ================ WYSIWYG JS Plugin ================ 

$('textarea.wysiwyg').ckeditor({
    uiColor: '#eeeeee',
    entities: false,
    allowedContent: true,
    language: 'en',
    removeButtons: 'JustifyCenter',
    toolbarGroups: [
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
        {name: 'links', groups: ['links']},
        {name: 'insert', groups: ['insert']},
        {name: 'forms', groups: ['forms']},
        {name: 'tools', groups: ['tools']},
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'others', groups: ['others']},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
        {name: 'styles', groups: ['styles']},
        {name: 'colors', groups: ['colors']},
        {name: 'about', groups: ['about']}
    ],

    on: {
        instanceReady: function (ev) {
            this.dataProcessor.writer.setRules('caption', {
                breakAfterOpen: false
            });
            this.dataProcessor.writer.setRules('div', {
                breakAfterOpen: false,
                indent: true,
            });
            this.dataProcessor.writer.setRules('p', {
                indent: false,
                breakAfterOpen: false,
                breakAfterClose: false
            });
            this.dataProcessor.writer.setRules('br', {
                breakAfterOpen: true
            });
            this.dataProcessor.writer.setRules('li', {
                breakAfterOpen: false
            });
            this.dataProcessor.writer.setRules('h1', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
            this.dataProcessor.writer.setRules('h2', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
            this.dataProcessor.writer.setRules('h3', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
            this.dataProcessor.writer.setRules('h4', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
            this.dataProcessor.writer.setRules('h5', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
            this.dataProcessor.writer.setRules('h6', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
            this.dataProcessor.writer.setRules('td', {
                breakAfterOpen: false,
                breakAfterClose: true
            });
        }
    }
});

// ================ Date picker ================ 

/* START Date Time Picker tool configuration */
$('.date').datetimepicker({
    format: 'd/m/Y',
    minDate: new Date(),
});

//================== START TAB MANAGEMENT ==================

$('.nav-tabs a[href="#tab1"]').tab('show');

//store the currently selected tab in the hash value
$("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
    var id = $(e.target).attr("href").substr(1);
    window.location.hash = id;
});

// on load of the page: switch to the currently selected tab
var hash = window.location.hash;
$('#tabs a[href="' + hash + '"]').tab('show');

// ================== END TAB MANAGEMENT ==================

