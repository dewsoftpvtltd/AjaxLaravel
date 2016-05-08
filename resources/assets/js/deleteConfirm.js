 $('.delete-article').click(function(e) {
   e.preventDefault(); // Prevent the href from redirecting directly
   var linkURL = $(this).attr("action");
   warnBeforeRedirect(linkURL);
 });

 function warnBeforeRedirect(linkURL) {
   swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel please!",
        closeOnConfirm: false,
        closeOnCancel: false 
    },
    function(isConfirm) {
        if (isConfirm) {                        
            document.getElementById("myform").submit(); 
            swal("Deleted!", "Your File has been deleted.", "success"); 
        } else {
            swal({title:"Cancelled", 
            	text:"Your File is safe :)", 
            	type:"error", 
            	timer:1000});
        }
    }
);
 }
