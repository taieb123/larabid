 Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });

      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });

    }

  };

  load_images();

  function load_images()
  {
    $.ajax({
      url:"{{ route('dropzone.fetch') }}",
      success:function(data)
      {
        $('#uploaded_image').html(data);
      }
    })
  }

  $(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
      url:"{{ route('dropzone.delete') }}",
      data:{name : name},
      success:function(data){
        load_images();
      }
    })
  });

  var number = 0;
$(document).on('click','.btn-add-field',function(){
    number = $(this).closest('.tab-pane').find('.form-row.custom_field').length;
    title_field_label ="Label";
    title_field_value = "value"
    input_type = $(this).data('type');

    console.log($(this));
    console.log($(this));
    html =  '<div class="row ">'+
    '<div class="form-group col-md-6">'+
        '<label>'+title_field_label+'</label>'+
        '<input type="text" required value="" name="label[0][]" placeholder="">'+
   '</div>'+
   '<div class="form-group col-md-6">'+
        '<label for="prix_deb">'+title_field_value+'</label>'+
        '<input type="text" required id="prix_deb"  name="value[0][]" placeholder="">'+
    '</div></div>';
    $(html).insertBefore('.zone_add_new_field');
    number++;
  });
