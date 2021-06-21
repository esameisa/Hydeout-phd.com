requirejs([
  'jquery',
  'multiselect',
  'quicksearch',
  'components-date-time-pickers',
  'ckeditor',
  'select2'
], function ($, multiselect, quicksearch, ComponentsDateTimePickers, ckeditor, select2) {
  'use strict';

  $( document ).ready(function() {

    $('#related_posts_ids').select2({
        placeholder: "Choose posts...",
        minimumInputLength: 2,
        ajax: {
            url: '/ajax/posts/search_by_title',
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

    $('#tags').select2({
        placeholder: "Choose tags...",
        minimumInputLength: 2,
        ajax: {
            url: '/ajax/tags/search',
            dataType: 'json',
            data: function (params) {
                return {
                    search: $.trim(params.term)
                };
            },
            processResults: function (data) {
                var formattedData = [];
                for (var i = 0; i < data.data.length; i++) {
                  formattedData[i] = {id:data.data[i].id, text:data.data[i].name}; //{}data.data[i].title;
                }
                return {
                    results: formattedData
                };
            },
            cache: true
        }
    });

    // $('#related_posts_ids').multiSelect({
    //   selectableHeader: "<input type='text' class='form-control input-sm search-input' autocomplete='off' placeholder='Search'>",
    //   selectionHeader: "<input type='text' class='form-control input-sm search-input' autocomplete='off' placeholder='Search'>",
    //   afterInit: function(ms){
    //     var that = this,
    //         $selectableSearch = that.$selectableUl.prev(),
    //         $selectionSearch = that.$selectionUl.prev(),
    //         selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
    //         selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

    //     that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
    //     .on('keydown', function(e){
    //       if (e.which === 40){
    //         that.$selectableUl.focus();
    //         return false;
    //       }
    //     });

    //     that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
    //     .on('keydown', function(e){
    //       if (e.which == 40){
    //         that.$selectionUl.focus();
    //         return false;
    //       }
    //     });
    //   },
    //   afterSelect: function(){
    //     this.qs1.cache();
    //     this.qs2.cache();
    //   },
    //   afterDeselect: function(){
    //     this.qs1.cache();
    //     this.qs2.cache();
    //   }
    // });
    ComponentsDateTimePickers.init();
    $('.editor').ckeditor();

    if(!$('#status_comment').val()) {
      $('#status_comment_field').hide();
    }

  });

  $('#status').on('change', function() {
    $('#status_comment_field').show();
    var publishStatus = 4;
    if(this.value == publishStatus) {
      $('#publish_date_time').attr('required','required');
    }else{
      $('#publish_date_time').removeAttr('required');
    }
  });

  $('#title').on('keyup change', function() {
    var title = (this.value).toLowerCase();
    $('#slug').val( title.replace(/\ /g,'-') );
  });


});
