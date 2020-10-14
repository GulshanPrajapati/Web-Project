$(document).ready(function(){
  $("#btn").click(function(){
    let weight = $("#rs-range-line").val();
    let height = $("#rs-range-line-1").val();
    console.log({weight,height});
  })
});