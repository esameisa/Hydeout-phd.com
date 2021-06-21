requirejs([
  'jquery',
  'select2',
  'ckeditor'
], function ($, select2, ckeditor) {
  'use strict';

  $( document ).ready(function() {
    window.selectOptions = {
        placeholder: "Choose posts...",
        minimumInputLength: 2,
        ajax: {
            url: '/ajax/posts/search',
            dataType: 'json',
            data: function (params) {
                return {
                    search: $.trim(params.term)
                };
            },
            processResults: function (data) {
                var formattedData = [];
                for (var i = 0; i < data.data.length; i++) {
                  formattedData[i] = {id:data.data[i].id, text:data.data[i].title};
                }
                return {
                    results: formattedData
                };
            },
            cache: true
        }
    }
    $('.multiple-select').select2(selectOptions);

    $('.multiple-videos-select').select2({
        placeholder: "Choose posts...",
        minimumInputLength: 2,
        ajax: {
            url: '/ajax/posts/search_videos',
            dataType: 'json',
            data: function (params) {
                return {
                    search: $.trim(params.term)
                };
            },
            processResults: function (data) {
                var formattedData = [];
                for (var i = 0; i < data.data.length; i++) {
                  formattedData[i] = {id:data.data[i].id, text:data.data[i].title}; //{}data.data[i].title;
                }
                return {
                    results: formattedData
                };
            },
            cache: true
        }
    });
    $('.editor').ckeditor();

  });

  $('#title').on('keyup change', function() {
    var title = (this.value).toLowerCase();
    $('#slug').val( title.replace(/\ /g,'-') );
  });
});
