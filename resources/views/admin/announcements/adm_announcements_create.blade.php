@extends('layouts.app-admin')
   
@section('content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">ANNOUNCEMENTS</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{route('admin.announcements.announcements_list')}}"><i class="fas fa-angle-double-left"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create Announcement</li>
                </ol>
              </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-success"><i class="fas fa-plus fa-fw"></i> Announcements</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
        <div class="row">
          <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                  <h3 class="mb-0">Announcements Form</h3>
                </div>
                <div class="card-body py-4 col-xl-12">
                  <form id="form_announcement" method="post" action="{{action('Adm_AnnouncementsController@store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="validationCustom01">Title</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Announcement Title" value="" required="" name="ann_title">
                        <div class="invalid-feedback">
                          Please enter a title.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label class="form-control-label" for="validationCustom02">Image Upload</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validationCustom02" required name="ann_upload">
                          <label class="custom-file-label" for="validationCustom02">Select file</label>
                        </div>
                        <div class="invalid-feedback">
                          Please select a file to be uploaded.
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label class="form-control-label" for="validationCustom04">Content</label>
                        <div class="mb-3">
                          <input name="ann_about" type="hidden" value="">
                          {{-- <div data-toggle="quill" id="editor-container">
                            
                          </div> --}}
                          <div id="editor-container">
                            
                          </div>
                          {{-- <div data-toggle="quill" data-quill-placeholder="Type your announcement here.."></div> --}}
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                  </form>
                </div>
              </div>
          </div>
        </div>

      </div>
    </div>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      var quill = new Quill('#editor-container', {
        modules: {
          toolbar: [
            ['bold', 'italic'],
            ['link', 'blockquote', 'code-block', 'image'],
            [{ list: 'ordered' }, { list: 'bullet' }]
          ]
         },
        placeholder: 'Compose an announcement...',
        theme: 'snow'
        });
        //var quill = new Quill('#editor-container', {});
        var form = document.getElementById('form_announcement');
          form.onsubmit = function () {
              // Populate hidden form on submit
              var content = document.querySelector('input[name=ann_about]');
              content.value = quill.root.innerHTML;
          }
    </script>
@endsection