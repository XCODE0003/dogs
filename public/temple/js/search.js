// var inputSearch = $("#search_input"),
//     wrapperList = $(".ds-search");

// inputSearch.keyup(function () {
//     console.log(searchUrlGet);

//     $.ajax({
//         url: searchUrlGet,
//         type: "POST",
//         data: {
//             search: inputSearch.val(),
//         },
//         success: function (data) {
//             console.log(data);
//             var html = "";

//             data.forEach(function callback(currentValue, index, array) {
//                 html +=
//                     `
//             <div class="ds-search__list">
//                     <div class="ds-search__image"><img
//                             src="` +
//                     currentValue["preview"] +
//                     `" alt="` +
//                     currentValue["title"] +
//                     `"></div>
//                     <div class="ds-search__item">
//                         <div class="ds-search__title">` +
//                     currentValue["title"] +
//                     `</div>
//             `;

//                 if (currentValue["sub_directory"]) {
//                     html +=
//                         `<div class="ds-search__text">` +
//                         currentValue["sub_directory"]["title"] +
//                         `</div>`;
//                 }

//                 html +=
//                     `
//                     <a class="ds-search__link" href="` +
//                     currentValue["url"] +
//                     `"></a>
//                 </div>
//             </div>
//             `;
//             });

//             wrapperList.html(html);
//             wrapperList.slideDown();
//         },
//         error: function (msg) {
//             wrapperList.slideUp();
//         },
//     });
// });

// $("body").on("click", function (e) {
//     var d = e.target;
//     if ($(d).closest(".ty-search-block").length) {
//         return;
//     } else {
//         wrapperList.slideUp();
//     }
// });

$(".search-button").click(function() {
    var search = $(this).siblings('.__search').val();
    window.location.href = searchUrl+"?search=" + search;
});
