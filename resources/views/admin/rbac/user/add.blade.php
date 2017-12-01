@extends('layout.index')

@section('title')
用户列表
@endsection

@section('content')
<div id="invalid" class="block-area">
    <h3 class="block-title">管理员添加</h3>
    <form action="{{ route('admin.rbac.user.store') }}" method="post" enctype="multipart/form-data" class="form-validation-2" role="form">
    {{csrf_field()}}
        <!-- username -->
        <div class="form-group">
            <label></label>
            <input type="text" name="name" placeholder="请输入用户名" class="input-sm validate[required,custom[phone]] form-control">
        </div>

        <!-- realname -->
        <div class="form-group">
            <label></label>
            <input type="text" name="username" placeholder="请输入你的真实姓名" class="input-sm form-control validate[required,custom[url]]" value="">
        </div>

        <!-- password -->
        <div class="form-group">
            <label></label>
            <input type="password" name="password" placeholder="请输入你的密码" class="form-control input-sm validate[required,custom[email]]">
        </div>
        <br>

        <!-- phone -->
        <div class="form-group">
            <label></label>
            <input type="text" name="phone" placeholder="请输入你的电话" class="form-control input-sm validate[custom[date]]">
        </div>

        <!-- file -->
        <div data-provides="fileupload" class="fileupload fileupload-new">
            <div class="fileupload-preview thumbnail form-control"></div>
            <div>
                <span class="btn btn-file btn-alt btn-sm">
                    <span class="fileupload-new">选择头像</span>
                    <span class="fileupload-exists">Change</span>
                    <input type="file"  name="picture" >
                </span>
                <a data-dismiss="fileupload" class="btn fileupload-exists btn-sm" href="#">移出头像</a>
            </div>
        </div>


        <input type="submit" value="添加" class="btn btn-sm">
        <!-- <button class="btn btn-sm validation-clear">CLOSE PROMPTS</button> -->
    </form>
</div>
@endsection
