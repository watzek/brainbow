// function setupGallery() {
//     $.each($('.gallery-listing'), function(index, listing) {
//         var preview = $(listing).find('.gallery-preview');
//         var title = $(listing).find('.gallery-title');
//         var request = $(listing).find('.request-link');
//         var url = preview.attr('id');
//         $.ajax({
//             url: url,
//             success: function(json) {
//                 //console.log(json);
//                 var thumb = json.thumbnail['@id'];
//                 $(preview).css('background', 'url('+ thumb +')');
//                 $(title).text(json.label);
//                 $(request).attr('href', '/request?image=' + json.label);
//             }
//         });
//     });
// }
