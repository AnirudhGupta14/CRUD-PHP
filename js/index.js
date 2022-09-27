$(document).ready(function()
{
    function GetTableData()
    {
      $.ajax({
        url : "showdata.php",
        type : "POST",
        success : function(data){
          $("#table-data").html(data);
        }
      });
    }
    GetTableData(); 

    $("#save-button").on("click",function(e)
    {
      e.preventDefault();
      var rollno = $("#rollno").val();
      var name = $("#name").val();
      var branch = $("#branch").val();
      var age = $("#age").val();
    
        $.ajax({
          url: "insertdata.php",
          type : "POST",
          data : {full_name:name, student_id:rollno, branch:branch, age:age},
          success : function(data)
          {
            if(data == 1)
            {
                GetTableData();
              $("#addForm").trigger("reset");
              $("#success-message").html("Data Inserted Successfully.").slideDown();
              $("#error-message").slideUp();
            }
            else
            {
              $("#error-message").html("Can't Save Record.").slideDown();
              $("#success-message").slideUp();
            }
          }
        });
    });

    $(document).on("click",".delete-btn", function(){
      if(confirm("Do you really want to delete this record ?")){
        var studentId = $(this).data("id");
        var element = this;

        $.ajax({
          url: "deletedata.php",
          type : "POST",
          data : {id : studentId},
          success : function(data){
              if(data == 1){
                $(element).closest("tr").fadeOut();
              }else{
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
          }
        });
      }
    });

    $(document).on("click",".edit-btn", function(){
      $("#modal").show();
      var studentId = $(this).data("id");

      $.ajax({
        url: "updateform.php",
        type: "POST",
        data: {id: studentId },
        success: function(data) {
          $("#modal-form table").html(data);
        }
      })
    });

    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });

      $(document).on("click","#edit-submit", function(){
        var id = $("#edit-id").val();
        var name = $("#edit-name").val();
        var branch = $("#edit-branch").val();
        var age = $("#edit-age").val();

        $.ajax({
          url: "updatedata.php",
          type : "POST",
          data : {id: id, name: name, branch: branch, age: age},
          success: function(data) {
            if(data == 1){
              $("#modal").hide();
              GetTableData(); 
            }
          }
        })
      });

});