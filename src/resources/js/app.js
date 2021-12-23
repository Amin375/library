require('./bootstrap');

// grab everything we need
const btn = document.querySelector(".mobile-menu-button");
const sidebar = document.querySelector(".sidebar");

// add our event listener for the click
btn.addEventListener("click", () => {
    sidebar.classList.toggle("-translate-x-full");
});


var $tableView = $('#table-view');
var $imageView = $('#image-view');

var $switchButton = $('#switch-button');

$switchButton.on('click','#btn-switch-images','#btn-switch-table', function () {
    console.log('click');
    if ($tableView.hasClass('md:flex lg:flex') &&
        $imageView.hasClass('hidden')) {
        $tableView.removeClass('md:flex lg:flex').addClass('hidden');
        $imageView.removeClass('hidden').addClass('md:grid lg:grid md:grid-cols-5 lg:grid-cols-5');
    } else {
        $tableView.addClass('md:flex lg:flex').removeClass('hidden');
        $imageView.addClass('hidden').removeClass('md:grid lg:grid md:grid-cols-5 lg:grid-cols-5');
    }
});


// const tableView = document.getElementById("table-view");
// const imageView = document.getElementById("image-view");
// const switchButton = document.getElementById("switch-button");
// btn.onclick = function () {
//     if (targetDiv.style.display !== "none") {
//         targetDiv.style.display = "none";
//     } else {
//         targetDiv.style.display = "block";
//     }
// };


$.ajax({
    url: 'wishlist.list.destroy/{id}',
    method: 'get',
    success: function () {
        console.log("cookie deleted");
    }
});
