require('./bootstrap');

// grab everything we need
// const btn = document.querySelector(".mobile-menu-button");
// const sidebar = document.querySelector(".sidebar");
//
// // add our event listener for the click
// btn.addEventListener("click", () => {
//     sidebar.classList.toggle("-translate-x-full");
// });


$.ajax({
    url:'wishlist.list.destroy/{id}',
    method:'get',
    success: function(){
        console.log("cookie deleted");
    }
});
