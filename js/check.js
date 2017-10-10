$(document).ready(function () {
$("#photo").change(function()
  {
  var files = !!this.files ? this.files : [];
  var file  =  $(photo).val();
  var empty = '<p style="margin:30px 10px;">Photo</p>';
  var msgs=' <img src="img/loading.gif" /> Please Wait Uploading Image';
  var invalid= '<p style="color: red;margin:0px;padding:0px;font-size:12px;">Upload Only Images</p>';
  var dimen= '<p style="color: red;margin:0px;padding:0px;font-size:12px;">Resolution below - 160x200</p>';
  $('#msgs').html(msgs);
    if(file=="")
    {
       $("#imagePreview").html(empty);
       $("#imagePreview").css("background-image", "");
       $('#msgs').html("");
       $("#imageerror").html("");
       $("#dim").html("");
       $("#photo").val('');
    }
    else if (files.length || window.FileReader){ // no file selected, or no FileReader support

        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file

            reader.onloadend = function(e){
            var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                    var height = this.height;
                    var width = this.width;
        if(width!=0 && height!=0){
            $('#imageval-error').hide();
            $("#imagePreview").html("");
            $("#imagePreview").css("background-image", "url("+e.target.result+")");
            $('#msgs').html('');
            $("#imageerror").html("");
            $("#dim").html("");
            $("#photo-error").attr('display','none');
        }
        else {
            $("#dim").html(dimen);
            $("#imagePreview").html(empty);
            $("#imagePreview").css("background-image", "");
            $('#msgs').html("");
            $('#photo').val("");
            $("#imageerror").html("");
        }
      } // set image data as background of div
            }
     }
   else {
     $('#imageval-error').hide();
     $("#imagePreview").html(empty);
     $("#imageerror").html(invalid);
     $("#imagePreview").css("background-image", "");
     $('#msgs').html('');
     $('#photo').val("");
     $("#dim").html("");
   }
    }
});

$('#reset').click(function(){
    var empty = '<p style="margin:30px 10px;">Photo</p>';
    $("#imagePreview").css("background-image", "");
    $('#imageerror').html('');
    $("#dim").html("");
    $("#imagePreview").html(empty);
    $("#entryForm").validate().resetForm();
    $("#entryForm").removeClass('has-error');
    $("input, select, textarea").removeClass('error');
});
$.validator.addMethod('filesize', function(value, element, param) {
    return this.optional(element) || (element.files && element.files[0] && element.files[0].size <= param) 
});
$('#entryForm').validate({
  errorElement:'span',
  errorClass:'has-error',
  onfocusout: false,
  rules:
  {
    type_of_property:
    {
      required:true
    },
    name_of_the_manufacture:
    {
      required:true
    },
    fir_no:
    {
      required:true
    },
    sec_of_law:
    {
      required:true
    },
    ps_dist:
    {
      required:true
    },
    model_no:
    {
      required:true
    },
    chassis_no:
    {
      required:true
    },
    reg_no:
    {
      required:true
    },
    date_of_detention:
    {
      required:true
    },
    officer_name_designation:
    {
      required:true
    },
    photo:
    {
      required:true
    }
  },
  messages:
  {
   type_of_property:
    {
      required:"Please Enter Type of Property"
    },
    name_of_the_manufacture:
    {
      required:"Please Enter Make"
    },
    fir_no:
    {
      required:"Please Enter FIR No."
    },
    sec_of_law:
    {
      required:"Please Select Section of law"
    },
    ps_dist:
    {
      required:"Please Enter PS&Dist"
    },
    model_no:
    {
      required:"Please Enter Modal No."
    },
    chassis_no:
    {
      required:"Please Enter Chassis No."
    },
    reg_no:
    {
      required:"Please Enter Registration No."
    },
    date_of_detention:
    {
      required:"Please Enter Date of Detention"
    },
    officer_name_designation:
    {
      required:"Please Enter Officer Name Designation"
    },
    photo:
    {
      required:"Please Upload Photo"
    } 
  },
  highlight: function(element){
    $(element).addClass('error');
  },
  unhighlight: function(element){
    $(element).removeClass('error');
  },
  errorPlacement:function(error,element){
    if(element.attr('name')=='photo')
      error.appendTo(".dim");
    else
    if(element.attr('id') == 'imageval')
      error.insertAfter("#msgs").css("color","red");
    else
      error.insertAfter(element);
  }
});
});