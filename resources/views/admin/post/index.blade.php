@extends('admin.index')

@section('AdminContent')
<div class="py-2">
    <div class="d-flex">
        <h2  class="ah-admin-post-title">All Posts section</h2>
        <a href="/" class="btn btn-light btn-outline-info ml-3 ah-post-btn">Add New Post</a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <ul class="nav ah-status-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Publish (2)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Draft(5)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Trash(1)</a>
                </li>
              </ul>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="separator"></div>
    <table class="table">
        <thead>
          <tr class="ah-tablerow">
            <th scope="col" class="col-9 col-sm-8 ad-admin-title">Title</th>
            <th scope="col" class="col ad-admin-title ah-sm">Author</th>
            <th scope="col" class="col ad-admin-title ah-sm">Category</th>
            <th scope="col" class="col ad-admin-title ah-sm">Date</th>
            <th scope="col" class="col ad-admin-title ah-sm">Remark</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ah-tablerow">
            <td class="col-8 col-sm-8">भरतपुरमा अब १४ हजार मत गन्न बाँकी, कसको मत कति?</td>
            <td class="col ah-sm">गोपाल संग्रौला</td>
            <td class="col ah-sm">राजनीति</td>
            <td class="col ah-sm">2022/04/24 at 9:29 am</td>
            <td class="col">
                <div class="d-flex justify-content-between">
                    <a href="button" class="btn btn-primary btn-sm">Edit</a>
                    <a href="button" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
</div>

@endsection
