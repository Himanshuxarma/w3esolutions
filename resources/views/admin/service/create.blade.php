@extends('admin.layouts.master')
@section('customstyle')
@section('content')

<section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                 <div class="card-header">
                  <h3 class="card-title">Service Form</h3>
                 </div>

                 <form id="quickForm" action="{{route('servicesSave')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">  
                              <div class="form-group">
                                  <label for="title"> Title </label>
                                  <input type="text" name="title" class="form-control" id="title" require placeholder="Enter  Title">
                                 </div>
                              </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="summernote" name="description"> </textarea>
                              </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="image"> Image</label>
                            <input type="file" name="image" class="form-control" id="image"require placeholder=" Image">
                          </div>
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
</section>
<script>
$(function () {

$('#quickForm').validate({
rules: {
banner_title: {
required: true,
banner_title: true,
},
page_name: {
required: true,

},
banner_image: {
required: true
},
status: {
required: true
},
},
messages: {
banner_title: {
required: "Please enter a banner title",

},
page_name: {
required: "Please enter a page name",

},
banner_image: {
required: "Please enter a banner image",

},
status: {
require: "Please enter a status"

},
},
errorElement: 'span',
errorPlacement: function (error, element) {
error.addClass('invalid-feedback');
element.closest('.form-group').append(error);
},
highlight: function (element, errorClass, validClass) {
$(element).addClass('is-invalid');
},
unhighlight: function (element, errorClass, validClass) {
$(element).removeClass('is-invalid');
}
});
});
</script>
@endsection
@section('customscript')
<script>
$(function () {
// Summernote
$('#summernote').summernote()

// CodeMirror
CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
mode: "htmlmixed",
theme: "monokai"
});
})
</script>
@endsection


