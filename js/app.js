$( document ).ready(function() {
  $('#kota_asal').select2({
     placeholder: 'Pilih kota/kabupaten asal',
     language: "id"
  });

  $('#kota_tujuan').select2({
     placeholder: 'Pilih kota/kabupaten tujuan',
     language: "id"
  });

    $.ajax({
      type: "GET",
      dataType: "html",
      url: "data-kota.php?q=kotaasal",
      success: function(msg){
      $("select#kota_asal").html(msg);                                                     
      }
    });    
 
 $.ajax({
      type: "GET",
      dataType: "html",
      url: "data-kota.php?q=kotatujuan",
      success: function(msg){
      $("select#kota_tujuan").html(msg);                                                     
      }
   });

   $("#ongkir").submit(function(e) {
      e.preventDefault();
      $.ajax({
          url: 'cek-ongkir.php',
          type: 'post',
          data: $( this ).serialize(),
          success: function(data) {
            console.log(data);
            document.getElementById("response_ongkir").innerHTML = data;
          }
      });
  });

});