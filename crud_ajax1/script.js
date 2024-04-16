$(document).ready(function(){
    // Fetch items on page load
    fetchItems();
  
    // Add item form submission
    $('#addItemForm').submit(function(e){
      e.preventDefault();
      $.ajax({
        url: 'addItem.php',
        type: 'post',
        data: $(this).serialize(),
        success: function(response){
          $('#addItemForm')[0].reset();
          fetchItems();
        }
      });
    });
  });
  
  // Function to fetch items
  function fetchItems(){
    $.ajax({
      url: 'getItems.php',
      type: 'get',
      success: function(response){
        $('#itemTable').html(response);
      }
    });
  }
  