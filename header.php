<?php

if (!isset($_SESSION['username'])) {
  include("guest_header.php");
} else {

  if (!isset($_COOKIE["SESSION_ID"])) {
    session_destroy();
    setcookie("SESSION_ID", 0, time() - 1);
    include("guest_header.php");
  } else {


    setcookie("SESSION_ID", session_id(), time() + 5 * 60);
    include("user_header.php");
  }
}

?>

<script>
  $("#header-search-form").on("input", event => {
    let keyword = $("#header-search-form").val();
    if (keyword !== "") {
      // console.log(keyword);
      $.ajax({
        type: "POST",
        url: "search.php",
        data: {
          keyword: keyword
        },
        dataType: "json",
        success: response => {
          // console.log(response);
          if (response.success) {
            if (response.result.length !== 0) {
              let listHTML = response.result
                .map(item => `<li> ${item["product_name"]} </li>`)
                .join("");
              // console.log(listHTML);
              $(".search-result").html(listHTML);
            } else {
              console.log("Sorry we can not find you need");
            }
          }
        },
        error: err => {
          console.error(err);
        }
      });
    } else {
      $("#header-search-form").html("");
      $(".search-result").html("");
    }
  });
</script>
