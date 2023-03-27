//open and close tab menu
$('.nav-pills')
.on("click", ".nav-link:not('.active') ", function(event) {  $(this).closest('ul').removeClass("open");
})
.on("click", ".nav-link.active", function(event) {        $(this).closest('ul').toggleClass("open");
});