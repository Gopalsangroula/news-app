@extends('admin.index')

@section('AdminContent')
<div class="py-2">
    <div class="d-flex">
        <h2 class="ah-admin-post-title">Add New Post</h2>
    </div>
    <div class="row">
        <div class="col-md-12 store-item">
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label class="form-label ah-admin-lable-title">News Title</label>
                        <input type="text" class="form-control" name="candidate-name" placeholder="Add Title here ...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label ah-admin-lable-title">News Sub Title</label>
                        <input type="text" class="form-control" name="candidate-name"
                            placeholder="Add Sub Title here ...">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label ah-admin-lable-title">Post Description</label>
                <textarea class="form-control" name="candidate-details" id="desc"
                    rows="8"> {{ old('body') }}</textarea>
            </div>
        </div>
        <div class="col-md-7">
            <div class="ah-excerpt">
                <label class="form-label ah-admin-lable-title">Post excerpt</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>

            </div>
        </div>
        <div class="col-md-7"></div>
        <div class="ah-features-item mt-5">
            <div class="row">
                <div class="col-md-2">
                    <div class="cat-section">
                        <label class="form-label ah-admin-lable-title">Categories</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tag-section">
                        <label class="form-label ah-admin-lable-title">Tags</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select Tags</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="featured-section">
                        <label class="form-label ah-admin-lable-title">Featured Image</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" name="candidate-image" class="btn btn-primary form-control">
                                <i class="fa fa-picture-o"></i> Choose
                              </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="filepath" placeholder="Add Candidate Image">
                          <img id="holder" style="margin-top:15px;max-height:100px;">
                       </div>
                       <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
                       <script>
                        var route_prefix = "admin/laravel-filemanager";
                           $('#lfm').filemanager('image', {prefix: route_prefix});
                       </script>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="tag-section">
                        <label class="form-label ah-admin-lable-title">Post Author</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option selected>Select Author</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="publish-section">
                        <label class="form-label ah-admin-lable-title">Post Status</label>
                        <div class="d-flex justify-content-between">
                            <a href="/" class="btn btn-primary btn-outline-info ml-3 ah-post-btnPub">Publish</a>
                            <a href="/" class="btn btn-light btn-outline-info ml-3 ah-post-btn">Save Draft</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




        <script src="https://cdn.tiny.cloud/1/olmdo1837ri2abprte1e1y0dhqho99nlpcx4hu52vpizspwj/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>

       var editor_config = {
           path_absolute : "/",
           selector: '#desc',
           height: 560,
           plugins: [
                       "advlist autolink lists autosave link image charmap print preview anchor",
                       "searchreplace visualblocks code fullscreen",
                       "insertdatetime media table contextmenu paste imagetools"
                   ],
           toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
             'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
             'forecolor backcolor emoticons | help',
           menu: {
             favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
           },
           content_css: [
                       'https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                       '//www.tinymce.com/css/codepen.min.css'
                   ],
           menubar: 'favs file edit view insert format tools table help',
             relative_urls: false,
             content_css: 'css/content.css',
           automatic_uploads: true,
           image_title: true,
           automatic_uploads: true,
             file_picker_callback : function(callback, value, meta) {
               var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
               var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

               var cmsURL = editor_config.path_absolute + 'admin/laravel-filemanager?editor=' + meta.fieldname;
               if (meta.filetype == 'image') {
                 cmsURL = cmsURL + "&type=Images";
               } else {
                 cmsURL = cmsURL + "&type=Files";
               }

               tinyMCE.activeEditor.windowManager.openUrl({
                 url : cmsURL,
                 title : 'Filemanager',
                 width : x * 0.8,
                 height : y * 0.8,
                 resizable : "yes",
                 close_previous : "no",
                 onMessage: (api, message) => {
                   callback(message.content);
                 }
               });
             }
           };

           tinymce.init(editor_config);
       </script>

    @endsection
