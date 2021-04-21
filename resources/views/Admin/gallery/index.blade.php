@extends('layouts.admin')
@section('header_section')
<header class="page-header">
   <h2>Media Gallery</h2>
   <div class="right-wrapper pull-right">
      <ol class="breadcrumbs">
         <li>
            <a href="index.html">
            <i class="fa fa-home"></i>
            </a>
         </li>
         <li><span>Pages</span></li>
         <li><span>Media Gallery</span></li>
      </ol>
      <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
   </div>
</header>
@stop
@section('content')
<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
   <div class="content-with-menu-container">
      <div class="inner-body mg-main">
         <div class="inner-toolbar clearfix">
            <ul>
               <li>
               <div class="inner-menu-content">
                  <a class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
                  <i class="fa fa-upload mr-xs"></i>
                  Upload Files
                  </a>
               </div>
               </li>
               <li>
                  <a href="#" id="mgSelectAll"><i class="fa fa-check-square"></i> <span data-all-text="Select All" data-none-text="Select None">Select All</span></a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-pencil"></i> Edit</a>
               </li>
               <li>
                  <a href="#"><i class="fa fa-trash-o"></i> Delete</a>
			   </li>
               <li class="right" data-sort-source data-sort-id="media-gallery">
                  <ul class="nav nav-pills nav-pills-primary">
                     <li>
                        <label>Filter:</label>
                     </li>
                     <li class="active">
                        <a data-option-value="*" href="#all">All</a>
                     </li>
                     <li>
                        <a data-option-value=".document" href="#document">Documents</a>
                     </li>
                     <li>
                        <a data-option-value=".image" href="#image">Images</a>
                     </li>
                     <li>
                        <a data-option-value=".video" href="#video">Videos</a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
		 	@foreach($images as $image)
            <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
					 <a class="thumb-image" href="{{$image->image_url}}">
					<img src="{{$image->image_url}}" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_1" value="1">
                              <label for="file_1">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">{{$image->title}}<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Design, Websites</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
			</div>
			@endforeach
            <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-2.jpg">
                     <img src="assets/images/projects/project-2.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_2" value="1">
                              <label for="file_2">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Blog<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">PSDs, Projects</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
            <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-5.jpg">
                     <img src="assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_3" value="1">
                              <label for="file_3">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Friends<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Projects, Vacation</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-4.jpg">
                     <img src="assets/images/projects/project-4.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_4" value="1">
                              <label for="file_4">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Life<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Images, Photos</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
            <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-5.jpg">
                     <img src="assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_5" value="1">
                              <label for="file_5">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Poetry<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Websites</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
            <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-6.jpg">
                     <img src="assets/images/projects/project-6.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_6" value="1">
                              <label for="file_6">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Fun<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Documentation, Projects</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
            <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-7.jpg">
                     <img src="assets/images/projects/project-7.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_7" value="1">
                              <label for="file_7">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Family<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Documentation</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
            <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
               <div class="thumbnail">
                  <div class="thumb-preview">
                     <a class="thumb-image" href="assets/images/projects/project-1.jpg">
                     <img src="assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                     </a>
                     <div class="mg-thumb-options">
                        <div class="mg-zoom"><i class="fa fa-search"></i></div>
                        <div class="mg-toolbar">
                           <div class="mg-option checkbox-custom checkbox-inline">
                              <input type="checkbox" id="file_8" value="1">
                              <label for="file_8">SELECT</label>
                           </div>
                           <div class="mg-group pull-right">
                              <a href="#">EDIT</a>
                              <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                              <i class="fa fa-caret-up"></i>
                              </button>
                              <ul class="dropdown-menu mg-menu" role="menu">
                                 <li><a href="#"><i class="fa fa-download"></i> Download</a></li>
                                 <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <h5 class="mg-title text-semibold">Hapiness<small>.png</small></h5>
                  <div class="mg-description">
                     <small class="pull-left text-muted">Websites</small>
                     <small class="pull-right text-muted">07/10/2014</small>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop