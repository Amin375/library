require('./bootstrap');

const btn = document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");

// add our event listener for the click
btn.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
});



var $tableView = $('#table-view');
var $imageView = $('#image-view');
var $bookImage = $('#book-cover-image');

var $switchButton = $('#switch-button');

$switchButton.on('click','#btn-switch-images','#btn-switch-table', function () {
    console.log('click');
    if ($tableView.hasClass('md:flex lg:flex xl:flex 2xl:flex') &&
        $imageView.hasClass('hidden')) {
        $tableView.removeClass('md:flex lg:flex xl:flex 2xl:flex').addClass('hidden');
        $imageView.removeClass('hidden').addClass('grid xs:grid-cols-3 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6');
        // $bookImage.removeClass('h-48 w-40').addClass('h-72 w-36');
    } else {
        $tableView.addClass('md:flex lg:flex xl:flex 2xl:flex').removeClass('hidden');
        $imageView.addClass('hidden').removeClass('grid xs:grid-cols-3 sm:grid-cols-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6');
        // $bookImage.removeClass('h-48 w-40').addClass('h-72 sm:w-36');

    }
});

$.ajax({
    url: 'wishlist.list.destroy/{id}',
    method: 'get',
    success: function () {
        console.log("cookie deleted");
    }
});
