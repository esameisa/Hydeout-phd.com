var id = null;
$('.clickableGallery').on('click', function(event) {
	id = $(this).data('gallery-id');
	getAjaxData(id);
});
var path = window.location.href;
if (path.match(/view-gallery\?galleryId=[0-9]/g) != null) {
	id = getUrlVars()['galleryId'];
	getAjaxData(id);
}
console.log(path);

function getAjaxData(id) {
	$.ajax({
		url: 'api/events/'+id+'/gallery',
		type: 'GET',
		success: function (data) {
			draw(data);
		}
	});
}

function draw(data) {
	var event_header = $('.event__header');
	event_header.find('.event__img').children('img').prop('src', data.image);
	event_header.find('.event__title').children('h1').html(data.title);
	event_header.find('.event__date').children('p').html(data.date);
	// gallery/view-gallery?galleryId={{ $data['galleries']['next_id'] }}
	event_header.find('.next-album').prop('href', '/#!/gallery/view-gallery?galleryId='+data.next_id)
	console.log(data.galleryitems.length);
			$('.event__gallery').children('.row').html(' ');
	for (var i = data.galleryitems.length - 1; i >= 0; i--) {
		// alert('sdfsdf');
		if (data.galleryitems[i].type == 1) {
			$('.event__gallery').children('.row').append('<div class="col">\
	              <div class="content"><a class="content__media" href="#"><img src="'+data.galleryitems[i].image+'" alt="Spring Market"></a></div>\
	            </div>')
		}else{
			$('.event__gallery').children('.row').append('<div class="col">\
              <div class="content"><a class="content__media" href="#"><img src="'+data.galleryitems[i].image+'" alt="Spring Market">\
                  <div class="content__icon">\
                    <svg>\
                      <use xlink:href="#play-icon"></use>\
                    </svg>\
                  </div></a></div>\
            </div>');
		}
	}
}
$('.next-album').on('click', function(event) {
	event.preventDefault();
	window.location = $(this).prop('href');
	location.reload();
});
// Read a page's GET URL variables and return them as an associative array.
// source https://stackoverflow.com/questions/4656843/jquery-get-querystring-from-url
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
