// jQuery(document).ready(function(){
//     jQuery('.ajax-btn').click(function(e){
//         e.preventDefault();
//         alert('dsdadsasd');
//         return;
//         $.ajax({
//             type: 'GET',
//             url: '/create',
//             success: function(result){
//                 alert(result);
//             }
//         });
//
//
//     });
// });

// // Get the modal
// var modal = document.getElementById("myModal");
//
// // Get the button that opens the modal
// var btn = document.getElementById("create");
//
// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
//
// // When the user clicks the button, open the modal
// btn.onclick = function() {
//     modal.style.display = "block";
// }
//
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal.style.display = "none";
// }
//
// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target === modal) {
//         modal.style.display = "none";
//     }
// }

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})
