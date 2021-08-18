/*$.get("https://thatcopy.pw/catapi/rest/", function(data){
      $("#image").attr("src",data.url);
        });
*/

$(".btn-danger").click(function(){
  console.log(this.getAttribute("id"));
   $.post("delete.php",{delete:"delete",idDelete:this.getAttribute("id")});
   location.reload();
        })



$(document).ready(function(){
  $("#myInput").on("keyup", function() {
  var value = $(this).val().toLowerCase();
  $("#myTable tr").filter(function() {
  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
     });
  });